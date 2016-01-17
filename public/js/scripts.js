(function($) {
	$(document).ready(function() {
		"use strict";
		
		
		//Go to top button
		var offset = 300,
		offset_opacity = 1200,
		scroll_top_duration = 700,
		$back_to_top = $('.cd-top');
		
		$(window).scroll(function(){
			( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
			if( $(this).scrollTop() > offset_opacity ) { 
				$back_to_top.addClass('cd-fade-out');
			}
		});
		
		
		// Counter for coming soon
		$("#countdown").countdown({
			date: "8 September 2020 09:00:00", // Change this to your desired date to countdown to
			format: "on"
		});
		  
		  
		  
		
		// Counter script
		$('.counter').counterUp({
            delay: 10,
            time: 1000
        });
		
		
		// Price range
		$("#ex2").slider({});
		
		

		// Smooth scroll to top
		$back_to_top.on('click', function(event){
			event.preventDefault();
			$('body,html').animate({
				scrollTop: 0 ,
				}, scroll_top_duration
			);
		});
		
		
	
		// Fancybox
			$('.fancybox').fancybox({
			  helpers: {
				overlay: {
				  locked: false
				}
			  }
			});
		
		
		
		
		// Gallery Carousel
		$(".owl-gallery").owlCarousel({
			  navigation : false,
			  slideSpeed : 300,
			  paginationSpeed : 400,
			  singleItem : true,
			  autoPlay:true,
			  pagination:true
      	});
		
		
		
		// Testimonials Carousel
		$(".owl-testimonials").owlCarousel({
			  navigation : true,
			  slideSpeed : 300,
			  paginationSpeed : 400,
			  singleItem : true,
			  pagination:false,
			  autoPlay:true,
      	});
	  
	  	// Testimonials Carousel
		$(".owl-news").owlCarousel({
	
		  	  navigation : true,
			  slideSpeed : 300,
			  paginationSpeed : 400,
			  singleItem : true,
			  pagination:false,
			  autoPlay:true,
		});
		
		
		
		// Search bar toogle
		$(".search-btn").click(function() {
		$(".search-bar").toggleClass("show-me");
		});
		$(".close-button").click(function() {
		$(".search-bar").removeClass("show-me");
		});
		
		
		
		// Side menu
		$(".side-menu").click(function() {
		$(".side-box").toggleClass("show-me");
		$(".body-left").toggleClass("slide");
		});
				
		$(".close-sidebar").click(function() {
		$(".side-box").removeClass("show-me");
		$(".body-left").removeClass("slide");
		});
				
		// Parallax effect
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 0,
			responsive:true
		});
	
	
		// Page transition
		$('.transition').on('click', function(e) {
		$('.transition-overlay').toggleClass("show");
		});
			
			
		// Transition delay
		$('.transition').click(function (e) {
			e.preventDefault();                  
			var goTo = this.getAttribute("href"); 
			 
	
		setTimeout(function(){
			window.location = goTo;
			},1000);       
			});
				
	
	
	}); // end document ready
			
		
		
	
		// Masonry Portfolio
		$(function(){
			var $container = $('.gallery .masonry-grids, .gallery .small-grids ');
			$container.imagesLoaded( function(){
			$container.masonry({
			   itemSelector : '.gallery .masonry-grids li, .gallery .small-grids li'
			 });
			});
			});
	
	
	
		// Isotope works filter
		var $container = $('.projects');
			$container.isotope({
			filter: '.1',
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
			}
		});
	 
		$('.filter li a').click(function(){
		$('.filter li .current').removeClass('current');
		$(this).addClass('current');
		 
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
			}
		});
		return false;
		}); 


		
		
		// Wow animations
		wow = new WOW(
		{
			animateClass: 'animated',
			offset:       150
		}
		);
		wow.init();
	
	
		// Fixed Navigation
		$(window).on("scroll touchmove", function () {
		$('#nav').toggleClass('fixed-nav', $(document).scrollTop() > 46);
		$('.navbar-brand img').toggleClass('fixed-logo', $(document).scrollTop() > 46);
		
		});	
		
		
		// Top phone number rotate
		(function() {
			var quotes = $("header .top-bar h5 b");
			var quoteIndex = -1;
			
			function showNextQuote() {
				++quoteIndex;
				quotes.eq(quoteIndex % quotes.length)
					.fadeIn(300)
					.delay(4000)
					.fadeOut(300, showNextQuote);
			}
			
			showNextQuote();
			
		})();


})(jQuery);