<!DOCTYPE html>

<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Felix Korea</title>
  <link rel="stylesheet" href="https://use.typekit.net/bzz7evk.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/aos.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/font.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/common.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/reset.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="./css/m.style.css?ver=<?php echo time(); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:image" content="./images/og_image.png">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
</head>

<body class="<?php if($cate_name == "index") echo "index"; ?>">
  <header class="pt10 pb10">
    <div class="container">
      <div class="wrap flex justify-between items-center">
        <div class="logo">
          <a href="index.php">
            <img src="images/header/logo.png" alt="" class="img-responsive" />
          </a>
        </div>
        <ul class="menu flex hidden-lg">
          <li class="mr60"><a class="white <?php if($cate_name == "company") echo "on"; ?>" href="company01.php">펠릭스히팅시스템</a></li>
          <li class="mr60"><a class="white <?php if($cate_name == "product") echo "on"; ?>" href="product01.php">제품소개</a></li>
          <li class="mr60"><a class="white <?php if($cate_name == "system") echo "on"; ?>" href="system01.php">시스템소개</a></li>
          <li class="mr60"><a class="white <?php if($cate_name == "certi") echo "on"; ?>" href="certi01.php">인증</a></li>
          <li class="mr60"><a class="white <?php if($cate_name == "customer") echo "on"; ?>" href="customer01.php">고객지원</a></li>
          <li><a class="white <?php if($cate_name == "gallery") echo "on"; ?>" href="gallery01.php">시공사례</a></li>
        </ul>
        <div class="inquiry hidden-lg">
          <a href="contact.php" class="pt10 pb10 pl30 pr30 white">빠른견적문의</a>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-header visible-lg visible-sm visible-xs">
    <div class="ham-btn">
      <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="15" width="15" height="2" rx="1" fill="#A71E1B" />
        <rect y="9" width="30" height="2" rx="1" fill="white" />
        <rect y="18" width="30" height="2" rx="1" fill="white" />
      </svg>
    </div>
    <div class="ham-dim"></div>
    <div class="ham-menu">
      <ul>
        <li class="">
          <a href="javascript:void(0);">펠릭스히팅시스템</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="company01.php">기업소개</a></li>
              <li class=""><a href="company02.php">연혁</a></li>
              <li class=""><a href="company03.php">경영이념/비전</a></li>
              <li class=""><a href="company04.php">찾아오시는 길</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">제품소개</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="product01.php">히팅케이블</a></li>
              <li class=""><a href="product04.php">정온전선</a></li>
              <li class=""><a href="product06.php">메탈히터</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">시스템소개</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="system01.php">스노우멜팅</a></li>
              <li class=""><a href="system02.php">동파방지</a></li>
              <li class=""><a href="system03.php">아이스스탑</a></li>
              <li class=""><a href="system04.php">히트트레이싱</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">인증</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="certi01.php">기업인증</a></li>
              <li class=""><a href="certi02.php">제품인증</a></li>
              <li class=""><a href="certi03.php">시스템인증</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">고객센터</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="customer01.php">문의게시판</a></li>
              <li class=""><a href="customer02.php">자주 묻는 질문</a></li>
              <li class=""><a href="customer03.php">자료실</a></li>
              <li class=""><a href="customer04.php">공지사항</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">시공사례</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="customer01.php">스노우멜팅</a></li>
              <li class=""><a href="customer02.php">동파방지</a></li>
              <li class=""><a href="customer03.php">아이스스탑</a></li>
              <li class=""><a href="customer04.php">히트트레이싱</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="contact.php">빠른견적문의</a>
        </li>
      </ul>

      <div class="lang-box flex items-center">
        <a href="./index.php" class="on">
          <span>KR</span>
        </a>
        <a href="./en/index.php">
          <span>EN</span>
        </a>
      </div>
    </div>
  </div>