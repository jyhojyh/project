<?php
$cate_name = "customer";
$this_page = "q&amp;a";
include_once("header.php");
include_once("banner.php");
?>
<section class="notice-view">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <div class="view-top mt50 pt25 pb25">
        <h3 class="f20 fw6">저희 홈페이지가 새롭게 오픈되었습니다.</h3>
        <div class="mt30 f0">
          <span class="inline-block mr20 align-middle f16">작성자</span>
          <span class="inline-block mr50 align-middle f16">admin</span>
          <span class="inline-block mr20 align-middle f16">날짜</span>
          <span class="inline-block mr50 align-middle f16">2024-04-30 14:21</span>
          <span class="inline-block mr20 align-middle f16">조회수</span>
          <span class="inline-block align-middle f16">707</span>
        </div>
      </div>
      <div class="view-content pt70 pb70">
        저희 홈페이지가 새롭게 오픈되었습니다.
      </div>
      <div class="view-bottom">
        <div class="prev pt30 pb30 pl20 pr20 f0">
          <div class="inline-block align-middle f0">
            <svg height="6.973" viewbox="0 0 12.442 6.973" width="12.442" xmlns="http://www.w3.org/2000/svg">
              <path d="m10521.714 16722.7 5.161-5.16 5.16 5.16" data-name="패스 1096"
                style="fill:none;stroke:#707070;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px"
                transform="translate(-10520.653 -16716.785)"></path>
            </svg>
            <span class="ml10 f14 fw5">이전 글</span>
          </div>
          <a class="inline-block align-middle fw5" href="#">저희 홈페이지가 새롭게 오픈되었습니다.</a>
        </div>
        <div class="next pt30 pb30 pl20 pr20 f0">
          <div class="inline-block align-middle f0">
            <svg height="6.969" viewbox="0 0 12.442 6.969" width="12.442" xmlns="http://www.w3.org/2000/svg">
              <path d="m10521.714 16717.537 5.161 5.158 5.16-5.158" data-name="패스 1097"
                style="fill:none;stroke:#707070;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px"
                transform="translate(-10520.653 -16716.477)"></path>
            </svg>
            <span class="ml10 f14 fw5">다음 글</span>
          </div>
          <a class="inline-block align-middle fw5" href="#">저희 홈페이지가 새롭게 오픈되었습니다.</a>
        </div>
      </div>
      <div class="btn-box mt40 f0">
        <a class="inline-block p15 f18 fw6 text-center line1" href="qna_list.php">목록</a>
      </div>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>
</body>
</html>