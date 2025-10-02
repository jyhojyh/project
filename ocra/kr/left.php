<div class="left-sub-menu hidden-lg">
  <ul>
    <?php if($cate_name == "company") { ?>
    <li><a href="company01.php" class="rift f20 upper <?php if($this_page == "overview") echo 'on'; ?>">회사 개요</a></li>
    <li><a href="company02.php" class="rift f20 upper <?php if($this_page == "patents") echo 'on'; ?>">특허</a></li>
    <li><a href="company03.php" class="rift f20 upper <?php if($this_page == "location") echo 'on'; ?>">오시는 길</a></li>
    <?php }if($cate_name == "products") { ?>
    <li><a href="feature.php" class="rift f20 upper <?php if($this_page == "product feature") echo 'on'; ?>">제품 특징</a></li>
    <li><a href="technology.php" class="rift f20 upper <?php if($this_page == "technology") echo 'on'; ?>">기술</a></li>
    <li><a href="application.php" class="rift f20 upper <?php if($this_page == "application") echo 'on'; ?>">적용사례</a></li>
    <li><a href="product_list01.php" class="rift f20 upper <?php if($this_page == "slim soundbar") echo 'on'; ?>">슬림 사운드바</a></li>
    <li><a href="product_list02.php" class="rift f20 upper <?php if($this_page == "slim subwoofer") echo 'on'; ?>">슬림 서브우퍼</a></li>
    <li><a href="product_list03.php" class="rift f20 upper <?php if($this_page == "driver") echo 'on'; ?>">드라이버</a></li>
    <?php }if($cate_name == "customer") { ?>
    <li><a href="notice_list.php" class="rift f20 upper <?php if($this_page == "notice") echo 'on'; ?>">공지사항</a></li>
    <li><a href="qna_list.php" class="rift f20 upper <?php if($this_page == "q&amp;a") echo 'on'; ?>">자주 묻는 질문</a></li>
    <li><a href="download.php" class="rift f20 upper <?php if($this_page == "download") echo 'on'; ?>">자료실</a></li>
    <?php }?>
  </ul>
</div>