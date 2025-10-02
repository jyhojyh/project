<?php
$page = "none";
include_once("header.php");
?>

<div>	
	<div class="navi-menu">
		<div class="menu_mo">
			<div class="menu_wrap">
				<p class="menu1 on"><span>COSMETICS</span></p>				
			</div>
		</div>
	</div>
	<div class="swiper ingredient-slide">
		<div class="swiper-wrapper">
			<div class="swiper-slide slide01">
				<div class="wrap">
					<div class="img-box">
						<div class="img-wrap">
							<div></div>
						</div>						
					</div>					
				</div>
				<div class="wrap">
					<div class="text-wrap right">
						<h3>
						<ul>
							<li>
								<div class="title">Base Care</div>
								<div class="content">
									Foot Shampoo<br />
									Brush Container
								</div>
							</li>
							<li>
								<div class="title">Intensive Care</div>
								<div class="content">
									Magic Dual Stick 4 Types<br />
									Band
								</div>
							</li>
							<li>
								<div class="title">Follow-up Care</div>
								<div class="content">
									Natural Material Composite Multi Stick<br />
									Natural Material Composite Ampoule Pad
								</div>
							</li>
							<li>
								<div class="title">Moisturizing Care</div>
								<div class="content">
									Cream<br />
									Ampoule<br />
									Serum
								</div>
							</li>
						</ul>
						</h3>
					</div>
				</div>
			</div>			
		</div>
	</div>	
</div>

<div id="ingredients" class="fullpage-wrapper">
	<div class="section" id="section0"></div>	
</div>
<div class="mobile-bg"></div>
<?php
include_once("footer.php");
?>
<script>
	const swiper = new Swiper('.swiper', {
		slidesPerView: 1,
		speed: 1500,
  	loop:false,
  	allowTouchMove:false,
  	observer: true,
  	effect: 'fade',
  	parallax: true,
  	mousewheel: {
    	invert: false,
  	},
  	navigation: {
    	nextEl: '.swiper-button-next',
    	prevEl: '.swiper-button-prev',
  	}
 	});
 	swiper.on('slideChangeTransitionStart', function () {
  	var i = swiper.realIndex;
  	$(".progressbar div").eq(i).addClass("on").siblings().removeClass("on");
  	var ii = i+1;
  	/*$(".navi-menu strong").text(String(ii).padStart(2, "0"));*/
	});
</script>

<script>	
		//left menu
	function left_menu_p_h() {
		if($(window).width() >= $(window).height()*0.7 && $(window).width() <= $(window).height()*1.2){
			$('.navi-menu p').css('height',$(window).height()*0.78);
		} else if($(window).width() <= $(window).height()*1.2){
			$('.navi-menu p').css('height',$(window).height()*0.94 - $(window).width()*0.21875);
		} else {
			$('.navi-menu p').css('height',$(window).height()*0.5);
		}
	};
	left_menu_p_h();
	function left_menu_ani_h() {
		if($(window).width() >= $(window).height()*0.7 && $(window).width() <= $(window).height()*1.2){
			var windowHeight = $(window).height()*0.78;
		} else {
			var windowHeight = $(window).height()*0.94 - $(window).width()*0.21875;
		}
		document.documentElement.style.setProperty('--window-height1', windowHeight + 'px');
		document.documentElement.style.setProperty('--window-height2', '-' + windowHeight + 'px');
		var windowWidth = $(window).width()*0.13;
		document.documentElement.style.setProperty('--window-width', '-' + windowWidth + 'px');
	};
	left_menu_ani_h();
	$(window).resize(function () {
		left_menu_p_h();
		left_menu_ani_h();
		if($(window).width() <= $(window).height()*1.2){			
			$('.ingredients_wrap .navi-menu .menu_mo').css('transform','translate(0,-'+ $('#ingredients .fp-section.active').index() *($(window).height()*0.94 - $(window).width()*0.21875)+'px)');
		} else {			
			$('.ingredients_wrap .navi-menu .menu_mo').css('transform','translate(0,-'+ $('#ingredients .fp-section.active').index() *($(window).height()*0.5)+'px)');
		}
	});
		$('#ingredients').fullpage({
			licenseKey: '7C2F470B-4994415B-93F2DBF8-D9877BB9',
			scrollingSpeed:2000,
			verticalCentered: false,
			onLeave: function(origin, destination, direction){
				
				if(direction == 'up'){					
					$('.navi-menu .menu_wrap').addClass('up');
					$('.navi-menu p').removeClass('on');
					$('.navi-menu p').eq(destination.index).addClass('on');
					setTimeout(function(){
						$('.navi-menu p').removeClass('ready');
						$('.navi-menu p').eq(destination.index).addClass('ready');
						$('.navi-menu p').eq(destination.index-2).addClass('ready');
						$('.navi-menu p').removeClass('delay');
						$('.navi-menu p').eq(destination.index).addClass('delay');
					},500);
				}
				if(direction == 'down'){					
					$('.navi-menu .menu_wrap').addClass('down');
					$('.navi-menu p').removeClass('on');
					$('.navi-menu p').eq(destination.index).addClass('on');
					setTimeout(function(){
						$('.navi-menu p').removeClass('ready');
						$('.navi-menu p').eq(origin.index-1).addClass('ready');
						$('.navi-menu p').eq(destination.index).addClass('ready');
						$('.navi-menu p').removeClass('delay');
						$('.navi-menu p').eq(destination.index).addClass('delay');
					},500);
				}				
			},
			afterLoad: function(anchorLink, destination){				
				$('.navi-menu .menu_wrap').removeClass('up down');
				$('.navi-menu .menu_mo').removeClass('top');
				if($(window).width() >= $(window).height()*0.7 && $(window).width() <= $(window).height()*1.2){					
					$('.navi-menu .menu_mo').css('transform','translate(0,-'+(destination.index)*$(window).height()*0.78+'px)');
				} else if($(window).width() <= $(window).height()*1.2){					
					$('.navi-menu .menu_mo').css('transform','translate(0,-'+(destination.index)*($(window).height()*0.94 - $(window).width()*0.21875)+'px)');
				} else {					
					$('.navi-menu .menu_mo').css('transform','translate(0,-'+(destination.index)*($(window).height()*0.5)+'px)');
				}				
			}
		});
    
    $(".slide02 ul li").on("click",function(){
    	var i = $(this).index();    	
    	$(".slide02 .text-wrap.center").removeClass("on");
    	$(".slide02 .text-wrap.center").eq(i).addClass("on");
    	$(".slide02 ul li").eq(i).addClass("on").siblings().removeClass("on");    	
    });
</script>