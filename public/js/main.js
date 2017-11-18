$(document).ready(function(){
	$('#preload').fadeOut();
	$('.preload').fadeOut('slow');
	$('html, body').animate({scrollTop:0 });

// Global var
var body = $('body,html');
var page_top = $('#page_top');


// Change Easing
jQuery.easing.def = "easeInOutExpo";
// Change Easing END

// Slider
function phobos_slider(){
	var carousel = $('.carousel, .carousel-inner, .carousel .item');
	if(!carousel.length) {
		return;
	}
	var texts = $('.text_slider');

	if($(window).width() < 767) {
		var nav_header = $(".navbar-header").height();
		var height_carousel = $(window).height() - nav_header;
		carousel.css('height', height_carousel + 'px').css('width','100%');	
	}
	else {
		var nav = $(".nav").height();
		var height_carousel = $(window).height() - nav;
		carousel.css('height', height_carousel + 'px').css('width','100%');	
	}
	$('a.right, a.left, .carousel-indicators').click(function(){
		if(texts === texts.hide()){
			
			texts.fadeIn(1500);
			
		}else{
			
			texts.fadeOut(1000);
		}
	})
}phobos_slider();
// Slider END

// page scroll
$('a[href^="#"]').click(function(event) {
	event.preventDefault();
	var id = $(this).attr("href");
	var target = $(id).offset().top;
	body.stop().animate({scrollTop:target -70 }, 1200);
});
// page scroll END

// ON SCROLL FUNCTION
function onscroll(){
	var top = page_top.height();
	var nav = $('.navigacija');
	var nav_header = $('.navbar-header');
	// STICKY NAV
	if($(this).scrollTop()>=top){
		body.attr('data-target', '.navbar');
		nav.addClass('navbar-fixed-top');
		page_top.stop().animate({paddingBottom: '73px'},0);
	}

	else{		
		body.attr('data-target', '');
		nav.removeClass('navbar-fixed-top');
		page_top.css('padding-bottom', '0px');
	}
	
};
// nav collapse
function collapse(){
if ($('.navbar-toggle:visible').length) {
		$('.navbar a').click(function () { 
		$(".navbar-collapse").collapse("hide");
		});
	}
}collapse();
	
$(window).resize(function(){
	collapse();
	phobos_slider();
})
// nav collapse END
// About us 3 icons
var animateBuble = function(){
	 var bubble = $('.bubble_outer_one, .bubble_outer_two, .bubble_outer_three');
	 if(!bubble.length) {
	 	return;
	 }
	bubble.hover(function(){

		$('.bubble',this)
		.stop().animate({width:'130px',height:'130px',left:10, top:10,},500)
		.fadeTo("fast", 0.3);

	},function(){

		$('.bubble',this)
		.stop().animate({width:'0px', height:'0px', top:'50%', left:'50%'},500)
		.fadeTo("fast", 0.8);
	})
	
}
animateBuble();
// About us 3 icons END



// About us Article hover
var articleHover = function(){
	var about_us_articles = $(".about_us_article");
	if(!about_us_articles.length) {
		return;
	}
	about_us_articles.hover(
		function() {
			$('.about_arrow', this).css('display', 'block').stop().animate({top: '5%'}, 1000);
		}, function() {
			$('.about_arrow', this).css('display', 'none').stop().animate({top: '60%'}, 100);
		}
	);
};
articleHover();
// About us Article hover END

// OUR SKILLS
function animateProgress(){
	var about_top = $("#about").offset().top;
	
	var progressbar = $('.progress-bar');
	if(!progressbar.length) {
		return;
	}
	var scroll = $(this).scrollTop();
	progressbar.each(function(){
		var width = $(this).data('width');
		if(scroll > about_top + 50){
			$(this).attr('style', width);
		}
		else {
			$(this).attr('style', '')
		}

	});
}
// OUR SKILLS END

// PARALLAX ICONS FUNCTION
function paralaksIcon(){
	
	var window_height = window.innerHeight; 
	var scroll = $(this).scrollTop();
	
	function workAnimate() {
		var work_section = $("#ourwork");
		var work = work_section.find('.work_animate i');
	 	if(!work.length) {
	 		return;
	 	}
	 	var work_top = work_section.offset().top;
	 
		if (scroll > work_top - 100){
			work.stop().animate({fontSize:'45px', opacity:0.4},500);
		}
		else {
			work.stop().animate({fontSize:'20px', opacity:0.1},500);
		}	
	}
	workAnimate();

	function testtimonialsAnimate() {
		var testimonials_section = $("#testimonials");
		var testimonials = testimonials_section.find('.testimonial_animate i');
		if(!testimonials.length) {
			return;
		}
		var testimonials_top = testimonials_section.offset().top;
	
		if (scroll > testimonials_top - 100){
			testimonials.stop().animate({fontSize:'45px', opacity:0.4},500);
		}
		else {
			testimonials.stop().animate({fontSize:'20px', opacity:0.1},500);
		}
	}
	testtimonialsAnimate();
	
	function teamAnimate() {
		var team_section = $("#team");
		var team = team_section.find('.team_animate i');
		if(!team.length) {
			return;
		}
	 	var team_top = team_section.offset().top;
		if (scroll > team_top - 100){
			team.stop().animate({fontSize:'45px', opacity:0.4},500);
		}
		else {
			team.stop().animate({fontSize:'20px', opacity:0.1},500);	
		}		
	}
	teamAnimate();

}paralaksIcon();
// PARALLAX ICONS FUNCTION END
	
// PARALLAX FUNCTION
function paralaks(){
	var paralaks = $('.our_team_image, .our_work_image, .testimonials_image');
	if(!paralaks.length) {
		return;
	}
	var Yosa = (-$(window).scrollTop() / paralaks.data('speed'))+300;
	var coords = '0% '+ Yosa + 'px';
	paralaks.css('backgroundPosition', coords);
}
// PARALLAX FUNCTION END

$(window).bind('scroll', function(){
	onscroll();
	paralaks();
	paralaksIcon();
	animateProgress();
});


// GALLERY
var $gallery = $('.gallery');
var $gallery_frame = $('.big-images');
$gallery_frame.css('backgroundColor', 'white');
var gallery_mob = $('.gallery_mob ul');
var picture = $('.gallery_mob ul li');

function hoverGaleryThumb(){
	// THIS FUNCTION MAKE ANIMATE EFFECT WHEN MOUSE ENTER/LEAVE PICTURE
	$('.img_container').hover(function(){
	$('.gallery_hover', this).stop().animate({top:'-145px'},500,function(){
			var mag = $('.mag',this);
			mag.fadeIn(300);
	});
},function(){
	var mag = $('.mag',this);
			mag.fadeOut(100);
		$('.gallery_hover' , this).stop().delay(100)
		.animate({top:'0px'},500);
});	
}hoverGaleryThumb();

function openGallery(){	
	// THIS FUNCTION OPEN AND CLOSE THE GALERRY
	// AND SET GALLERY TO CENTER OF WINDOW
	var width_gallery = $gallery.width();
	var height_gallery = $gallery.height();
	var width_window = $(window).width();
	$('.mag').on('click', function(){
		
		var position_gallery = $gallery.offset().top;
		var image = $(this).attr('data-image');
		var caption = $(this).attr('data-caption');
		$gallery_frame.children('img').attr('src', image).end().fadeIn();
		$('.img_caption').hide().html(caption);
		$('html, body').animate({scrollTop:position_gallery-250},500);
	})
		$('.close_img').on('click', function(){
		$gallery_frame.children('.img_caption').fadeOut().html('')
		.end().fadeOut('slow').children('img').attr('src', '');
	})
}openGallery();
function responsive(){
	// THIS FUNCTION MAKE GALLERY ON CENTER
		var position_gallery = $gallery.offset();
		var width_gallery = $gallery.width();
		var height_gallery = $gallery.height();
		var marginTop = (height_gallery-400)/8 + 'px';
		$gallery_frame.css('width', width_gallery).css('height', height_gallery)
		.children('img, .img_caption').css('margin-top', marginTop).css('margin-left', '20px');
}
responsive();

$(window).resize(function(){
	// THIS CALL AGAIN FUNCTION TO UPDATE GALLERY POSITION
		responsive();
});	
 
	// GALLERY FOR MOBILE DEVICE
$(window).resize(function(){
		// THIS FUNCTION RESIZE WINDOW
		var window_width = window.innerWidth;
		function smallDeviceGall(){
			// FUNCTION SMALL DEVICES CHECK DEVICES
			// AND MAKE SLIDER RESPONSIVE
		    if( window_width <=480 || window_width > 481){
		    	gallery_mob.css('left', '0px').end();
		    	// IF DEVICES MOBILE OR LANDSCAPE
		    	// WE CALL FUNCTION SLIDER MOB AGAIN TO UPDATE POSITION
		    	// IF NOT, HIDE SLIDER AND SHOW FULL GALLERY
		    	sliderMob();
  			}
		}smallDeviceGall();	
		
}) 
  
function sliderMob(){
	// THIS IS FUNCTION FOR GALLERY SLIDER MOBILE
    //INSIDE ARE FUNCTIONS ON SWIPE AND ON CLICK 
    // THIS IS GLOBAL VARIABLE FOR BOTH FUNCTION
	var picture_number = picture.length;
    var picture_width = picture.outerWidth(true);
	var picture_height_mob = picture.outerHeight();
    var slider_width = picture_width * picture_number;
    var paralaks_width = slider_width;
    var count = 0; 
    gallery_mob.width(slider_width);
    gallery_mob.css('height', picture_height_mob);
 
function mobOnClick(){
    	// FUNCTION ON CLICK MOVE SLIDER WHEN CLICK ON ARRAY
        $('#controls_mob_left , #controls_mob_right, #gallery_mob_left, #gallery_mob_right').click(function(){
            var id = this.id;
            if(id === 'controls_mob_right' || id === 'gallery_mob_right' ){
                count ++;

            }else{
                count--;

            }
            if(count === -1){
                count = picture_number - 1;
            }else {
                count = count % picture_number;
            }	
            gallery_mob.stop().animate({left:-count*picture_width},1000,'swing');           
        }) 
        }mobOnClick();            
}sliderMob();
// GALLERY END

// TESTIMONIAL

function sliderTestemonial(){
	var slider_testimonials = $(".slider");
	if(!slider_testimonials.length) {
		return;
	}
	var item_height = $('.slider ul li').outerHeight();
	var item_width = $('.slider ul li').outerWidth();
	var left = item_width * (-1);
	$('.slider').height(item_height);
	$('.slider ul').css('left', left);
	$('.slider ul li:first').before($('.slider ul li:last'));	
	$('.see_more').click(function(){
		var item_width = $('.slider ul li').outerWidth();
		var left = item_width * (-1);
		var width = $('.client_image img').width();
		var height = $('.client_image img').height();
		var sliding = parseInt($('.slider ul').css('left')) - item_width;
		$('.slider ul').stop().animate({'left':sliding}, function(){
			$('.slider li:last').after($('.slider li:first'));
			$('.slider ul').css('left', left);
		})
	})

}sliderTestemonial();
function testemonialResponsive(){
	// this function update 
	// slider dimensions and position

	var item_width = $('.slider ul li').outerWidth();
	var left = item_width * (-1);
	$('.slider ul').css('left', left);
}
testemonialResponsive();

$(window).resize(function(){
	// because we cahed some var
	// we must declare again
	var item_width = $('.slider ul li').outerWidth();
	var left = item_width * (-1);
	testemonialResponsive();
})
// TESTIMONIAL END


		
// OUR CLIENT SLIDER

function clientResponsive(){
	// this function set
	// dimension and position
	var itemWidth = $('.slider_partners li').outerWidth();
	var leftValue = itemWidth * (-1);
	$('.slider_partners ul').css('left', leftValue);
}
clientResponsive();
$(window).resize(function(){
	// on resize we declare
	// var again
 	var itemWidth = $('.slider_partners .client_logo_partners').outerWidth();
	var leftValue = itemWidth * (-1);
	clientResponsive();

 })	
function initializeSlider(){
	var itemWidth = parseInt($(".slider_partners ul").children().css('width')); 
	var leftValue = itemWidth * (-1); 
	$('.slider_partners ul').children(':first').before($('.slider_partners ul').children(':last'));   
	$(".slider_partners ul").css({'left' : leftValue});

	function slideNext(){

		var leftIndent = parseInt($('.slider_partners ul').css('left')) - itemWidth;
		$('.slider_partners ul').stop()
		.animate({'left':leftIndent},500,"easeInOutBack",function(){
			$('.slider_partners .client_logo_partners:last').after($('.slider_partners .client_logo_partners:first'));           
			$('.slider_partners ul').css({'left' : leftValue});		    		
		});
	}
		
	function slidePrev(){

		var leftIndent = parseInt($('.slider_partners ul').css('left')) + itemWidth;
		$('.slider_partners ul').stop().animate({'left':leftIndent},500,"easeInOutBack",function(){    
		 	$('.slider_partners .client_logo_partners:first').before($('.slider_partners .client_logo_partners:last'));           
			$('.slider_partners ul').css({'left' : leftValue});
		});
			
	}

	$(".slider_partners_arrow").on('click', function(){

		if($(this).data('direction') === 'next') {

			slideNext();
		}

		else {
			slidePrev();
		}				
	})
}
initializeSlider();
});

