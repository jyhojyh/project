<?php
$page = "index";
include_once("header.php");
?>
<div class="wrap page_intro">
  <div class="intro_wrap">
    <div class="intro_vd">
      <video id="intro" preload="auto" autoplay="" playsinline="" muted="" onended="">
        <source src="video/main.mp4" type="video/mp4">
      </video>      
    </div>
    <div class="skip">
      <a href="#about">
        <p>SKIP</p>
        <span></span>
      </a>
    </div>
  </div>
  <div class="circle">
    <div class="circle_wrap">
      <div class="fig">
        <span>
          <img src="./images/main/circle.png" alt="" />
          <div class="shadow"></div>
        </span>
      </div>
    </div>
  </div>
  <div class="about_wrap">
    <div id="about">
      <div class="section section01">
        <div class="fp_wrap">
          <div class="center_wrap">
            <div class="text_wrap">
              <h3><span><i style="font-weight: 800;font-size: 24px;">Healthy Beauty</i></span></h3>
              <h4></h4>
              <p><span>Under the vision of "healthy beauty",</span></p>
              <p><span>we have been devoting ourselves to Prioritize customer satisfaction.</span></p>
              <p><span>To create products that meet the needs of customers,</span></p>
              <p><span>we have built customer trust with</span></p>
              <p><span>our own technologies and product patents.<br><br></span></p>              
              <p><span>Even now,</span></p>
              <p><span>through the establishment of a global sales network</span></p>
              <p><span>and as well as a domestic network,</span></p>
              <p><span>BarngKeeJung Corporation is being regenerated</span></p>
              <p><span>as a global beauty company.</span></p>              
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>  
</div>
<?php
include_once("footer.php");
?>

<script>
var url = window.location.hash;
if (url === '#about') {	
  $('.wrap').removeClass('page_intro');
  $('.wrap').addClass('page_about');
  $('.circle').addClass('intro_cir');
  $('.about_wrap').fadeIn(0);
  $('.about_wrap').addClass('on');
  $('.skip').fadeOut(0);
  $('.circle').addClass('on');
  setTimeout(function() {
    $(".intro_wrap").addClass("remove");
  }, 1500);
  setTimeout(function() {
		$('.section01,#fp-nav').addClass('on');
		$('header ul li a').addClass("black");    
  }, 2000);
  FullpageAbout();
}
$(document).on('click', '.intro_wrap .skip', function() {
  $(".menu1").trigger("click");
});
$(document).on('click', 'header ul li a', function() {
  //about		
  if ($(this).attr('class') == "menu1") {
    if ($('.wrap').hasClass('page_intro')) {
      //intro				
      $('.wrap').removeClass('page_intro');
      $('.wrap').addClass('page_about');
      $('.circle').addClass('intro_cir');
      $('.about_wrap').fadeIn(0);
      $('.about_wrap').addClass('on');
      $('.skip').fadeOut(0);
      $('.circle').addClass('on');
      setTimeout(function() {
        $(".intro_wrap").addClass("remove");
      }, 1500);
      setTimeout(function() {
        $('.section01,#fp-nav').addClass('on');
				$('header ul li a').addClass("black");				
      }, 2000);
      FullpageAbout();
    }
  }
});

function FullpageAbout() {
  $('#about').fullpage({
    css3: false,
    scrollingSpeed: 0,
    navigation: true,
    navigationPosition: 'left',
    onLeave: function(origin, destination, direction, index) {
      var i = destination.index + 1;
      $(".section,.circle").removeClass("on");
      $(".section0" + i).addClass("on");
      if (i == 1 || i == 4) {
        $(".circle").addClass("on");
      }
    }
  });
}
</script>