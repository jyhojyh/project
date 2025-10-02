<?php
$cate_name = "products";
$this_page = "slim soundbar";
include_once("header.php");
include_once("banner.php");
?>
<section class="product-view">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <div class="prd-title mt50 pt30 flex flex-wrap items-end">
        <h3 class="rift f40 fw5 line1">OCRA-W9818803BA</h3>
        <h4 class="pl25 f18 line1">76.5(W)x1206.0(H)x60.0(D)mm 올인원 슬림 사운드바</h4>
      </div>
      <div class="img-wrap mt20">
        <img alt="" class="img-responsive center-block" src="../images/product/content35.jpg" />
      </div>
      <div class="table-wrap mt30">
        <table>
          <colgroup>
            <col style="width:25%" />
            <col style="width:25%" />
            <col style="width:25%" />
            <col style="width:25%" />
          </colgroup>
          <tbody>
            <tr>
              <th>주파수 범위</th>
              <th>연결 방식</th>
              <th>채널 수</th>
              <th>앰프 출력</th>              
            </tr>
            <tr>
              <td>100 - 20㎑</td>
              <td>Bluetooth 5.0 / AUX / USB</td>
              <td>2 채널 수</td>
              <td>60 W<br />(Soundbar – 30 W x 2)</td>              
            </tr>
            <tr>
              <th>앰프 클래스</th>
              <th>임피던스</th>
              <th>전원</th>
              <th>색상</th>              
            </tr>
            <tr>
              <td>Class D</td>
              <td>4 – 8Ω</td>
              <td>DC 12V / 10A Adaptor</td>
              <td>Black, White, Gray, Custom color</td>              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>
</body>
</html>