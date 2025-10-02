<?php
$cate_name = "customer";
$cate_num = "01";
$banner_text = "Customer Support";
$banner_title = "고객센터";
include_once("header.php");
include_once("banner.php");
?>

<section class="customer-content01 notice notice-write pt90 mb100 sm-pt100 sm-mb100 xs-pt100 xs-mb100">
  <div class="container">
    <h2 class="f40 fw7 text-center">문의게시판</h2>
    <div class="line mt40 center-block"></div>
    <form class="mt100">
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">제목</h5>
        <input class="pt15 pb15 pl10 pr10" type="text" id="title" name="title" placeholder="제목을 입력해 주세요.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">성명</h5>
        <input class="pt15 pb15 pl20 pr20 align-middle" type="text" id="name" name="name" placeholder="이름을 입력해 주세요.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">이메일</h5>
        <input class="email pt15 pb15 pl20 pr20 align-middle" type="email" id="email" name="email" placeholder="이메일 주소를 입력해 주세요.">
        <span class="ml10 mr10 f16">@</span>
        <input class="email pt15 pb15 pl20 pr20 align-middle" type="email">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">비밀번호</h5>
        <input class="pt15 pb15 pl20 pr20 align-middle" type="password" id="password" name="password" placeholder="비밀번호를 입력해 주세요.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">전화번호</h5>
        <input class="pt15 pb15 pl20 pr20 align-middle" type="tel" id="phone" name="phone" placeholder="연락 가능한 전화번호를 입력해 주세요.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-top">문의내용</h5>
        <textarea class="pt25 pb25 pl20 pr20" id="message" name="message" placeholder="문의하실 내용을 입력해 주세요."></textarea>
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f20 fw7 line0 align-middle">첨부파일</h5>
        <div class="file-upload inline-block relative f0">
          <input type="file" id="fileInput" class="file-input" />
          <label for="fileInput" class="file-label inline-block pt15 pb15 text-center pointer">파일 선택하기</label>
          <strong class="file-name inline-block ml10 pt15 pb15 pl20 pr60 f14">선택된 파일 없음</strong>
          <button type="button" class="file-remove absolute pt5 pb5 pl10 pr10 pointer white" style="display:none;">삭제</button>
        </div>
      </div>      
    </form>
    <div class="btn-box mt70 text-center f0">
      <a href="customer01_write.php" class="inline-block pt20 pb20 pl65 pr65 text-center line0">문의하기</a>
    </div>
  </div>
</section>

<?php
include_once("footer.php");
?>
<script>
  const input = document.querySelector(".file-input");
  const fileName = document.querySelector(".file-name");
  const removeBtn = document.querySelector(".file-remove");

  input.addEventListener("change", function () {
    if (this.files[0]) {
      fileName.textContent = this.files[0].name;
      removeBtn.style.display = "inline-block";
    } else {
      fileName.textContent = "선택된 파일 없음";
      removeBtn.style.display = "none";
    }
  });

  removeBtn.addEventListener("click", function () {
    input.value = ""; // 파일 초기화
    fileName.textContent = "선택된 파일 없음";
    this.style.display = "none";
  });
</script>
</body>

</html>