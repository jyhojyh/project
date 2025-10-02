<?php
$cate_name = "products";
$this_page = "slim soundbar";
include_once("header.php");
include_once("banner.php");
?>
<section class="product-view">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <div class="prd-title mt50 pt30 flex flex-wrap items-end">
        <h3 class="rift f40 fw5 line1">OCRA-S1109008BA</h3>
        <h4 class="pl25 f18 line1">23.65(W)x700.0(H)x19.9(D)mm ULTRA SLIM SOUNDBAR</h4>
      </div>
      <div class="img-wrap mt20">
        <img src="../images/product/content32.jpg" alt="" class="img-responsive center-block" />
      </div>
      <div class="table-wrap mt30">
        <table>
          <tbody>
            <tr>
              <th>Frequency Range</th>
              <th>Number of Driver</th>
              <th>Power Rating</th>
              <th>Maximum Power</th>
              <th>Sensitivity</th>
              <th>Max Rated SPL</th>
            </tr>
            <tr>
              <td>500 - 20 ㎑</td>
              <td>4 pcs (1 Channel)</td>
              <td>40 W</td>
              <td>80 W</td>
              <td>80 ㏈/W/m</td>
              <td>94 ㏈</td>
            </tr>
            <tr>
              <th>System format</th>
              <th>Color</th>
              <th>Radiation angle</th>
              <th>Radiation angle</th>
              <th>Impedance</th>
              <th></th>
            </tr>
            <tr>
              <td>OC-D1109008A<br />4 pcs + Passive Radiator 2 pcs</td>
              <td>Black, White, Gray, Custom color</td>
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