<?php
$cate_name = "customer";
$cate_num = "01";
$banner_text = "Customer Support";
$banner_title = "Customer Support";
include_once("header.php");
include_once("banner.php");
?>

<section class="customer-content01 notice notice-write pt90 mb100 sm-pt100 sm-mb100 xs-pt100 xs-mb100">
  <div class="container">
    <h2 class="f40 fw7 text-center">Q&amp;A</h2>
    <div class="line mt40 center-block"></div>
    <form class="mt100">
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">Title</h5>
        <input class="pt15 pb15 pl10 pr10" type="text" id="title" name="title" placeholder="Please enter a title.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">Name</h5>
        <input class="pt15 pb15 pl20 pr20 align-middle" type="text" id="name" name="name" placeholder="Please enter a name.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">E-mail</h5>
        <input class="email pt15 pb15 pl20 pr20 align-middle" type="email" id="email" name="email" placeholder="Please enter a E-mail address.">
        <span class="ml10 mr10 f16">@</span>
        <input class="email pt15 pb15 pl20 pr20 align-middle" type="email">
      </div>
      <!-- <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">Password</h5>
        <input class="pt15 pb15 pl20 pr20 align-middle" type="password" id="password" name="password" placeholder="비밀번호를 입력해 주세요.">
      </div> -->
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-middle">Tel</h5>
        <input class="pt15 pb15 pl20 pr20 align-middle" type="tel" id="phone" name="phone" placeholder="Please enter a phone number.">
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f24 fw7 line0 align-top">Content</h5>
        <textarea class="pt25 pb25 pl20 pr20" id="message" name="message" placeholder="Please enter your inquiry."></textarea>
      </div>
      <div class="pt20 pb20 f0">
        <h5 class="inline-block f20 fw7 line0 align-middle">Attachment</h5>
        <div class="file-upload inline-block relative f0">
          <input type="file" id="fileInput" class="file-input" />
          <label for="fileInput" class="file-label inline-block pt15 pb15 text-center pointer">File</label>
          <strong class="file-name inline-block ml10 pt15 pb15 pl20 pr60 f14">No file selected.</strong>
          <button type="button" class="file-remove absolute pt5 pb5 pl10 pr10 pointer white" style="display:none;">Delete</button>
        </div>
      </div>      
    </form>
    <div class="btn-box mt70 text-center f0">
      <a href="customer01_write.php" class="inline-block pt20 pb20 pl65 pr65 text-center line0">Submit</a>
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