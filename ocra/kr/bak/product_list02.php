<?php
$cate_name = "products";
$this_page = "slim subwoofer";
include_once("header.php");
include_once("banner.php");
?>
<section class="product-list">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <ul class="flex flex-wrap mt50 pt30">
        <li>
          <a href="product10_view.php" class="block p20">
            <div class="img-wrap flex items-center">
              <img src="../images/product/list08.png" alt="" class="img-responsive center-block" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-W9818803BA</h3>
            <div class="btn-box relative mt15">
              <p>
                130.0(W)x500.0(H)x312.0(D)mm <br />HI END SLIM SUB WOOFER
              </p>
              <span class="absolute f20 fw5 underline translate-y">View</span>
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