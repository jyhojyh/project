<?php
$cate_name = "company";
$this_page = "patents";
include_once("header.php");
include_once("banner.php");
?>
<section class="company02-content01">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <img src="./images/company/content02.jpg" alt="" class="mt50 img-responsive center-block" data-aos="fade-up" />
      <ul class="flex flex-wrap mt30 text-center" data-aos="fade-up">
        <li class="p15 f18">USA</li>
        <li class="p15 f16">7cases</li>
        <li class="p15 f18">CHINA</li>
        <li class="p15 f16">6cases</li>
        <li class="p15 f18">EU</li>
        <li class="p15 f16">1cases</li>
        <li class="p15 f18">KOREA</li>
        <li class="p15 f16">18cases</li>
        <li class="p15 f18">JAPAN</li>
        <li class="p15 f16">2cases</li>
        <li class="p15 f18"></li>
        <li class="p15 f16"></li>
      </ul>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>
</body>
</html>