<?php
$cate_name = "customer";
$cate_num = "04";
$banner_text = "Customer Support";
$banner_title = "고객센터";
include_once("header.php");
include_once("banner.php");
?>

<section class="customer-content01 notice pt90 mb100 sm-pt100 sm-mb100 xs-pt100 xs-mb100">
  <div class="container">
    <h2 class="f40 fw7 text-center">공지사항</h2>
    <div class="line mt40 center-block"></div>
    <table class="mt90">
      <colgroup>
        <col style="width:10%" class="hidden-xs" />
        <col style="width:50%" />
        <col style="width:15%" />
        <col style="width:15%" class="hidden-xs" />
        <col style="width:10%" class="hidden-sm" />
      </colgroup>
      <thead>
        <tr>
          <th class="hidden-xs">번호</th>
          <th>제목</th>
          <th>글쓴이</th>
          <th class="hidden-xs">작성일자</th>
          <th class="hidden-sm">조회</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center hidden-xs">292</td>
          <td>
            <a href="customer05_view.php">메탈히터와 필름히터 동파방지</a>
          </td>
          <td class="text-center">물류센터 설비</td>
          <td class="text-center hidden-xs">2025.06.17</td>
          <td class="text-center hidden-sm">11</td>
        </tr>
      </tbody>
    </table>
    <div class="paging mt60 text-center f0">
      <a href="#" class="mr25">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.553" height="11.248" viewBox="0 0 11.553 11.248">
          <g data-name="그룹 11600">
            <path data-name="패스 24491" d="m-11437.908 15089.776-5.27 5.27 5.27 5.271"
              transform="translate(11449.107 -15089.422)" style="fill:none;stroke:#9c9c9c" />
            <path data-name="패스 24492" d="m-11437.908 15089.776-5.27 5.27 5.27 5.271"
              transform="translate(11443.885 -15089.422)" style="fill:none;stroke:#9c9c9c" />
          </g>
        </svg>
      </a>
      <a href="#" class="mr25">
        <svg xmlns="http://www.w3.org/2000/svg" width="6.33" height="11.248" viewBox="0 0 6.33 11.248">
          <path data-name="패스 24490" d="m-11437.908 15089.776-5.27 5.27 5.27 5.271"
            transform="translate(11443.885 -15089.423)" style="fill:none;stroke:#9c9c9c" />
        </svg>
      </a>
      <a href="#" class="num on">1</a>
      <a href="#" class="num">2</a>
      <a href="#" class="num">3</a>
      <a href="#" class="num">4</a>
      <a href="#" class="num">5</a>
      <a href="#" class="ml25">
        <svg xmlns="http://www.w3.org/2000/svg" width="6.33" height="11.249" viewBox="0 0 6.33 11.249">
          <path data-name="패스 24495" d="m-11443.178 15089.776 5.27 5.271-5.27 5.271"
            transform="translate(11443.531 -15089.423)" style="fill:none;stroke:#000" />
        </svg>
      </a>
      <a href="#" class="ml25">
        <svg xmlns="http://www.w3.org/2000/svg" width="11.553" height="11.249" viewBox="0 0 11.553 11.249">
          <g data-name="그룹 11613">
            <path data-name="패스 24491" d="m-11443.178 15089.776 5.27 5.271-5.27 5.271"
              transform="translate(11443.532 -15089.422)" style="fill:none;stroke:#000" />
            <path data-name="패스 24492" d="m-11443.178 15089.776 5.27 5.271-5.27 5.271"
              transform="translate(11448.754 -15089.422)" style="fill:none;stroke:#000" />
          </g>
        </svg>
      </a>
    </div>
  </div>
</section>

<?php
include_once("footer.php");
?>
</body>

</html>