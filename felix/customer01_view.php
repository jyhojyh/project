<?php
$cate_name = "customer";
$cate_num = "01";
$banner_text = "Customer Support";
$banner_title = "고객센터";
include_once("header.php");
include_once("banner.php");
?>

<section class="customer-content01 notice notice-view pt90 mb100 sm-pt100 sm-mb100 xs-pt100 xs-mb100">
  <div class="container">
    <h2 class="f40 fw7 text-center">문의게시판</h2>
    <div class="line mt40 center-block"></div>
    <div class="notice-view-top mt60">
      <ul>
        <li class="f0">
          <h3 class="inline-block pt20 pb20 pl20 f18 fw7 sm-pt10 sm-pb10 xs-pt10 xs-pb10">제목</h3>
          <h4 class="inline-block pt20 pb20 pl20 pr20 sm-pt10 sm-pb10 xs-pt10 xs-pb10">문의게시판의 질문입니다.</h4>
        </li>
        <li class="f0">
          <h3 class="inline-block pt20 pb20 pl20 f18 fw7 sm-pt10 sm-pb10 xs-pt10 xs-pb10">등록일</h3>
          <h5 class="inline-block pt20 pb20 pl20 pr20 sm-pt10 sm-pb10 xs-pt10 xs-pb10">2024-12-06</h5>
          <h3 class="inline-block pt20 pb20 pl20 f18 fw7 sm-pt10 sm-pb10 xs-pt10 xs-pb10">조회수</h3>
          <h5 class="inline-block pt20 pb20 pl20 pr20 sm-pt10 sm-pb10 xs-pt10 xs-pb10">60</h5>
        </li>
        <li class="f0">
          <h3 class="inline-block pt20 pb20 pl20 f18 fw7 sm-pt10 sm-pb10 xs-pt10 xs-pb10">파일</h3>
          <h4 class="inline-block pt20 pb20 pl20 pr20 sm-pt10 sm-pb10 xs-pt10 xs-pb10">
            <a href="#" class="inline-block">문의내용 파일.xlsx</a>
          </h4>
        </li>
      </ul>
    </div>
    <div class="notice-view-content pt60 pb60">
      아래 내용은 예시글입니다.
      안녕하세요 정온전선 관련하여 문의드립니다.
      안녕하세요. 서울교통공사 기계사업소 엄태준 입니다.
      저희 서울교통공사에서는 각종(S/P, 소화전, 급수) 배관 등을 지상층과 지하(1~3층) 에 운용 중에 있습니다.
      만약 운용중인 지상층과 지하층에 있는 배관에 정온전선을 설치한다면 규격으로 정해진 셋팅 온도가 있는지 궁금하여 문의드립니다.
      감사합니다.
    </div>
    <div class="notice-view-bottom">
      <ul>
        <li class="pt25 pb25 f0">
          <svg class="inline-block mr50 align-middle" xmlns="http://www.w3.org/2000/svg" width="10.693" height="6.053"
            viewBox="0 0 10.693 6.053">
            <path data-name="패스 48110" d="m-15846.545 19651.15 4.993-4.992 4.993 4.992"
              transform="translate(15846.898 -19645.451)" style="fill:none;stroke:#000" />
          </svg>
          <strong class="inline-block mr50 align-middle">PREV</strong>
          <a href="#" class="inline-block align-middle">이전 글이 없습니다.</a>
        </li>
        <li class="pt25 pb25 f0">
          <svg class="inline-block mr50 align-middle" xmlns="http://www.w3.org/2000/svg" width="10.693" height="6.053" viewBox="0 0 10.693 6.053">
            <path data-name="패스 48109" d="m-15846.545 19646.158 4.993 4.992 4.993-4.992"
              transform="translate(15846.898 -19645.805)" style="fill:none;stroke:#000" />
          </svg>
          <strong class="inline-block mr50 align-middle">NEXT</strong>
          <a href="#" class="inline-block align-middle">다음 글이 없습니다.</a>
        </li>
      </ul>
    </div>
    <div class="btn-box text-center f0">
      <a href="customer01.php" class="inline-block mt40 pt15 pb15 pl60 pr60 text-center line0">목록</a>
    </div>
  </div>
</section>

<?php
include_once("footer.php");
?>
</body>

</html>