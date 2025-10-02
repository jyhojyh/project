<?php
$cate_name = "company";
$this_page = "overview";
include_once("header.php");
include_once("banner.php");
?>
<section class="company01-content01">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <img alt="" class="mt50 img-responsive center-block" data-aos="fade-up" src="../images/company/content01.jpg" />
      <ul class="flex flex-wrap mt40" data-aos="fade-up">
        <li class="pt40 pb40 pl50 pr50">
          <h3 class="f22 fw6 upper">슬림한 외관</h3>
          <p class="mt10 f18">
            상상할 수 없을 만큼 얇은 디자인. 무한한 적응력. 어떤 공간에도 완벽하게 어우러집니다.
          </p>
        </li>
        <li class="pt40 pb40 pl50 pr50">
          <h3 class="f22 fw6 upper">강력한 내부 성능</h3>
          <p class="mt10 f18">슬림한 외형을 뛰어넘는 탁월한 사운드. 날렵한 디자인에서 풍부하고 선명한 오디오를 경험하세요.</p>
        </li>
        <li class="pt40 pb40 pl50 pr50">
          <h3 class="f22 fw6 upper">단순하지만 우아한</h3>
          <p class="mt10 f18">미니멀한 디자인. 강한 존재감. 어떤 환경에도 품격을 더하는 세련된 미학.</p>
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