$(document).on("ready",function(){
	const swiper = new Swiper('.swiper', {
		loop:true,
		slidesPerView: 1,
		speed: 400,
		effect:"fade",
		navigation: {
	    nextEl: '.swiper-button-next',
	    prevEl: '.swiper-button-prev',
	  },
	  on:{
	  	init:function(){
	  		var n = this.wrapperEl.querySelectorAll(".swiper-slide").length;
				$(".total").text(n);
	  	}
	  }
	});	
	swiper.on('slideChangeTransitionStart', function () {
  	var i = swiper.realIndex;  	
  	var ii = i+1;
  	$(".arrow-wrap .num").text(String(ii).padStart(2, ""));
	});
	$(".desc h5").on("click",function(){
		if($(this).hasClass("on")){
			$(this).removeClass("on");
			$(this).parent().siblings("h6").slideUp();
			$(this).siblings().find(".plus").show();
			$(this).siblings().find(".minus").hide();
		}else{
			$(".desc .plus").show();
			$(".desc .minus").hide();
			$(".desc h5").removeClass("on");
			$(".desc h6").slideUp();
			$(this).addClass("on");
			$(this).parent().siblings("h6").slideDown();
			$(this).siblings().find(".plus").hide();
			$(this).siblings().find(".minus").show();
		}		
	});
});