<?php
$cate_name = "company";
$this_page = "patents";
include_once("header.php");
include_once("banner.php");
?>
<section class="company02-content01">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <img alt="" class="mt50 img-responsive center-block" data-aos="fade-up" src="../images/company/content02.jpg" />
      <ul class="flex flex-wrap mt30 text-center" data-aos="fade-up">
        <li class="p15 f18">미국</li>
        <li class="p15 f16">7건</li>
        <li class="p15 f18">중국</li>
        <li class="p15 f16">6건</li>
        <li class="p15 f18">유럽연합</li>
        <li class="p15 f16">1건</li>
        <li class="p15 f18">한국</li>
        <li class="p15 f16">18건</li>
        <li class="p15 f18">일본</li>
        <li class="p15 f16">2건</li>
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