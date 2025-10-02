<?php
$cate_name = "customer";
$this_page = "download";
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
            <th class="fz18 fw6 text-center">Download</th>
            <th class="fz18 fw6 text-center hidden-xs">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>Audycomm Speaker Brochure.</td>
            <td class="text-center">
              <a href="#" class="block f0">
                <svg class="inline-block align-middle" xmlns="http://www.w3.org/2000/svg" width="19.89" height="17.554" viewBox="0 0 19.89 17.554">
                  <path data-name="패스 8118"
                    d="M18.958 10.58a.466.466 0 1 1 .932 0v3.553a3.427 3.427 0 0 1-3.421 3.421H3.421A3.427 3.427 0 0 1 0 14.133V10.58a.466.466 0 0 1 .932 0v3.553a2.5 2.5 0 0 0 2.489 2.489H16.47a2.5 2.5 0 0 0 2.489-2.489zm-9.479 1.022V.466a.466.466 0 0 1 .932 0v11.136l4.72-4.72a.466.466 0 1 1 .66.659l-5.516 5.516a.466.466 0 0 1-.66 0L4.1 7.541a.466.466 0 0 1 .66-.659z" />
                </svg>
                <span class="inline-block ml10 f16 align-middle">Download</span>
              </a>
            </td>
            <td class="text-center hidden-xs">2025.05.21</td>
          </tr>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>Audycomm Speaker Brochure.</td>
            <td class="text-center">
              <a href="#" class="block f0">
                <svg class="inline-block align-middle" xmlns="http://www.w3.org/2000/svg" width="19.89" height="17.554" viewBox="0 0 19.89 17.554">
                  <path data-name="패스 8118"
                    d="M18.958 10.58a.466.466 0 1 1 .932 0v3.553a3.427 3.427 0 0 1-3.421 3.421H3.421A3.427 3.427 0 0 1 0 14.133V10.58a.466.466 0 0 1 .932 0v3.553a2.5 2.5 0 0 0 2.489 2.489H16.47a2.5 2.5 0 0 0 2.489-2.489zm-9.479 1.022V.466a.466.466 0 0 1 .932 0v11.136l4.72-4.72a.466.466 0 1 1 .66.659l-5.516 5.516a.466.466 0 0 1-.66 0L4.1 7.541a.466.466 0 0 1 .66-.659z" />
                </svg>
                <span class="inline-block ml10 f16 align-middle">Download</span>
              </a>
            </td>
            <td class="text-center hidden-xs">2025.05.21</td>
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