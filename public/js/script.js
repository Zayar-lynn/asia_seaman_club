(function($) { 

	"use strict";
	
	/* ================ Revolution Slider. ================ */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
	        startheight:550,
	        startwidth: 1170,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullWidth: 'on'
		});
	}
	if($('.tp-banner-full').length > 0){
		$('.tp-banner-full').show().revolution({
			delay:6000,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullScreen: 'on'
		});
	}
	


/* ================ testimonials ================ */
$(document).ready(function() { 
  	$(".owl-carousel").owlCarousel({ 
      
	   loop:true,
		margin:10,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			700:{
				items:2,
				nav:false
			},
			1170:{
				items:2,
				nav:true,
				loop:false
			}
		}
	  
	  
  	}); 
	});






})(jQuery);


/** Collaps for faqs **/
  $(document).ready(function() {
    $('.collaps p').hide();
    $(document).on("click", '.collaps h4', function() {
      if( $(this).hasClass('active') ){
        $(this).next('p').slideUp();
        $(this).removeClass('active');
      } else {
        $(this).next('p').slideDown();
        $(this).addClass('active');
      }
    });
  });




$('#myCarousel').carousel({
		interval:   4000
	});

$(".scroll_top").hide();
$(window).scroll(function(){
	if ($(this).scrollTop() > 20) {
		$(".scroll_top").fadeIn();
	}else{
		$(".scroll_top").fadeOut();
	}
});




$(".scroll_top").click(function(){
		$("html,body").animate({
			scrollTop : 0
		},1000);
		return false;
	});

$("[data-toggle='tooltip']").tooltip();


//======================================
// Hello Backend Developer I am Chit Min Thu!
// You must be useing in jQuery Ajax
// =====================================
$(document).ready(function(){
	var certificate;
	
	var a = $("#certifi").change(function() {
		certificate = $("#certifi").val();
	});
	
	var i = 1;
	$("#c_add").click(function(){
		var b = $("#certifi").change();
		if (!b) {
			alert("Certificate Error!");
		}else{
			i++;
			$("#dynamic_table").append('<tr id="row'+i+'"><th>'+certificate+'</th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="date" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><input type="submit" value="X" id="'+i+'" class="btn_remove btn btn-danger"></th></tr>')
		}
	});


	//Sea Man Book
	$("#seaman-book").click(function(){
		i++;
		$("#dynamic_table_2").append('<tr id="row'+i+'"><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="date" class="form-control"></div></th><th><div class="form-group"><input type="date" class="form-control"></div></th><th><input type="submit" value="X" id="'+i+'" class="btn_remove btn btn-danger"></th></tr>')
	});


	$("#seaman-service").click(function(){
		i++;
		$("#dynamic_table_3").append('<tr id="row'+i+'"><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><div class="form-group"><input type="text" class="form-control"></div></th><th><input type="submit" value="X" id="'+i+'" class="btn_remove btn btn-danger"></th></tr>')
	});

	$(document).on('click','.btn_remove',function(){
		var btn = $(this).attr("id");
		$('#row'+btn+"").remove();
	});
	// -----------------------------------------------------------
	// you use in the Ajax under between the '---' line





	//------------------------------------------------------------- 


	// Hello I am Chit min thu !
	// This is a bootstrap tabs ----- Don't tounch it ----- Very important

	 $(document).ready(function () {
	 	$('.show-hide-mpu').hide();
	 	$('.c-on-dev-show').click(function(){
            $('.show-hide-mpu').fadeIn(); 
       });

       $('.c-on-dev-hide').click(function(){
            $('.show-hide-mpu').fadeOut(); 
       });
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
});