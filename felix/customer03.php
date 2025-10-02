<?php
$cate_name = "customer";
$cate_num = "03";
$banner_text = "Customer Support";
$banner_title = "고객센터";
include_once("header.php");
include_once("banner.php");
?>

<section class="customer03-content01 pt90 mb100 sm-pt100 sm-mb100 xs-pt100 xs-mb100">
  <div class="container">
    <div class="tab flex flex-wrap justify-center items-center mt40">
      <div class="on relative pb10 pr60 pl60 f20 text-center pointer">
        <a href="customer03.php" class="fi">카탈로그</a>
      </div>
      <div class="relative pb10 pr60 pl60 f20 text-center pointer">
        <a href="customer04.php" class="fi">기술자료</a>
      </div>
    </div>
    <h3 class="mt100 f28 fw7">카탈로그</h3>
    <ul class="flex flex-wrap mt30">
      <li class="pt40 flex flex-wrap">
        <div class="left">
          <img src="images/customer/content01.jpg" alt="" class="img-responsive center-block" />
        </div>
        <div class="right flex flex-col justify-between pl30">
          <h4 class="f28 fw7">엑셀 히팅 케이블 카탈로그</h4>
          <a href="#" class="pt10 pb10 f0 text-center">
            <span class="f16 mr10 align-middle">다운로드</span>
            <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="10" height="10.888" viewBox="0 0 10 10.888">
              <g data-name="그룹 11596">
                <path data-name="패스 24488" d="m-13437.781 15362.5 3.392 3.392 3.392-3.392"
                  transform="translate(13439.5 -15358.112)" style="fill:none;stroke:#000" />
                <path data-name="패스 24489" d="M-13434.39 15365.892v-7.779" transform="translate(13439.5 -15358.112)"
                  style="fill:none;stroke:#000" />
                <path data-name="선 2144" transform="translate(0 10.388)" style="fill:none;stroke:#000" d="M0 0h10" />
              </g>
            </svg>
          </a>
        </div>
      </li>
      <li class="pt40 flex flex-wrap">
        <div class="left">
          <img src="images/customer/content01.jpg" alt="" class="img-responsive center-block" />
        </div>
        <div class="right flex flex-col justify-between pl30">
          <h4 class="f28 fw7">엑셀 히팅 케이블 카탈로그</h4>
          <a href="#" class="pt10 pb10 f0 text-center">
            <span class="f16 mr10 align-middle">다운로드</span>
            <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="10" height="10.888" viewBox="0 0 10 10.888">
              <g data-name="그룹 11596">
                <path data-name="패스 24488" d="m-13437.781 15362.5 3.392 3.392 3.392-3.392"
                  transform="translate(13439.5 -15358.112)" style="fill:none;stroke:#000" />
                <path data-name="패스 24489" d="M-13434.39 15365.892v-7.779" transform="translate(13439.5 -15358.112)"
                  style="fill:none;stroke:#000" />
                <path data-name="선 2144" transform="translate(0 10.388)" style="fill:none;stroke:#000" d="M0 0h10" />
              </g>
            </svg>
          </a>
        </div>
      </li>
    </ul>
  </div>
</section>

<?php
include_once("footer.php");
?>
<script>
$(".customer02-content01 ul li").on("click", function() {
  if ($(this).hasClass("on")) {
    $(this).removeClass("on");
  } else {
    $(this).addClass("on").siblings().removeClass("on");
  }

});
</script>
</body>

</html>