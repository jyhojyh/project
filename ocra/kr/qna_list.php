<?php
$cate_name = "customer";
$this_page = "q&amp;a";
include_once("header.php");
include_once("banner.php");
?>
<section class="notice-list">
  <div class="container">
    <?php include_once("left.php"); ?>
    <div class="content">
      <h2 class="title"><?php echo $this_page; ?></h2>
      <table class="mt50">
        <thead>
          <tr>
            <th class="fz18 fw6 text-center hidden-xs">번호</th>
            <th class="fz18 fw6 text-center">제목</th>
            <th class="fz18 fw6 text-center">작성자</th>
            <th class="fz18 fw6 text-center">날짜</th>
            <th class="fz18 fw6 text-center hidden-xs">조회수</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>
              <a href="qna_view.php">저희 홈페이지가 새롭게 오픈되었습니다.</a>
            </td>
            <td class="text-center">admin</td>
            <td class="text-center">2025.05.21</td>
            <td class="text-center hidden-xs">222</td>
          </tr>
          <tr>
            <td class="text-center hidden-xs">5</td>
            <td>
              <a href="qna_view.php">저희 홈페이지가 새롭게 오픈되었습니다.</a>
            </td>
            <td class="text-center">admin</td>
            <td class="text-center">2025.05.21</td>
            <td class="text-center hidden-xs">222</td>
          </tr>
        </tbody>
      </table>
      <div class="util-box mt60 text-center f0">
        <select class="inline-block mr5 fw4 p15 f16 line1 align-middle" id="" name="">
          <option value="">검색</option>
        </select>
        <input class="inline-block fw5 p15 f16 line1 align-middle" placeholder="Write Search Key Word" type="text" />
      </div>
      <ul class="paging mt45 f0 text-center">
        <li class="inline-block align-middle mr20">
          <a href="#">
            <svg height="11.52" viewbox="0 0 10.214 11.52" width="10.214" xmlns="http://www.w3.org/2000/svg">
              <path d="m-13723.129 1982.82-8.979 5.33 8.979 5.33" data-name="패스 48044" style="fill:none;stroke:#000"
                transform="translate(13733.088 -1982.39)"></path>
            </svg>
          </a>
        </li>
        <li class="inline-block align-middle">
          <a class="mr20 fw6" href="#">1</a>
        </li>
        <li class="inline-block align-middle">
          <a href="#">
            <svg height="11.52" viewbox="0 0 10.214 11.52" width="10.214" xmlns="http://www.w3.org/2000/svg">
              <path d="m-13732.108 1982.82 8.979 5.33-8.979 5.33" data-name="패스 48045" style="fill:none;stroke:#000"
                transform="translate(13732.363 -1982.39)"></path>
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