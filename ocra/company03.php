<?php
$cate_name = "company";
$this_page = "location";
include_once("header.php");
include_once("banner.php");
?>
<section class="company03-content01">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <div class="iframe-wrap mt40">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4476.028994404517!2d127.02903359379853!3d37.50719985607683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca3fb0fb72bdb%3A0x49c4a059539e545d!2zKOyjvCntlZjsnbTsvZTtmYDrlKnsiqQ!5e0!3m2!1sko!2skr!4v1747809584262!5m2!1sko!2skr"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <ul class="mt30 f0">
        <li class="inline-block align-middle relative mr20 pr20 sm-mb30">
          <h3 class="relative pl30 f24 fw7 line1">Head Office</h3>          
        </li>
        <li class="inline-block align-middle">
          <p class="f18 fw5 line1">3F Hico-Building 6, Bongeunsa-ro 21-gil, Gangnam-gu, Seoul, Korea, 06122</p>
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