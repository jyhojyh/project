<?php
$cate_name = "customer";
$this_page = "download";
include_once("header.php");
include_once("banner.php");
?>
<section class="notice-list">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <table class="mt50">
        <thead>
          <tr>
            <th class="fz18 fw6 text-center hidden-xs">번호</th>
            <th class="fz18 fw6 text-center">제목</th>
            <th class="fz18 fw6 text-center">다운로드</th>
            <th class="fz18 fw6 text-center hidden-xs">날짜</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>오디컴 스피커 브로셔</td>
            <td class="text-center">
              <a class="block f0" href="#">
                <svg class="inline-block align-middle" height="17.554" viewbox="0 0 19.89 17.554" width="19.89"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.958 10.58a.466.466 0 1 1 .932 0v3.553a3.427 3.427 0 0 1-3.421 3.421H3.421A3.427 3.427 0 0 1 0 14.133V10.58a.466.466 0 0 1 .932 0v3.553a2.5 2.5 0 0 0 2.489 2.489H16.47a2.5 2.5 0 0 0 2.489-2.489zm-9.479 1.022V.466a.466.466 0 0 1 .932 0v11.136l4.72-4.72a.466.466 0 1 1 .66.659l-5.516 5.516a.466.466 0 0 1-.66 0L4.1 7.541a.466.466 0 0 1 .66-.659z"
                    data-name="패스 8118"></path>
                </svg>
                <span class="inline-block ml10 f16 align-middle">다운로드</span>
              </a>
            </td>
            <td class="text-center hidden-xs">2025.05.21</td>
          </tr>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>오디컴 스피커 브로셔</td>
            <td class="text-center">
              <a class="block f0" href="#">
                <svg class="inline-block align-middle" height="17.554" viewbox="0 0 19.89 17.554" width="19.89"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.958 10.58a.466.466 0 1 1 .932 0v3.553a3.427 3.427 0 0 1-3.421 3.421H3.421A3.427 3.427 0 0 1 0 14.133V10.58a.466.466 0 0 1 .932 0v3.553a2.5 2.5 0 0 0 2.489 2.489H16.47a2.5 2.5 0 0 0 2.489-2.489zm-9.479 1.022V.466a.466.466 0 0 1 .932 0v11.136l4.72-4.72a.466.466 0 1 1 .66.659l-5.516 5.516a.466.466 0 0 1-.66 0L4.1 7.541a.466.466 0 0 1 .66-.659z"
                    data-name="패스 8118"></path>
                </svg>
                <span class="inline-block ml10 f16 align-middle">다운로드</span>
              </a>
            </td>
            <td class="text-center hidden-xs">2025.05.21</td>
          </tr>
        </tbody>
      </table>
      <div class="util-box mt60 text-center f0">
        <select class="inline-block mr5 fw4 p15 f16 line1 align-middle" id="" name="">
          <option value="">검색</option>
        </select>
        <input class="inline-block fw5 p15 f16 line1 align-middle" placeholder="Write Search Key Word" type="text" />
      </div>
      <ul class="paging mt45 f0 text-center">
        <li class="inline-block align-middle mr20">
          <a href="#">
            <svg height="11.52" viewbox="0 0 10.214 11.52" width="10.214" xmlns="http://www.w3.org/2000/svg">
              <path d="m-13723.129 1982.82-8.979 5.33 8.979 5.33" data-name="패스 48044" style="fill:none;stroke:#000"
                transform="translate(13733.088 -1982.39)"></path>
            </svg>
          </a>
        </li>
        <li class="inline-block align-middle">
          <a class="mr20 fw6" href="#">1</a>
        </li>
        <li class="inline-block align-middle">
          <a href="#">
            <svg height="11.52" viewbox="0 0 10.214 11.52" width="10.214" xmlns="http://www.w3.org/2000/svg">
              <path d="m-13732.108 1982.82 8.979 5.33-8.979 5.33" data-name="패스 48045" style="fill:none;stroke:#000"
                transform="translate(13732.363 -1982.39)"></path>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>