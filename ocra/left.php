<div class="left-sub-menu hidden-lg">
  <ul>
    <?php if($cate_name == "company") { ?>
    <li><a href="company01.php" class="rift f20 upper <?php if($this_page == "overview") echo 'on'; ?>">Overview</a></li>
    <li><a href="company02.php" class="rift f20 upper <?php if($this_page == "patents") echo 'on'; ?>">patents</a></li>
    <li><a href="company03.php" class="rift f20 upper <?php if($this_page == "location") echo 'on'; ?>">location</a></li>
    <?php }if($cate_name == "products") { ?>
    <li><a href="feature.php" class="rift f20 upper <?php if($this_page == "product feature") echo 'on'; ?>">Product Feature</a></li>
    <li><a href="technology.php" class="rift f20 upper <?php if($this_page == "technology") echo 'on'; ?>">Technology</a></li>
    <li><a href="application.php" class="rift f20 upper <?php if($this_page == "application") echo 'on'; ?>">Application</a></li>
    <li><a href="product_list01.php" class="rift f20 upper <?php if($this_page == "slim soundbar") echo 'on'; ?>">Slim Soundbar</a></li>
    <li><a href="product_list02.php" class="rift f20 upper <?php if($this_page == "slim subwoofer") echo 'on'; ?>">Slim Subwoofer</a></li>
    <li><a href="product_list03.php" class="rift f20 upper <?php if($this_page == "driver") echo 'on'; ?>">Driver</a></li>
    <?php }if($cate_name == "customer") { ?>
    <li><a href="notice_list.php" class="rift f20 upper <?php if($this_page == "notice") echo 'on'; ?>">Notice</a></li>
    <li><a href="qna_list.php" class="rift f20 upper <?php if($this_page == "q&amp;a") echo 'on'; ?>">Q&amp;A</a></li>
    <li><a href="download.php" class="rift f20 upper <?php if($this_page == "download") echo 'on'; ?>">Download</a></li>
    <?php }?>
  </ul>
</div>