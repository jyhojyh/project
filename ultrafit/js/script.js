$(document).ready(function(){	

	const REDIRECT_URL = 'ready.html';
  const IDLE_MS = 90 * 1000;

  // --- 워커 코드 생성 ---
  const workerCode = `
    let ms = 10000, timer = null;
    function start(){ clearTimeout(timer); timer = setTimeout(()=>postMessage('idle'), ms); }
    onmessage = (e)=>{
      const d = e.data || {};
      if(d.cmd === 'init'){ ms = d.ms || ms; start(); }
      else if(d.cmd === 'reset'){ start(); }
      else if(d.cmd === 'stop'){ clearTimeout(timer); }
    };
  `;
  const blob = new Blob([workerCode], { type: 'text/javascript' });
  const worker = new Worker(URL.createObjectURL(blob));

  worker.onmessage = (e)=>{
    if(e.data === 'idle'){
      // 뒤로가기 허용: href / 비허용: replace
      location.href = REDIRECT_URL;
      // location.replace(REDIRECT_URL);
    }
  };
  worker.postMessage({ cmd: 'init', ms: IDLE_MS });

  // 이벤트 발생 시 타이머 리셋
  const reset = ()=> worker.postMessage({ cmd: 'reset' });
  const events = ['pointerdown','pointermove','keydown','wheel','touchstart','touchmove','mousemove','mousedown','scroll'];
  events.forEach(evt => window.addEventListener(evt, reset, { passive: true, capture: true }));

  document.addEventListener('visibilitychange', () => {
    if (!document.hidden) reset();
  });
});

// 대기 화면 스크립트 끝

/**
 * SPA Router + Scroll Restore (no vertical scroll motion on slide)
 * - Forward(일반 링크): 전환 중 세로 스크롤 lock + 폭 보정(흰 띠 방지), 슬라이드만 보임.
 * - Back(data-back/브라우저 뒤로): 슬라이드 유지, 저장된 스크롤 즉시 복원(세로 모션 없음).
 * - no-sliding 클래스: 위의 슬라이딩 효과를 **비활성화**하고 즉시 전환.
 *
 * 의존: jQuery, Swiper, AOS (선로드)
 */
(function () {
  // ===== 설정 =====
  const FORCE_ANIMATE = false;
  const DURATION_MS   = 350;
  const EASE          = 'cubic-bezier(.22,.61,.36,1)';

  const app = document.getElementById('app');
  if (!app) return;

  const IS_FILE     = location.protocol === 'file:';
  const HAS_VT      = (typeof CSS !== 'undefined' && 'startViewTransition' in document && CSS.supports('view-transition-name: app'));
  const PREF_REDUCE = matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (FORCE_ANIMATE) document.documentElement.classList.add('force-animate');

  // 최초 state
  try { if (!history.state) history.replaceState({ url: location.href }, '', location.href); } catch(_) {}

  // ===== 페이지별 초기화 =====
  function clearPageTimers() { (window.__pageTimers || []).forEach(clearTimeout); window.__pageTimers = []; }
  function destroySwipers() {
    document.querySelectorAll('.swiper').forEach(root => {
      if (root.swiper) { try { root.swiper.destroy(true, true); } catch(_) {} }
    });
  }

  window.pageBoot = function () {
    if (typeof jQuery !== 'undefined' && jQuery.fn && jQuery.fn.rwdImageMaps) {
      jQuery('img[usemap]').rwdImageMaps();
    }
    if (window.AOS) {
      if (!window.__aos_inited) { AOS.init(); window.__aos_inited = true; }
      else { AOS.refreshHard && AOS.refreshHard(); }
    }
    clearPageTimers();
    destroySwipers();

    // fadeIn 예시(있는 페이지에만 영향)
    if (typeof jQuery !== 'undefined') {
      const $game = jQuery('.game-result');
      const $nextbtn = jQuery('.next-btn');
      if ($game.length) {
        const $imgs = $game.find('img');
        if ($imgs.eq(1).length) {
          $imgs.eq(1).stop(true, true).hide();
          $nextbtn && $nextbtn.on && $nextbtn.on("click", function () {
            $imgs.eq(1).fadeIn(800);
            $nextbtn.fadeOut();
          });
        }
      }
    }

    // Swiper
    document.querySelectorAll('.product-view .swiper').forEach((root) => {
      if (!window.Swiper) return;
      const pv     = root.closest('.product-view') || document;
      const nextEl = pv.querySelector('.next') || undefined;
      const prevEl = pv.querySelector('.prev') || undefined;
      const pagEl  = root.querySelector('.swiper-pagination') || undefined;
      new Swiper(root, {
        loop: true,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        pagination: pagEl ? { el: pagEl, clickable: true } : undefined,
        navigation: { nextEl, prevEl }
      });
    });
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', window.pageBoot);
  else window.pageBoot();

  // ===== 스크롤 저장/복원 & 잠금 유틸 =====
  const scrollMap = new Map(); // url -> [x, y]
  function saveScrollNow() { scrollMap.set(location.href, [scrollX, scrollY]); }
  function getSavedY(url) { const p = scrollMap.get(url); return p ? p[1] : 0; }
  function jumpTo(y) {
    const de = document.documentElement;
    const prev = de.style.scrollBehavior;
    de.style.scrollBehavior = 'auto';
    window.scrollTo(0, y);
    de.style.scrollBehavior = prev;
  }

  function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
  }

  // 전환 중 세로 스크롤 lock + 폭 보정(흰 띠 방지)
  function lockScrollAtCurrent() {
    const y    = window.scrollY || document.documentElement.scrollTop || 0;
    const html = document.documentElement;
    const body = document.body;
    const sbw  = getScrollbarWidth();

    const prev = {
      htmlScrollBehavior: html.style.scrollBehavior,
      htmlOverflowX: html.style.overflowX,
      bodyPosition: body.style.position,
      bodyTop: body.style.top,
      bodyLeft: body.style.left,
      bodyRight: body.style.right,
      bodyWidth: body.style.width,
      bodyPaddingRight: body.style.paddingRight,
      bodyOverflowY: body.style.overflowY
    };

    html.style.scrollBehavior = 'auto';
    html.style.overflowX = 'hidden';

    body.style.position = 'fixed';
    body.style.top = `-${y}px`;
    body.style.left = '0';
    body.style.right = '0';
    body.style.width = '100%';
    body.style.paddingRight = sbw > 0 ? sbw + 'px' : '';
    body.style.overflowY = 'hidden';

    return function unlock() {
      body.style.position = prev.bodyPosition;
      body.style.top = prev.bodyTop;
      body.style.left = prev.bodyLeft;
      body.style.right = prev.bodyRight;
      body.style.width = prev.bodyWidth;
      body.style.paddingRight = prev.bodyPaddingRight;
      body.style.overflowY = prev.bodyOverflowY;
      html.style.overflowX = prev.htmlOverflowX;
      html.style.scrollBehavior = prev.htmlScrollBehavior;
      window.scrollTo(0, y);
    };
  }

  // ===== 유틸 =====
  function isSameOriginHref(href) {
    try { return new URL(href, location.href).origin === location.origin; }
    catch { return false; }
  }
  function isSameOriginLink(el) {
    if (!el || el.target === '_blank' || el.hasAttribute('download')) return false;
    const u = new URL(el.href, location.href);
    if (u.origin !== location.origin) return false;
    if (u.pathname === location.pathname && u.search === location.search && u.hash) return false; // 해시만 변경
    return true;
  }
  function getLinkFromEvent(e) {
    const path = e.composedPath ? e.composedPath() : [];
    for (const n of path) {
      if (!n || n.nodeType !== 1) continue;
      const tag = (n.tagName || '').toLowerCase();
      if ((tag === 'a' || tag === 'area') && n.hasAttribute('href')) return n;
    }
    return e.target?.closest?.('a[href]') || null;
  }
  async function fetchAppHTML(url) {
    const res = await fetch(url, { credentials: 'same-origin' });
    if (!res.ok) throw new Error(res.status + ' ' + res.statusText);
    const html = await res.text();
    const doc = new DOMParser().parseFromString(html, 'text/html');
    const nextApp = doc.querySelector('#app');
    if (!nextApp) throw new Error('No #app in target page');
    return { inner: nextApp.innerHTML, title: doc.title || document.title };
  }
  function getBodyBG() {
    const cs = getComputedStyle(document.body);
    return {
      color: cs.backgroundColor || 'transparent',
      image: cs.backgroundImage || 'none',
      repeat: cs.backgroundRepeat || 'no-repeat',
      position: cs.backgroundPosition || '0 0',
      size: cs.backgroundSize || 'auto'
    };
  }

  // ===== Router / Transitions =====
  let busy = false;

  // --- 애니메이션 경로(VT 또는 fetch-fallback)
  async function navigateVT(url, { direction = 'forward', push = true } = {}) {
    if (busy) return; busy = true;
    const unlock = (direction === 'forward') ? lockScrollAtCurrent() : null;
    const savedY = (direction === 'back') ? getSavedY(url) : 0;

    document.documentElement.classList.add(direction === 'forward' ? 'vt-forward' : 'vt-back');
    try {
      const { inner, title } = await fetchAppHTML(url);
      const vt = document.startViewTransition(() => {
        app.innerHTML = inner;
        document.title = title;
        try { if (push) history.pushState({ url }, '', url); } catch(_) {}
        if (direction === 'back') jumpTo(savedY);
        if (typeof window.pageBoot === 'function') { try { window.pageBoot(); } catch(e){} }
      });
      await vt.finished;
    } catch (err) {
      console.warn('[vt] hard nav fallback:', err);
      location.href = url;
    } finally {
      document.documentElement.classList.remove('vt-forward', 'vt-back');
      if (unlock) unlock();
      busy = false;
    }
  }

  async function navigateFB(url, { direction = 'forward', push = true } = {}) {
    if (busy) return; busy = true;

    const unlock = (direction === 'forward') ? lockScrollAtCurrent() : null;
    const savedY = (direction === 'back') ? getSavedY(url) : 0;

    let payload;
    try { payload = await fetchAppHTML(url); }
    catch (err) { console.warn('[fb] hard nav:', err); if (unlock) unlock(); location.href = url; return; }

    const prevPos = app.style.position, prevOv = app.style.overflow;
    app.style.position = 'relative'; app.style.overflow = 'hidden';

    const bg = getBodyBG();

    const cur = document.createElement('div');
    cur.className = 'fallback-view';
    Object.assign(cur.style, {
      position: 'absolute', inset: '0', willChange: 'transform,opacity',
      backfaceVisibility: 'hidden', transform: 'translateZ(0)',
      backgroundColor: bg.color, backgroundImage: bg.image,
      backgroundRepeat: bg.repeat, backgroundPosition: bg.position, backgroundSize: bg.size
    });
    while (app.firstChild) cur.appendChild(app.firstChild);
    app.appendChild(cur);

    const next = document.createElement('div');
    next.className = 'fallback-view';
    Object.assign(next.style, {
      position: 'absolute', inset: '0', willChange: 'transform,opacity',
      backfaceVisibility: 'hidden', transform: 'translateZ(0)',
      backgroundColor: bg.color, backgroundImage: bg.image,
      backgroundRepeat: bg.repeat, backgroundPosition: bg.position, backgroundSize: bg.size
    });
    next.innerHTML = payload.inner;
    app.appendChild(next);

    // 수직 이동 제거 → 슬라이드만
    next.style.transform = (direction === 'forward')
      ? 'translate3d(100%,0,0)'
      : 'translate3d(-30%,0,0)';
    cur.style.transform  = 'translate3d(0,0,0)';
    void next.offsetWidth;

    const trans = `transform ${DURATION_MS}ms ${EASE}, opacity ${DURATION_MS}ms ease`;
    cur.style.transition = trans;
    next.style.transition = trans;

    try { if (push) history.pushState({ url }, '', url); } catch(_) {}
    document.title = payload.title;

    cur.style.transform  = (direction === 'forward') ? 'translate3d(-30%,0,0)' : 'translate3d(100%,0,0)';
    next.style.transform = 'translate3d(0,0,0)';

    const done = () => {
      app.innerHTML = payload.inner;
      app.style.position = prevPos; app.style.overflow = prevOv;

      if (direction === 'back') jumpTo(savedY);

      cur.remove(); next.remove();
      if (typeof window.pageBoot === 'function') { try { window.pageBoot(); } catch(e){} }
      if (unlock) unlock();
      busy = false;
    };
    next.addEventListener('transitionend', done, { once: true });
    setTimeout(done, DURATION_MS + 120);
  }

  function navigate(url, opts) {
    if (IS_FILE) { location.href = url; return; }
    const useVT = HAS_VT && (!PREF_REDUCE || FORCE_ANIMATE);
    return useVT ? navigateVT(url, opts) : navigateFB(url, opts);
  }

  // --- ★ no-sliding 전용 즉시 전환 경로 ---
  async function navigateInstantForward(url) {
    if (busy) return; busy = true;
    if (IS_FILE) { location.href = url; return; }
    try {
      const { inner, title } = await fetchAppHTML(url);
      app.innerHTML = inner;
      document.title = title;
      try { history.pushState({ url }, '', url); } catch(_) {}
      if (typeof window.pageBoot === 'function') { try { window.pageBoot(); } catch(e){} }
      // 스크롤은 현 위치 유지(어떤 transition도 없음)
    } catch (err) {
      console.warn('[instant-forward] hard nav:', err);
      location.href = url;
    } finally {
      busy = false;
    }
  }

  async function navigateBackInstant(url) {
    if (busy) return; busy = true;
    if (IS_FILE) { location.href = url; return; }
    try {
      const savedY = getSavedY(url);
      const { inner, title } = await fetchAppHTML(url);
      app.innerHTML = inner;
      document.title = title;
      try { history.pushState({ url }, '', url); } catch(_) {}
      if (typeof window.pageBoot === 'function') { try { window.pageBoot(); } catch(e){} }
      requestAnimationFrame(() => jumpTo(savedY)); // 스크롤만 즉시 복원
    } catch (err) {
      console.warn('[instant-back] hard nav:', err);
      location.href = url;
    } finally {
      busy = false;
    }
  }

  // ===== 클릭 인터셉트 (data-back: href 우선) =====
  document.addEventListener('pointerdown', (e) => {
    const el = getLinkFromEvent(e);
    if (!el) return;
    if (el.hasAttribute('data-back')) {
      el.dataset.backHref  = el.getAttribute('href') || '/';
      el.dataset.backArmed = '1';
      el.removeAttribute('data-back');
    }
  }, true);

  document.addEventListener('click', (e) => {
    const el = getLinkFromEvent(e);
    if (!el) return;

    const noSlide = el.classList && el.classList.contains('no-sliding');

    // pointerdown에서 무장된 back 버튼
    if (el.dataset && el.dataset.backArmed === '1') {
      const href = el.dataset.backHref || '/';
      e.preventDefault(); e.stopPropagation(); e.stopImmediatePropagation();
      delete el.dataset.backArmed; delete el.dataset.backHref;

      if (isSameOriginHref(href)) {
        if (noSlide) navigateBackInstant(new URL(href, location.href).href);
        else navigate(new URL(href, location.href).href, { direction: 'back', push: true });
      } else {
        location.href = href;
      }
      return;
    }

    // pointerdown 미발생 등으로 data-back 남아있는 경우
    if (el.hasAttribute && el.hasAttribute('data-back')) {
      const href = el.getAttribute('href') || '/';
      e.preventDefault(); e.stopPropagation(); e.stopImmediatePropagation();

      if (isSameOriginHref(href)) {
        if (noSlide) navigateBackInstant(new URL(href, location.href).href);
        else navigate(new URL(href, location.href).href, { direction: 'back', push: true });
      } else {
        location.href = href;
      }
      return;
    }

    // 일반 내부 링크: 떠나기 전 스크롤 저장 → 전환
    if (isSameOriginLink(el)) {
      saveScrollNow();
      e.preventDefault();
      if (noSlide) {
        navigateInstantForward(el.href);
      } else {
        navigate(el.href, { direction: 'forward', push: true });
      }
    }
  }, true);

  // 브라우저 popstate: back 슬라이드 + 저장 위치 복원
  window.addEventListener('popstate', (e) => {
    const url = (e.state && e.state.url) ? e.state.url : location.href;
    navigate(url, { direction: 'back', push: false });
  });
})();