<section class="banner pt150 pb70 bg-common" style="background-image:url(images/banner/<?php echo $cate_name ;?>.jpg)">
  <div class="container">
    <h3 class="f60 fw5 upper line2 mont white"><?php echo $cate_name; ?></h3>
    <h4 class="mt20 f26 white line0"><?php echo $cate_name_kr; ?></h4>
    <ul class="flex items-center mt40">
      <li class="relative mr30 pr30">
        <svg class="block" xmlns="http://www.w3.org/2000/svg" width="13.677" height="13.674" viewBox="0 0 13.677 13.674">
          <path data-name="패스 7838"
            d="M15.866 17.978H6.4a1.17 1.17 0 0 1-1.169-1.169V9.727l-.454.386a.292.292 0 1 1-.377-.446l5.978-5.085a1.169 1.169 0 0 1 1.515 0l5.978 5.085a.292.292 0 0 1-.379.446l-.454-.386v7.082a1.17 1.17 0 0 1-1.169 1.169zm-2.572-.585h2.572a.585.585 0 0 0 .585-.585V9.23l-4.94-4.2a.584.584 0 0 0-.757 0l-4.94 4.2v7.579a.585.585 0 0 0 .585.585h2.572v-3.942a1.169 1.169 0 0 1 1.169-1.169h1.987a1.169 1.169 0 0 1 1.173 1.169v3.941zm-3.741 0h3.156v-3.941a.585.585 0 0 0-.585-.585h-1.986a.585.585 0 0 0-.585.585v3.941z"
            style="fill:#fff;fill-rule:evenodd" transform="translate(-4.292 -4.304)" />
        </svg>
      </li>
      <li class="relative mr30 pr30 f14 white"><?php echo $cate_name_kr; ?></li>
      <li class="relative mr30 pr30 f14 white"><?php echo $sub_cate01; ?></li>
      <?php if($cate_name == "product") { ?>
        <li class="relative f14 white"><?php echo $sub_cate02; ?></li>
      <?php } ?>
    </ul>
  </div>
</section>