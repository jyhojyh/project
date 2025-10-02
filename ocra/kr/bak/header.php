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
            <img src="../images/header/logo.png" class="img-responsive">
          </a>
        </div>
        <nav class="hidden-lg">
          <ul class="flex items-center">
            <li class="depth01 mr60">
              <a href="./company01.php">COMPANY</a>
              <div class="depth02">
                <ul>
                  <li><a href="./company01.php">Overview</a></li>
                  <li><a href="./company02.php">Patents</a></li>
                  <li><a href="./company03.php">Location</a></li>
                </ul>
              </div>
            </li>
            <li class="depth01 mr60">
              <a href="./rnd01.php">PRODUCTS</a>
              <div class="depth02">
                <ul>
                  <li><a href="./feature.php">Product Feature</a></li>
                  <li><a href="./technology.php">Technology</a></li>
                  <li><a href="./application.php">Application</a></li>
                  <li><a href="./product_list01.php">Slim Soundbar</a></li>
                  <li><a href="./product_list02.php">Slim Subwoofer</a></li>
                  <li><a href="./product_list03.php">Driver</a></li>
                </ul>
              </div>
            </li>
            <li class="depth01 mr60">
              <a href="./business01.php">CUSTOMER</a>
              <div class="depth02">
                <ul>
                  <li><a href="./notice_list.php">Notice</a></li>
                  <li><a href="./qna_list.php">Q&amp;A</a></li>
                  <li><a href="./download.php">Download</a></li>
                </ul>
              </div>
            </li>
            <li class="depth01 mr60">
              <a href="./business01.php">LANGUAGE</a>
              <div class="depth02">
                <ul>
                  <li><a href="./index.php">English</a></li>
                  <li><a href="./kr/index.php">Korean</a></li>
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
              <img src="../images/main/content02.png" alt="" class="img-responsive center-block" width="200" />
            </a>
          </div>
          <ul class="mt60 xs-mt60">
            <li class="depth01">
              <a>
                <span>COMPANY</span>
              </a>
              <ul class="depth02">
                <li><a href="./company01.php">Overview</a></li>
                <li><a href="./company02.php">Patents</a></li>
                <li><a href="./company03.php">Location</a></li>
              </ul>
            </li>
            <li class="depth01">
              <a>
                <span>PRODUCTS</span>
              </a>
              <ul class="depth02">
                <li><a href="./feature.php">Product Feature</a></li>
                <li><a href="./technology.php">Technology</a></li>
                <li><a href="./application.php">Application</a></li>
                <li><a href="./product_list01.php">Slim Soundbar</a></li>
                <li><a href="./product_list02.php">Slim Subwoofer</a></li>
                <li><a href="./product_list03.php">Driver</a></li>
              </ul>
            </li>
            <li class="depth01">
              <a>
                <span>CUSTOMER</span>
              </a>
              <ul class="depth02">
                <li><a href="./notice_list.php">Notice</a></li>
                <li><a href="./qna_list.php">Q&amp;A</a></li>
                <li><a href="./download.php">Download</a></li>
              </ul>
            </li>
            <li class="depth01">
              <a>
                <span>LANGUAGE</span>
              </a>
              <ul class="depth02">
                <li><a href="./index.php">English</a></li>
                <li><a href="./kr/index.php">Korean</a></li>
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