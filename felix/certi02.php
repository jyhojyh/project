<?php
$cate_name = "certi";
$cate_num = "02";
$banner_text = "Certification";
$banner_title = "인증";
include_once("header.php");
include_once("banner.php");
?>

<section class="certi01-content01 certi02-content01 mt90 mb100 sm-mt100 sm-mb100 xs-mt100 xs-mb100">
  <div class="container">
    <div class="line-wrap" data-aos="fade-up">
      <h2 class="f40 fw7 text-center">제품인증</h2>
      <div class="line mt40 center-block"></div>
    </div>
    <div class="tab flex flex-wrap justify-center items-center mt40" data-aos="fade-up">
      <div class="on relative pb10 pr60 pl60 f20 text-center pointer">MI-Cable</div>
      <div class="relative pb10 pr60 pl60 f20 text-center pointer">메탈히터</div>
      <div class="relative pb10 pr60 pl60 f20 text-center pointer">정온전선</div>
      <div class="relative pb10 pr60 pl60 f20 text-center pointer">히팅케이블</div>
    </div>
    <div class="certi-wrap" data-aos="fade-up">      
      <ul class="on flex flex-wrap mt70">
        <li>
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content09.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">ETL인증서</h4>
          <h5 class="mt10 f18 fw5 text-center">2009.12.07</h5>
        </li>
      </ul>
      <ul class="flex flex-wrap mt70">
        <li class="mr25 sm-mr25 xs-mr0">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content10.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">ETL인증서</h4>
          <h5 class="mt10 f18 fw5 text-center">2009.12.07</h5>
        </li>
        <li class="mr25 lg-mr0 sm-mr0 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content11.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">ESTEC - 메탈히타 특허증</h4>
          <h5 class="mt10 f18 fw5 text-center">2019.12.24</h5>
        </li>
        <li class="mr25 lg-mt50 sm-mr25 xs-mr0 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content12.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">ESTEC - 메탈히터 CE인증</h4>
          <h5 class="mt10 f18 fw5 text-center">2021.08.19</h5>
        </li>
        <li class="lg-mt50 sm-mr0 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content13.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">ESTEC - 메탈히터 CE인증</h4>
          <h5 class="mt10 f18 fw5 text-center">2021.06.11</h5>
        </li>
        <li class="mt40 lg-mt50 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content14.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">ESTEC - 메탈히터 UL인증</h4>
          <h5 class="mt10 f18 fw5 text-center">2023.04.26</h5>
        </li>
      </ul>
      <ul class="flex flex-wrap mt70">
        <li class="mr25 sm-mr25 xs-mr0">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content15.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">[ES-DTS-026] EHL30-2(SRL30-2) Data Sheet</h4>
          <h5 class="mt10 f18 fw5 text-center">2023.06.26</h5>
        </li>
        <li class="mr25 lg-mr0 sm-mr0 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content16.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">CE인증</h4>
          <h5 class="mt10 f18 fw5 text-center">2015.11.17</h5>
        </li>
        <li class="mr25 lg-mt50 sm-mr25 xs-mr0 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content17.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">EHL30-2 CE인증서</h4>
          <h5 class="mt10 f18 fw5 text-center">2021.08.19</h5>
        </li>
        <li class="lg-mt50 sm-mr0 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content18.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">FM시스템인증</h4>
          <h5 class="mt10 f18 fw5 text-center">2014.11.26</h5>
        </li>
        <li class="mt40 lg-mt50 xs-mt50">
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content19.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">UL 인증서 - XHT</h4>
          <h5 class="mt10 f18 fw5 text-center">2017.08.07</h5>
        </li>
      </ul>
      <ul class="flex flex-wrap mt70">
        <li>
          <div class="img-wrap flex justify-center items-center">
            <img src="images/certi/content20.jpg" />
          </div>
          <h4 class="mt20 f20 fw6 text-center">CE Certificate _ Heating Cables</h4>
          <h5 class="mt10 f18 fw5 text-center">2021.08.19</h5>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php
include_once("footer.php");
?>
<script>
$(".tab div").on("click",function(){
  var i = $(this).index();
  $(this).addClass("on").siblings().removeClass("on");
  $(".certi-wrap > .flex").eq(i).addClass("on").siblings().removeClass("on");
});
</script>
</body>
</html>