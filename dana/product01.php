<?php
$cate_name = "product";
$cate_name_kr = "제품정보";
$sub_cate01 = "도서관";
$sub_cate02 = "일반열람실";
include_once("header.php");
include_once("banner.php");
?>

<section class="product-slide pt150">
  <div class="container">
    <h4 class="f30 text-center">우리 아이들의 건강과 안전을 생각하여</h4>
    <h3 class="f70 fw7 text-center">친환경 원목가구만을 고집하는 브랜드</h3>
    <div class="svg-wrap mt30 text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="212.421" height="66.432" viewBox="0 0 212.421 66.432">
        <path data-name="패스 7836"
          d="m311.623 253.124-26.3-45.883h-14.48v41.437l-18.61-40.746h-13.524L219.9 249.873l-.735 1.638c-2.95 5.893-8.78 10.235-18.2 10.235h-14.41v-42.074h14.41c10.97 0 17.055 6.047 19.415 13.492l6.3-14.049c-5.333-6.664-13.766-11.182-25.716-11.182H175.13v65.74h25.826a40.718 40.718 0 0 0 8.662-.889 29.111 29.111 0 0 0 20.137-14.923l2.177-5.051 1.33-3.086 6.551-15.016 5.658-12.97 23.568 51.935h13.221v-47.318l27.849 46.626h12.93v-65.74h-11.417v45.883z"
          transform="translate(-175.13 -207.241)" style="fill:#ee771b" />
        <path data-name="패스 7837" d="M450.964 207.241H437.44l-15.749 35.386h13.084l9.427-21.581 23.568 51.935h13.22z"
          transform="translate(-268.57 -207.241)" style="fill:#ee771b" />
      </svg>
    </div>
  </div>
  <div class="swiper relative mt150">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/product/slide01.jpg" alt="" class="img-responsive center-block" />
        <div class="text-wrap absolute col-1 translate-y text-center">
          <h4 class="f20 fw6 main-c">01</h4>
          <h3 class="mt10 f42 white line2">몰입과 집중이 공존하는<br /> 열람의 중심</h3>
          <p class="mt30 f20 white">정제된 동선, 눈의 피로를 덜어주는 조도, 다양한 좌석이 조화를 이루는 공간입니다.</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/product/slide02.jpg" alt="" class="img-responsive center-block" />
        <div class="text-wrap absolute col-1 translate-y text-center">
          <h4 class="f20 fw6 main-c">02</h4>
          <h3 class="mt10 f42 white line2">열린 구조와<br />시선 분리의 균형</h3>
          <p class="mt30 f20 white">정제된 개방성과 프라이버시를 동시에 만족시키는 책장 배치와 공간 구획 설계가 특징입니다.</p>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./images/product/slide03.jpg" alt="" class="img-responsive center-block" />
        <div class="text-wrap absolute col-1 translate-y text-center">
          <h4 class="f20 fw6 main-c">03</h4>
          <h3 class="mt10 f42 white line2">장시간 머무름에<br />최적화된 사용성</h3>
          <p class="mt30 f20 white">인체공학 기반의 좌석, 다양한 작업 형태를 고려한 책상, 정숙하고 편안한 환경이 조성됩니다.</p>
        </div>
      </div>
    </div>
    <div class="wrap absolute flex col-1 justify-center items-center">
      <div class="button-prev mr40 pointer">
        <svg class="block" xmlns="http://www.w3.org/2000/svg" width="8.414" height="15.827" viewBox="0 0 8.414 15.827">
          <path data-name="패스 7821" d="m-1325.433 4056.807-7.207 7.207 7.207 7.207"
            transform="translate(1333.14 -4056.101)"
            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round" />
        </svg>
      </div>
      <div class="pagination"></div>
      <div class="button-next ml40 pointer">
        <svg class="block" xmlns="http://www.w3.org/2000/svg" width="8.414" height="15.827" viewBox="0 0 8.414 15.827">
          <path data-name="패스 7822" d="m-1332.64 4056.807 7.207 7.207-7.207 7.207"
            transform="translate(1333.347 -4056.101)"
            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round" />
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Design Story Section -->
<section class="design-story mt150">
  <div class="container">
    <h3 class="mont f18 fw6 main-c upper">DESIGN STORY</h3>
    <div class="flex mt20">
      <div class="left col-2">
        <h4 class="f56 fw8 line3">일반열람실에 대한<br>다나의 공간 설계 철학</h4>
      </div>
      <div class="right col-2">
        <p>일반열람실은 도서관에서 가장 많은 시간이 소비되는 핵심 공간입니다. 이용자의 집중과 몰입, 시선 분리, 장시간 사용에 따른 피로도를 낮추는 설계가 중요합니다.</p>
        <p class="mt20">다나는 사용자 UX 관점에서 일반열람실을 "몰입 중심의 복합 열람 공간"으로 정의합니다. 책장, 좌석, 조명, 동선이 유기적으로 연결되도록 하여 개방성과 시각적 분리를 함께
          구현하고, 다양한 열람
          목적에 맞춰 조정 가능한 좌석 및 책상 구조를 적용합니다.</p>
        <p class="mt20">정숙함과 집중력 유지에 최적화된 레이아웃은 다나만의 차별 포인트입니다.</p>
        <img src="images/product/content01.png" alt="" class="img-responsive center-block mt40" />
      </div>
    </div>
  </div>
</section>

<!-- Considerations Section -->
<section class="considerations mt150">
  <div class="container">
    <div class="considerations-grid">
      <h3 class="mont f18 fw6 main-c upper">Considerations</h3>
      <h4 class="mt20 f56 fw8 line3">실별 구축 시 고려사항</h4>
      <ul class="mt60">
        <li class="flex flex-wrap items-center pt40 pb40">
          <span class="mont f20 fw7 main-c">01</span>
          <h5 class="pl40 f24 fw5">몰입 중심의 열람 환경</h5>
          <p>조도, 색채, 소음, 가구 배치가 이용자의 집중력을 방해하지 않도록 구성합니다. 책상 사이의 간격, 파티션 높이, 동선 최소화 등이 핵심입니다. 은은한 원목 질감은 시각 피로를 덜고, 공간
            전체에 차분한 리듬감을 부여합니다.</p>
        </li>
        <li class="flex flex-wrap items-center pt40 pb40">
          <span class="mont f20 fw7 main-c">02</span>
          <h5 class="pl40 f24 fw5">다양한 작업 행태에 대응하는 가구 구성</h5>
          <p>단독 열람, 협업, 디지털 기기 사용 등 다양한 이용 방식에 맞춰 좌석, 책상, 충전기, 조명 등의 조합을 구성합니다. 내추럴 톤의 가구는 개별 이용자에게 안정적인 심리 환경을 제공하며,
            공간의 통일성과 따뜻함을 유지합니다.</p>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Key Words Section -->
<section class="keywords mt150">
  <h3 class="mont f18 fw6 main-c upper text-center">KEY WORDS</p>
    <h4 class="mt20 f56 fw8 line3 text-center">실별 핵심 키워드</h4>
    <ul class="mt60">
      <li class="flex flex-wrap items-center">
        <div class="wrap col-2">
          <span class="mont f20 fw6 main-c">01</span>
          <h5 class="mt10 f30 fw8">시선 분리형 책장 배치</h5>
          <p class="mt30">조도, 색채, 소음, 가구 배치가 이용자의 집중력을 방해하지 않도록 구성합니다. 책상 사이의 간격, 파티션 높이, 동선 최소화 등이 핵심입니다. 은은한 원목 질감은 시각
            피로를 덜고, 공간 전체에 차분한 리듬감을 부여합니다.</p>
        </div>
        <div class="wrap col-2">
          <img src="images/product/content02.png" alt="" class="img-responsive center-block" />
        </div>
      </li>
      <li class="flex flex-wrap items-center mt35">
        <div class="wrap col-2">
          <span class="mont f20 fw6 main-c">02</span>
          <h5 class="mt10 f30 fw8">다양한 좌석 유형 구성</h5>
          <p class="mt30">파티션 좌석, 열린 책상, 스탠딩 테이블 등 사용자 목적에 맞춘 좌석을 혼합 배치해 열람실의 활용도를 극대화합니다. 다나의 원목 가구는 정제된 선과 비례감으로, 공간
            구성의 유연성을 확보하면서도 미적 일관성을 유지합니다.</p>
        </div>
        <div class="wrap col-2">
          <img src="images/product/content03.png" alt="" class="img-responsive center-block" />
        </div>
      </li>
      <li class="flex flex-wrap items-center mt35">
        <div class="wrap col-2">
          <span class="mont f20 fw6 main-c">03</span>
          <h5 class="mt10 f30 fw8">조도 및 정숙 설계</h5>
          <p class="mt30">눈부심을 방지하는 간접조명, 흡음 마감재, 조도조절 스위치 등 이용자의 피로도를 낮춰주는 환경 제어 설계를 적용합니다. 빛을 부드럽게 반사하는 목재 표면은, 시각적
            편안함과 조명 설계의 완성도를 높여줍니다.</p>
        </div>
        <div class="wrap col-2">
          <img src="images/product/content04.png" alt="" class="img-responsive center-block" />
        </div>
      </li>
    </ul>
</section>

<!-- Implementation Case Section -->
<section class="implementation mt150">
  <h3 class="mont f18 fw6 main-c upper text-center">Implementation Case</h3>
  <h4 class="mt20 f56 fw8 line3 text-center">구축 사례</h4>
  <div class="swiper mt60">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/product/case01.png" alt="" class="img-responsive center-block" />
        <h5 class="mt20 f18 fw7">구립구산동도서관마을</h5>
      </div>
      <div class="swiper-slide">
        <img src="images/product/case01.png" alt="" class="img-responsive center-block" />
        <h5 class="mt20 f18 fw7">단성중학교</h5>
      </div>
      <div class="swiper-slide">
        <img src="images/product/case01.png" alt="" class="img-responsive center-block" />
        <h5 class="mt20 f18 fw7">여울초등학교</h5>
      </div>
      <div class="swiper-slide">
        <img src="images/product/case01.png" alt="" class="img-responsive center-block" />
        <h5 class="mt20 f18 fw7">여울초등학교</h5>
      </div>
      <div class="swiper-slide">
        <img src="images/product/case01.png" alt="" class="img-responsive center-block" />
        <h5 class="mt20 f18 fw7">여울초등학교</h5>
      </div>
    </div>
    <div class="pagination mt60 f0 text-center"></div>
  </div>
</section>

<!-- Products Section -->
<section class="product-list mt150">
  <div class="container">
    <h3 class="mont f18 fw6 main-c upper text-center">Products</h3>
    <h4 class="mt20 f56 fw8 line3 text-center">제품</h4>
    <ul class="flex flex-wrap mt60">
      <li class="p30">
        <img src="images/product/prd01_01.png" alt="" class="img-responsive center-block" />
        <h5 class="mt20 mb10 f15 fw7">서가/복식/6단1연</h5>
        <dl class="f0">
          <dt>모델명</dt>
          <dd class="fw3">BC-726</dd>
        </dl>
        <dl class="f0">
          <dt>제품사이즈</dt>
          <dd class="fw3">W800 x D500 x H2380</dd>
        </dl>
      </li>
    </ul>
  </div>
</section>

<?php
include_once("footer.php");
?>
<script>
const swiper01 = new Swiper('.product-slide .swiper', {
  loop: true,
  slidesPerView: 1.27,
  spaceBetween: 40,
  centeredSlides: true, 
  initialSlide: 0,
  observer: true,
  observeParents: true,
  
  pagination: {
    el: '.product-slide .pagination',
    clickable: true
  },

  navigation: {
    nextEl: '.product-slide .button-next',
    prevEl: '.product-slide .button-prev',
  },  
});
const swiper02 = new Swiper('.implementation .swiper', {
  loop: true,
  slidesPerView: 3.5,
  spaceBetween: 40,
  centeredSlides: true, 
  initialSlide: 0,
  observer: true,
  observeParents: true,
  pagination: {
    el: '.implementation .pagination',
    clickable: true
  },
});
</script>
</body>

</html>