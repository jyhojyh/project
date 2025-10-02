<?php
$cate_name = "product";
$cate_name_kr = "제품정보";
include_once("header.php");
include_once("banner.php");
?>

<section class="product-content01 pt150">
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
  <div class="swiper mt150">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images/product/slide01.jpg" alt="" class="img-responsive" />
          <div class="text-wrap absolute col-1 translate-y text-center">
            <h4 class="f20 fw6 main-c">01</h4>
            <h3 class="mt10 f42 white line2">몰입과 집중이 공존하는<br /> 열람의 중심</h3>
            <p class="mt30 f20 white">정제된 동선, 눈의 피로를 덜어주는 조도, 다양한 좌석이 조화를 이루는 공간입니다.</p>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="./images/product/slide01.jpg" alt="" class="img-responsive" />
          <div class="text-wrap absolute col-1 translate-y text-center">
            <h4 class="f20 fw6 main-c">01</h4>
            <h3 class="mt10 f42 white line2">몰입과 집중이 공존하는<br /> 열람의 중심</h3>
            <p class="mt30 f20 white">정제된 동선, 눈의 피로를 덜어주는 조도, 다양한 좌석이 조화를 이루는 공간입니다.</p>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="./images/product/slide01.jpg" alt="" class="img-responsive" />
          <div class="text-wrap absolute col-1 translate-y text-center">
            <h4 class="f20 fw6 main-c">01</h4>
            <h3 class="mt10 f42 white line2">몰입과 집중이 공존하는<br /> 열람의 중심</h3>
            <p class="mt30 f20 white">정제된 동선, 눈의 피로를 덜어주는 조도, 다양한 좌석이 조화를 이루는 공간입니다.</p>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
</section>

<?php
include_once("footer.php");
?>
<script>
const swiper = new Swiper('.swiper', {
  // Optional parameters    
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>
</body>

</html>