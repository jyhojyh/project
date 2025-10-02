<?php
$cate_name = "products";
$this_page = "product feature";
include_once("header.php");
include_once("banner.php");
?>
<section class="product01-content01">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <p class="mt50 pt30 f20 xs-f18" data-aos="fade-up">WE DELIVER DIFFERENTIATED USERS’ AUDIO EXPERIENCE WITH FLAT AND SLIM SPEAKER DRIVER.</p>
      <img src="../images/product/content01.jpg" alt="" class="mt30 img-responsive center-block xs-mt30" data-aos="fade-up" />
      <div class="line mt70 mb70"></div>
      <h3 class="rift f34 fw5 line1" data-aos="fade">· COMPARISON</h3>
      <table class="mt30 xs-mt30" data-aos="fade-up">
        <colgroup>
          <col style="width:50%">
          <col style="width:50%">
        </colgroup>
        <thead>
          <tr>
            <th class="f20 fw5 white text-center xs-f16">Conventional Speaker</th>
            <th class="f20 fw5 white text-center xs-f16">VPCB Driver</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="../images/product/content02.jpg" alt="" class="img-responsive center-block" />
            </td>
            <td>
              <img src="../images/product/content03.jpg" alt="" class="img-responsive center-block" />
            </td>
          </tr>
        </tbody>
      </table>
      <div class="line mt70 mb70"></div>
      <h3 class="rift f34 fw5 line1" data-aos="fade">· FEATURES OF VPCB SPEAKER</h3>
      <ul class="flex flex-wrap mt30 xs-mt30">
        <li data-aos="fade-right">
          <img src="../images/product/content04.jpg" alt="" class="img-responsive center-block" />
        </li>
        <li class="pl40 xs-mt50 xs-pl0" data-aos="fade-left">
          <dl>
            <dd class="relative mb20 pl10 f18 xs-f16">Expanding the horizontal configuration of the bar-type magnetic circuit and stacking track-type patterns on the top and bottom to strengthen the magnetic field focusing.</dd>
            <dd class="relative mb20 pl10 f18 xs-f16">Integration of electricity transmission through pattern formation without separate internal connection.</dd>
            <dd class="relative pl10 f18 xs-f16">Rectangular width can be minimized structure.</dd>
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