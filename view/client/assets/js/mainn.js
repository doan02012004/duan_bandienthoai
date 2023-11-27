(function ($) {
    "use strict";

$(document).ready(function(){


	
	/*--
        Off Canvas Menu
    -----------------------------------*/
    /*Variables*/
    var $offCanvasNav = $('.canvas-menu'),
    $offCanvasNavSubMenu = $offCanvasNav.find('.home-menu, .mega-menu, .menu-item ');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active-expand');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active-expand');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.closest('li').siblings('li').removeClass('active-expand');
                $this.siblings('ul').slideDown();
            }
        }
    });

    $( ".home-menu, .mega-menu, .menu-item" ).parent( "li" ).addClass( "menu-item-has-children" );
    $( ".mega-menu" ).parent( "li" ).css( "position", "static" );


/*---------------------------------------
	curency and language js
----------------------------------------- */	
	$(".current-currency").on( "click", function(){
		$(".currency-toogle").slideToggle(400);
	});
	$(".current-lang").on( "click", function(){
		$(".language-toogle").slideToggle(400);
	});	
		
/*---------------------------------------
	price range ui slider js
----------------------------------------- */		
	$( "#price-range" ).slider({
		range: true,
		min: 1,
		max: 100,
		values: [ 10, 90 ],
		slide: function( event, ui ) {
			$( "#slidevalue" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#slidevalue" ).val( "$" + $( "#price-range" ).slider( "values", 0 ) +
		" - $" + $( "#price-range" ).slider( "values", 1 ) );	
		
/*---------------------------------------
	scroll to top
----------------------------------------- */	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 250) {
			$('.bstore-scrollertop').fadeIn();
		} else {
			$('.bstore-scrollertop').fadeOut();
		}
	});
	//Click event to scroll to top
	$('.bstore-scrollertop').on( "click", function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});	
	
/*---------------------------------------
	mobile menu
----------------------------------------- */	
		$('.mobile-menu').meanmenu();	
		
/*---------------------------------------
	new  product, sale product carousel
----------------------------------------- */	
	$('.new-pro-carousel, .sale-carousel').owlCarousel({
		items : 2,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:2,
			},
			768:{
				items:3,
			},
			992:{
				items:2,
			}
		}
	});	
		
/*---------------------------------------
	featured  product, bestseller, carousel
----------------------------------------- */	
	$('.feartured-carousel, .bestseller-carousel').owlCarousel({
		items : 5,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:2,
			},
			768:{
				items:3,
			},
			992:{
				items:4,
			},
			1200:{
				items:5,
			}
		}
	});	
		
/*---------------------------------------
	related-product  carousel
----------------------------------------- */	
	$('.related-product').owlCarousel({
		items : 4,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			768:{
				items:2,
			},
			992:{
				items:3,
			},
			1200:{
				items:4,
			}
		}
	});	
		
/*---------------------------------------
	latest news carousel
----------------------------------------- */	
	$('.latest-news-carousel').owlCarousel({		
		items : 4,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			768:{
				items:2,
			},
			992:{
				items:3,
			},
			1200:{
				items:4,
			}
		}
	});	
		
/*---------------------------------------
	client carousel
----------------------------------------- */	
	$('.client-carousel').owlCarousel({
		items : 6,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:2,
			},
			768:{
				items:3,
			},
			992:{
				items:4,
			},
			1200:{
				items:6,
			}
		}
	});	

/*---------------------------------------
	home 2 left category menu
----------------------------------------- */	
	$('.category-heading').on( "click", function(){
		$('.category-menu-list').slideToggle(300);
	});	
		
/*---------------------------------------
	home 2 new product, home 2 sale product carousel
----------------------------------------- */	
	$('.home2-new-pro-carousel, .home2-sale-carousel').owlCarousel({
		items : 4,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			768:{
				items:2,
			},
			992:{
				items:3,
			},
			1200:{
				items:4,
			}
		}
	});
		
/*---------------------------------------
	sidebar best seller carousel
----------------------------------------- */
	$('.sidebar-best-seller-carousel').owlCarousel({
		items : 1,
		autoplay: false,
		dots: false,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
	});
		
/*---------------------------------------
	tab product carousel	
----------------------------------------- */	
	$('.tab-carousel').owlCarousel({
		items : 4,
		autoplay: false,
		dots: false,
		margin: 30,
		nav: true,
		navText:['<i class="fa fa-angle-left owl-prev-icon"></i>','<i class="fa fa-angle-right owl-next-icon"></i>'],
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:2,
			},
			768:{
				items:3,
			},
			992:{
				items:4,
			},
			1200:{
				items:4,
			}
		}
	});
			
/*---------------------------------------
	mainSlider
----------------------------------------- */	
	$('#mainSlider').nivoSlider({
		controlNav: true,
		 directionNav: false,
		 pauseTime: 5000,
		nextText: '<div class="slider-bolut"></div>',
		prevText: '<div class="slider-bolut"></div>'
		
	});		

/*---------------------------------------
	single product product thumbnail
----------------------------------------- */	
$('.bxslider').bxSlider({
	infiniteLoop: true,
	minSlides: 3,
	maxSlides: 3,
	slideWidth: 88,
	responsive: true,
	nextText: '<i class="fa fa-angle-left"></i>',
	prevText: '<i class="fa fa-angle-right"></i>'
});	

/*---------------------------------------
	francy box lightbox
----------------------------------------- */
new WOW().init();

/*---------------------------------------
	francy box lightbox
----------------------------------------- */	
	$(".fancybox").fancybox();	

/*-----------------------------------------
	cart plus minus button
--------------------------------------------*/	  
	 $(".cart-plus-minus-button").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	  $(".qtybutton").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find(".nhapsoluong").val();
		var maxValue = $button.parent().find(".qtybuttonmax").val();
		if ($button.text() == "+") {
		  if (parseInt(oldValue) < maxValue){
			var newVal = parseInt(oldValue) + 1;
		  }else{
			var newVal = maxValue;
			alert("Số lượng đã đạt cực hạn");
		  }
		} else {
		   // Don't allow decrementing below zero
		  if (oldValue > 1) {
			var newVal = parseInt(oldValue) - 1;
			} else {
			newVal = 1;
			alert("Số lượng đã tối thiểu!");
		  }
		  }
		 
		$button.parent().find(".nhapsoluong").val(newVal);
		
	  });


	/**********************
	* Contact Form
	***********************/

	var $form = $('#contact-form');
	var $formMessages = $('.form__output');
	// Set up an event listener for the contact form.
	$form.submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(this).serialize();
		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $($form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$formMessages.removeClass('error');
			$formMessages.addClass('success');

			// Set the message text.
			$formMessages.text(response);

			// Clear the form.
			$('#contact-form input,#contact-form textarea').val('');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$formMessages.removeClass('success');
			$formMessages.addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$formMessages.text(data.responseText);
			} else {
				$formMessages.text('Oops! An error occured and your message could not be sent.');
			}
		});
	});
		
}); 

})(jQuery);	