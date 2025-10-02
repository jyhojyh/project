<?php
$cate_name = "customer";
$this_page = "notice";
include_once("header.php");
include_once("banner.php");
?>
<section class="notice-list">
  <div class="container">
    <?php
    include_once("left.php");
    ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <table class="mt50">
        <thead>
          <tr>
            <th class="fz18 fw6 text-center hidden-xs">No.</th>
            <th class="fz18 fw6 text-center">Title</th>
            <th class="fz18 fw6 text-center">Witer</th>
            <th class="fz18 fw6 text-center">Date</th>
            <th class="fz18 fw6 text-center hidden-xs">View</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>
              <a href="notice_view.php">We have newly opened our homepage.</a>
            </td>
            <td class="text-center">admin</td>
            <td class="text-center">2025.05.21</td>
            <td class="text-center hidden-xs">222</td>
          </tr>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>
              <a href="notice_view.php">We have newly opened our homepage.</a>
            </td>
            <td class="text-center">admin</td>
            <td class="text-center">2025.05.21</td>
            <td class="text-center hidden-xs">222</td>
          </tr>
        </tbody>
      </table>
      <div class="util-box mt60 text-center f0">
        <select name="" id="" class="inline-block mr5 fw4 p15 f16 line1 align-middle">
          <option value="">Search</option>
        </select>
        <input type="text" placeholder="Write Search Key Word" class="inline-block fw5 p15 f16 line1 align-middle" />
      </div>
      <ul class="paging mt45 f0 text-center">
        <li class="inline-block align-middle mr20">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="10.214" height="11.52" viewBox="0 0 10.214 11.52">
              <path data-name="패스 48044" d="m-13723.129 1982.82-8.979 5.33 8.979 5.33"
                transform="translate(13733.088 -1982.39)" style="fill:none;stroke:#000" />
            </svg>
          </a>
        </li>
        <li class="inline-block align-middle">
          <a href="#" class="mr20 fw6">1</a>
        </li>
        <li class="inline-block align-middle">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="10.214" height="11.52" viewBox="0 0 10.214 11.52">
              <path data-name="패스 48045" d="m-13732.108 1982.82 8.979 5.33-8.979 5.33"
                transform="translate(13732.363 -1982.39)" style="fill:none;stroke:#000" />
            </svg>
          </a>
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