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
  <link rel="stylesheet" type="text/css" href="../css/style_en.css?ver=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="../css/m.style.css?ver=<?php echo time(); ?>">
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
            <img src="../images/header/logo.png" alt="" class="img-responsive" />
          </a>
        </div>
        <ul class="menu flex hidden-lg">
          <li class="mr50"><a class="white <?php if($cate_name == "company") echo "on"; ?>" href="company01.php">Felix Heating System</a></li>
          <li class="mr50"><a class="white <?php if($cate_name == "product") echo "on"; ?>" href="product01.php">Products</a></li>
          <li class="mr50"><a class="white <?php if($cate_name == "system") echo "on"; ?>" href="system01.php">System</a></li>
          <li class="mr50"><a class="white <?php if($cate_name == "certi") echo "on"; ?>" href="certi01.php">Certificate</a></li>
          <li class="mr50"><a class="white <?php if($cate_name == "customer") echo "on"; ?>" href="customer01.php">Customer</a></li>
          <li><a class="white <?php if($cate_name == "gallery") echo "on"; ?>" href="gallery01.php">Project References</a></li>
        </ul>
        <div class="inquiry hidden-lg">
          <a href="contact.php" class="pt10 pb10 pl30 pr30 white">Inquiry</a>
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
          <a href="javascript:void(0);">Felix Heating System</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="company01.php">Overview</a></li>
              <li class=""><a href="company02.php">History</a></li>
              <li class=""><a href="company03.php">Philosophy/Vision</a></li>
              <li class=""><a href="company04.php">Location</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">Products</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="product01.php">Heating Cable</a></li>
              <li class=""><a href="product04.php">Self-Regulating Heating Cable</a></li>
              <li class=""><a href="product06.php">Metal Heater</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">System</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="system01.php">Snow Melting</a></li>
              <li class=""><a href="system02.php">Anti-Freezing</a></li>
              <li class=""><a href="system03.php">Ice Protection</a></li>
              <li class=""><a href="system04.php">Electrical Heat Tracing</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">Certificate</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="certi01.php">Corporate</a></li>
              <li class=""><a href="certi02.php">Product</a></li>
              <li class=""><a href="certi03.php">System</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">Customer</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="customer01.php">Q&amp;A</a></li>
              <li class=""><a href="customer02.php">FAQ</a></li>
              <li class=""><a href="customer03.php">Data Center</a></li>
              <li class=""><a href="customer04.php">Notice</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="javascript:void(0);">Project References</a>
          <div class="depth02">
            <ul>
              <li class=""><a href="customer01.php">Snow Melting</a></li>
              <li class=""><a href="customer02.php">Anti-Freezing</a></li>
              <li class=""><a href="customer03.php">Ice Protection</a></li>
              <li class=""><a href="customer04.php">Electrical Heat Tracing</a></li>
            </ul>
          </div>
        </li>
        <li class="">
          <a href="contact.php">Inquiry</a>
        </li>
      </ul>

      <div class="lang-box flex items-center">
        <a href="../index.php">
          <span>KR</span>
        </a>
        <a href="index.php" class="on">
          <span>EN</span>
        </a>
      </div>
    </div>
  </div>