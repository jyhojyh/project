<?php
$cate_name = "company";
$this_page = "overview";
include_once("header.php");
include_once("banner.php");
?>
<section class="company01-content01">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <img src="./images/company/content01.jpg" alt="" class="mt50 img-responsive center-block" data-aos="fade-up" />
      <ul class="flex flex-wrap mt40" data-aos="fade-up">
        <li class="pt40 pb40 pl50 pr50">
          <h3 class="f22 fw6 upper">SLIM OUTSIDE</h3>
          <p class="mt10 f18">
            Impossibly thin design. Infinitely adaptable. Seamlessly fits any space without compromise.
          </p>
        </li>
        <li class="pt40 pb40 pl50 pr50">
          <h3 class="f22 fw6 upper">POWERFUL INSIDE</h3>
          <p class="mt10 f18">Exceptional sound defies its slim profile. Experience rich, clear audio that surprises from such a sleek design.</p>
        </li>
        <li class="pt40 pb40 pl50 pr50">
          <h3 class="f22 fw6 upper">SIMPLY ELEGANT</h3>
          <p class="mt10 f18">Minimalist design. Maximum presence. Clean, sophisticated aesthetics that enhance any environment.</p>
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