<?php
$cate_name = "products";
$this_page = "slim soundbar";
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
          <a class="block p20" href="product01_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list01.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S2212004BA</h3>
            <div class="btn-box relative mt15">
              <p>
                36.8(W)x1206.0(H)x23.0(D)mm<br />슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product02_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list02.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S2212006BB</h3>
            <div class="btn-box relative mt15">
              <p>
                36.8(W)x998.0(H)x23.0(D)mm<br />슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product03_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list02.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S2212006BA</h3>
            <div class="btn-box relative mt15">
              <p>
                36.8(W)x698.0(H)x23.0(D)mm<br />슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product04_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list02.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S2212008BA</h3>
            <div class="btn-box relative mt15">
              <p>
                36.8(W)x498.0(H)x23.0(D)mm<br />슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product05_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list03.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S2212008BB</h3>
            <div class="btn-box relative mt15">
              <p>
                36.8(W)x280.0(H)x23.0(D)mm<br />슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product06_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list04.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S1109008BA</h3>
            <div class="btn-box relative mt15">
              <p>
                23.65(W)x700.0(H)x19.9(D)mm<br />ULTRA 슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product07_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list05.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S1109004BC</h3>
            <div class="btn-box relative mt15">
              <p>
                23.0(W)x294.0(H)x21.0(D)mm<br />ULTRA 슬림 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product08_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list06.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-S1913304BA</h3>
            <div class="btn-box relative mt15">
              <p>
                34.0(W)x1000.0(H)x34.0(D)mm<br />하이엔드 사운드바
              </p>
              <span class="absolute f20 fw5 underline translate-y">보기</span>
            </div>
          </a>
        </li>
        <li>
          <a class="block p20" href="product09_view.php">
            <div class="img-wrap flex items-center">
              <img alt="" class="img-responsive center-block" src="../images/product/list07.png" />
            </div>
            <h3 class="mt20 rift f30 fw5 line1">OCRA-W9818803BA</h3>
            <div class="btn-box relative mt15">
              <p>
                76.5(W)x1206.0(H)x60.0(D)mm<br />ALL-IN-ONE 슬림 사운드바
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