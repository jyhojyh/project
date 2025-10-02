<?php
$cate_name = "products";
$this_page = "slim subwoofer";
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
        <h3 class="rift f40 fw5 line1">OCRA-W9818803BA</h3>
        <h4 class="pl25 f18 line1">130.0(W)x500.0(H)x312.0(D)mm HI END SLIM SUB WOOFER</h4>
      </div>
      <div id="canvas-wrap" class="canvas-wrap relative mt30">
        <div class="svg-wrap translate-x text-center pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="30.314" height="30.314" viewBox="0 0 30.314 30.314">
          <g data-name="그룹 3817">
            <path data-name="패스 48052"
              d="M22.841 30.949a.476.476 0 0 0 .423 0l7.579-3.789a.474.474 0 0 0 .262-.424v-9.473a.474.474 0 0 0-.262-.424l-7.579-3.789a.474.474 0 0 0-.424 0l-7.579 3.789a.475.475 0 0 0-.261.424v9.473a.474.474 0 0 0 .262.424zm-6.893-12.92 6.631 3.316v8.414l-6.631-3.316zm7.579 11.73v-8.414l6.631-3.316v8.414zM23.052 14l6.52 3.26-6.52 3.26-6.52-3.26z"
              transform="translate(-7.895 -6.842)" style="fill:#707070" />
            <path data-name="패스 48053"
              d="M25.578 41.421h-2.842a.474.474 0 1 0 0 .947h1.621A14.266 14.266 0 0 1 .947 31.474a.474.474 0 0 0-.947 0 15.211 15.211 0 0 0 25.1 11.5v1.762a.474.474 0 1 0 .947 0v-2.842a.474.474 0 0 0-.469-.473z"
              transform="translate(0 -16.316)" style="fill:#707070" />
            <path data-name="패스 48054"
              d="M19.894 0a15.114 15.114 0 0 0-9.947 3.656V1.895a.474.474 0 0 0-.947 0v2.842a.474.474 0 0 0 .474.474h2.842a.474.474 0 0 0 0-.947h-1.622A14.266 14.266 0 0 1 34.1 15.157a.474.474 0 0 0 .947 0A15.175 15.175 0 0 0 19.894 0z"
              transform="translate(-4.737)" style="fill:#707070" />
          </g>
          </svg>
        </div>
      </div>
      <div class="img-wrap mt20">
        <img src="../images/product/content28.jpg" alt="" class="img-responsive center-block" />
      </div>
      <div class="table-wrap mt30">
        <table>
          <tbody>
            <tr>
              <th>Frequency band</th>
              <th>Frequency Range</th>
              <th>Connection</th>
              <th>Channel</th>
              <th>Amplifier output</th>
              <th>Amplifier classification</th>
            </tr>
            <tr>
              <td>20 - 1 ㎑</td>
              <td>20 – 250 ㎐</td>
              <td>Bluetooth 5.0 / AUX / Optical</td>
              <td>2.1 Channel</td>
              <td>220 W<br />(Soundbar – 50 W x 2 / Subwoofer - 100 W)</td>
              <td>Class D</td>
            </tr>
            <tr>
              <th>Filter alignment</th>
              <th>Power</th>
              <th>Color</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <td>Subwoofer filtering – Low pass filter<br />Soundbar filtering – High pass filter</td>
              <td>DC 24V / 10A Adaptor</td>
              <td>Black, White, Custom color</td>
              <td></td>
              <td></td>
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
<script type="importmap">
  {
  "imports": {
    "three": 
    "https://unpkg.com/three@0.138.3/build/three.module.js",
    "GLTFLoader":
    "https://unpkg.com/three@0.141.0/examples/jsm/loaders/GLTFLoader.js"
  }
}    
</script>
<script type="module" src="./three_js/product_js/model01.js?ver=<?php echo time(); ?>"></script>

</body>

</html>