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
        <h3 class="rift f40 fw5 line1">OCRA-S1109008BA</h3>
        <h4 class="pl25 f18 line1">23.65(W)x700.0(H)x19.9(D)mm ULTRA 슬림 사운드바</h4>
      </div>
      <div class="img-wrap mt20">
        <img alt="" class="img-responsive center-block" src="../images/product/content32.jpg" />
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
              <th>드라이버 수</th>
              <th>정격 출력</th>
              <th>최대 출력</th>              
            </tr>
            <tr>
              <td>500 - 20 ㎑</td>
              <td>4 pcs (1 Channel)</td>
              <td>40 W</td>
              <td>80 W</td>              
            </tr>
            <tr>
              <th>감도</th>
              <th>최대 음압</th>
              <th>시스템 형식</th>
              <th>색상</th>              
            </tr>
            <tr>
              <td>80 ㏈/W/m</td>
              <td>94 ㏈</td>
              <td>OC-D1109008A<br />4 pcs + Passive Radiator 2 pcs</td>
              <td>Black, White, Gray, Custom color</td>              
            </tr>
            <tr>
              <th>방사각</th>
              <th>방사각</th>
              <th>임피던스</th>
              <th></th>
            </tr>
            <tr>
              <td>horizontal 160˚</td>
              <td>vertical 40˚</td>
              <td>8 Ω</td>
              <td></td>
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