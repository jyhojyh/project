$(document).ready(function(){
  // 헤더 메뉴
  $(".ham-btn").on("click",function(){
    if($(this).hasClass("on")){      
      $(".ham-btn,.ham-dim,.ham-menu").removeClass("on");
    }else{      
      $(".ham-btn,.ham-dim,.ham-menu").addClass("on");
    }    
  });
  $(".ham-dim").on("click",function(){
    $(".ham-btn,.ham-dim,.ham-menu").removeClass("on");
  });
  $(".ham-menu>ul>li").on("click",function(){    
    $(this).addClass("on").siblings().removeClass("on");
  });
  $(".banner").addClass("active");
  
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