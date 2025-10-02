<?php
$cate_name = "products";
$this_page = "product feature";
include_once("header.php");
include_once("banner.php");
?>
<section class="product01-content01">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <p class="mt50 pt30 f20 xs-f18" data-aos="fade-up">우리는 평평하고 슬림한 스피커 드라이버로 차별화된 오디오 경험을 제공합니다.</p>
      <img alt="" class="mt30 img-responsive center-block xs-mt30" data-aos="fade-up"
        src="../images/product/content01.jpg" />
      <div class="line mt70 mb70"></div>
      <h3 class="rift f34 fw5 line1" data-aos="fade">· 비교</h3>
      <table class="mt30 xs-mt30" data-aos="fade-up">
        <colgroup>
          <col style="width:50%" />
          <col style="width:50%" />
        </colgroup>
        <thead>
          <tr>
            <th class="f20 fw5 white text-center xs-f16">기존 스피커</th>
            <th class="f20 fw5 white text-center xs-f16">VPCB 드라이버</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img alt="" class="img-responsive center-block" src="../images/product/content02.jpg" />
            </td>
            <td>
              <img alt="" class="img-responsive center-block" src="../images/product/content03.jpg" />
            </td>
          </tr>
        </tbody>
      </table>
      <div class="line mt70 mb70"></div>
      <h3 class="rift f34 fw5 line1" data-aos="fade">· VPCB 스피커의 특징</h3>
      <ul class="flex flex-wrap mt30 xs-mt30">
        <li data-aos="fade-right">
          <img alt="" class="img-responsive center-block" src="../images/product/content04.jpg" />
        </li>
        <li class="pl40 xs-mt50 xs-pl0" data-aos="fade-left">
          <dl>
            <dd class="relative mb20 pl10 f18 xs-f16">바 타입 자기 회로의 수평 구성을 확장하고 상하에 트랙형 패턴을 쌓아 자기장 집중을 강화합니다.</dd>
            <dd class="relative mb20 pl10 f18 xs-f16">별도의 내부 연결 없이 패턴 형성으로 전기 전송을 통합합니다.</dd>
            <dd class="relative pl10 f18 xs-f16">직사각형 폭을 최소화할 수 있는 구조입니다.</dd>
          </dl>
        </li>
      </ul>
      <div class="line mt70"></div>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>
</body>
</html>