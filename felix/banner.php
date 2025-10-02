<section class="banner pt100">
  <div class="container">
    <h4 class="main-c rift f20" data-aos="fade" data-aos-duration="2000"><?php echo $banner_text ?></h4>
    <h3 class="pb70 f60 line2 white" data-aos="fade" data-aos-duration="2000"><?php echo $banner_title ?></h3>
    <ul class="f0 text-right" data-aos="fade" data-aos-duration="2000">
      <?php if($cate_name == "company") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="company01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">기업소개</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="company02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">연혁</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="company03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">경영이념/비전</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="company04.php" class="f20 white <?php if($cate_num == 04) echo "on"; ?>">찾아오시는 길</a></li>
      <?php } ?>
      <?php if($cate_name == "product") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="product01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">히팅케이블</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="product04.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">정온전선</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="product06.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">메탈히터</a></li>
      <?php } ?>
      <?php if($cate_name == "system") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="system01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">스노우멜팅</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="system02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">동파방지</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="system03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">아이스스탑</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="system04.php" class="f20 white <?php if($cate_num == 04) echo "on"; ?>">히트트레이싱</a></li>
      <?php } ?>
      <?php if($cate_name == "certi") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="certi01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">기업인증</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="certi02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">제품인증</a></li>
      <li class="inline-block relative pl20 pr20 pb20"><a href="certi03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">시스템인증</a></li>
      <?php } ?>
      <?php if($cate_name == "customer") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="customer01.php" class="f20 white <?php if($cate_num == 01) echo "on"; ?>">문의게시판</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="customer02.php" class="f20 white <?php if($cate_num == 02) echo "on"; ?>">자주 묻는 질문</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="customer03.php" class="f20 white <?php if($cate_num == 03) echo "on"; ?>">자료실</a></li>      
      <li class="inline-block relative pl20 pr20 pb20"><a href="customer05.php" class="f20 white <?php if($cate_num == 04) echo "on"; ?>">공지사항</a></li>
      <?php } ?>
      <?php if($cate_name == "gallery") { ?>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">스노우멜팅</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">동파방지</a></li>
      <li class="inline-block relative mr30 pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">아이스스탑</a></li>  
      <li class="inline-block relative pl20 pr20 pb20"><a href="gallery01.php" class="f20 white">히트트레이싱</a></li>
      <?php } ?>
    </ul>
  </div>
  <div class="bg-wrap">
    <img src="images/banner/<?php echo $cate_name; ?>.jpg" alt="" class="img-responsive center-block" />
  </div>  
</section>