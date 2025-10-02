<section class="banner pt100">
  <div class="container">
    <!-- <h4 class="main-c rift f20" data-aos="fade" data-aos-duration="2000"><?php echo $banner_text ?></h4> -->
    <h3 class="pb70 f60 fw7 rift line2 white" data-aos="fade" data-aos-duration="2000"><?php echo $banner_title ?></h3>
    <ul class="f0 text-right" data-aos="fade" data-aos-duration="2000">
      <?php if($cate_name == "company") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="company01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">Overview</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="company02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">History</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="company03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">Philosophy/Vision</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="company04.php" class="f20 white <?php if($cate_num == 04) echo "on"; ?>">Location</a></li>
      <?php } ?>
      <?php if($cate_name == "product") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="product01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">Heating Cable</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="product04.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">Self-Regulating Heating Cable</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="product06.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">Metal Heater</a></li>
      <?php } ?>
      <?php if($cate_name == "system") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="system01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">Snow Melting</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="system02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">Anti-Freezing</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="system03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">Ice Protection</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="system04.php" class="f20 white <?php if($cate_num == 04) echo "on"; ?>">Electrical Heat Tracing</a></li>
      <?php } ?>
      <?php if($cate_name == "certi") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="certi01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">Corporate</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="certi02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">Product</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="certi03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">System</a></li>
      <?php } ?>
      <?php if($cate_name == "customer") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="customer01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">Q&amp;A</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="customer02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">FAQ</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="customer03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">Data Center</a></li>      
      <li class="inline-block relative pl20 pr20 pb20"><a href="customer05.php" class="f20 white <?php if($cate_num == 04) echo "on"; ?>">Notice</a></li>
      <?php } ?>
      <?php if($cate_name == "gallery") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">Snow Melting</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">Anti-Freezing</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">Ice Protection</a></li>  
      <li class="inline-block relative pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">Electrical Heat Tracing</a></li>
      <?php } ?>
    </ul>
  </div>
  <div class="bg-wrap">
    <img src="../images/banner/<?php echo $cate_name; ?>.jpg" alt="" class="img-responsive center-block" />
  </div>  
</section>