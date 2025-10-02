$(document).ready(function(){	
  $(".ham").click(function() {		
    $(".mobile-menu, .overlay,.ham").toggleClass("on");		
		$("body").toggleClass("not-scroll");		
  });
	$(".mobile-menu .depth01 > a").click(function() {
		if ($(this).hasClass("on")) {
			$(this).removeClass("on");
			$(this).siblings(".depth02").slideUp();			
		} else {
			$(".mobile-menu .depth01 > a").removeClass("on");
			$(this).addClass("on");
			$(this).siblings(".depth02").slideDown();
			$(this).parent("li").siblings("li").find(".depth02").slideUp();
		}
	});
	
	$(function(){
		var rollHeader = 100;
		$(window).scroll(function() {
		var scroll = getCurrentScroll();
			if ( scroll >= rollHeader ) {
				$('header, .mobile-header').addClass('roll');
				
			}
			else {
				$('header, .mobile-header').removeClass('roll');
				
			}
		});
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
		}
	});

	// header hover class
	$('.header nav>ul>li').on('mouseenter', function(e){
		$(".header, .header-bg").addClass("on")
		$(".header-dim").show();
		$(".header-dim").css({
			"z-index" : "3",
		});
		$(this).addClass("bg");
		$(this).siblings("li").removeClass("bg");
		$(this).find(".depth02").addClass("on");

	});

	$('.header .depth01').on('mouseleave', function(e){
		$(this).removeClass("bg");
		$(this).find(".depth02").removeClass("on");
	});

	$('header').on('mouseleave', function(e){	
		$(".header-bg").removeClass("on")
		$(".header").removeClass("on");
		$(".header-dim").hide();
		$(".header-dim").css({
			"z-index" : "-1",
		});
		$(".header").removeClass("bg");
	});
});