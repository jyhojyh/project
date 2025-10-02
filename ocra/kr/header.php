<!DOCTYPE html>

<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>INDEEP CDN</title>

  <link rel="stylesheet" href="https://use.typekit.net/bzz7evk.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/aos.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/font.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/common.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.indeep.co.kr/css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="../css/m.style.css?ver=<?php echo time(); ?>">

  <!--
    파비콘 생성 사이트
    https://favicon.io/favicon-converter/

    파비콘 사이즈 120*120
    og_image 사이즈 580*400
    
    -->
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
  <link rel="manifest" href="./favicon/site.webmanifest">

  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:image" content="../images/og_image.png">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
</head>

<body class="<?php if($this_page == "index") echo "index not-scroll"; ?>">
  <header>
    <div class="header-bg"></div>
    <div class="container">
      <div class="header flex items-center justify-between relative">
        <div class="logo-box">
          <a href="./index.php">
            <img class="img-responsive" src="../images/header/logo.png" />
          </a>
        </div>
        <nav class="hidden-lg">
          <ul class="flex items-center">
            <li class="depth01 mr60">
              <a href="./company01.php">회사 소개</a>
              <div class="depth02">
                <ul>
                  <li><a href="./company01.php">회사 개요</a></li>
                  <li><a href="./company02.php">특허</a></li>
                  <li><a href="./company03.php">오시는 길</a></li>
                </ul>
              </div>
            </li>
            <li class="depth01 mr60">
              <a href="./rnd01.php">제품</a>
              <div class="depth02">
                <ul>
                  <li><a href="./feature.php">제품 특징</a></li>
                  <li><a href="./technology.php">기술</a></li>
                  <li><a href="./application.php">적용사례</a></li>
                  <li><a href="./product_list01.php">슬림 사운드바</a></li>
                  <li><a href="./product_list02.php">슬림 서브우퍼</a></li>
                  <li><a href="./product_list03.php">드라이버</a></li>
                </ul>
              </div>
            </li>
            <li class="depth01 mr60">
              <a href="./business01.php">고객 문의</a>
              <div class="depth02">
                <ul>
                  <li><a href="./notice_list.php">공지사항</a></li>
                  <li><a href="./qna_list.php">자주 묻는 질문</a></li>
                  <li><a href="./download.php">자료실</a></li>
                </ul>
              </div>
            </li>
            <li class="depth01 mr60">
              <a href="./business01.php">언어</a>
              <div class="depth02">
                <ul>
                  <li><a href="./index.php">영어</a></li>
                  <li><a href="./kr/index.php">한국어</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="mobile-menu">
    <div class="site_map">
      <div>
        <div>
          <div class="site_logo">
            <a href="index.php">
              <img alt="" class="img-responsive center-block" src="../images/main/content02.png" width="200">
              </img></a>
          </div>
          <ul class="mt60 xs-mt60">
            <li class="depth01">
              <a>
                <span>회사 소개</span>
              </a>
              <ul class="depth02">
                <li><a href="./company01.php">회사 개요</a></li>
                <li><a href="./company02.php">특허</a></li>
                <li><a href="./company03.php">오시는 길</a></li>
              </ul>
            </li>
            <li class="depth01">
              <a>
                <span>제품</span>
              </a>
              <ul class="depth02">
                <li><a href="./feature.php">제품 특징</a></li>
                <li><a href="./technology.php">기술</a></li>
                <li><a href="./application.php">적용사례</a></li>
                <li><a href="./product_list01.php">슬림 사운드바</a></li>
                <li><a href="./product_list02.php">슬림 서브우퍼</a></li>
                <li><a href="./product_list03.php">드라이버</a></li>
              </ul>
            </li>
            <li class="depth01">
              <a>
                <span>고객 문의</span>
              </a>
              <ul class="depth02">
                <li><a href="./notice_list.php">공지사항</a></li>
                <li><a href="./qna_list.php">자주 묻는 질문</a></li>
                <li><a href="./download.php">자료실</a></li>
              </ul>
            </li>
            <li class="depth01">
              <a>
                <span>언어</span>
              </a>
              <ul class="depth02">
                <li><a href="./index.php">영어</a></li>
                <li><a href="./kr/index.php">한국어</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
  <div class="ham visible-lg">
    <span class="bar1"></span>
    <span class="bar2"></span>
    <span class="bar3"></span>
  </div>