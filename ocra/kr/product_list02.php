<?php
$cate_name = "products";
$this_page = "slim subwoofer";
include_once("header.php");
include_once("banner.php");
?>
<section class="product-list">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <ul class="flex flex-wrap mt50 pt30">
        <li>
          <a class="block p20" href="product10_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list08.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-W9818803BA</h3>
            <div class="btn-box relative mt15">
              <p>
                130.0(W)x500.0(H)x312.0(D)mm <br />하이엔드 슬림 서브우퍼
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>
</body>
</html>