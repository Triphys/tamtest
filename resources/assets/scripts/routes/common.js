/* eslint-disable */
import Headroom from 'headroom.js';
import { gsap } from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";
import SmoothScroll from 'smooth-scroll';

gsap.registerPlugin(ScrollTrigger);

export default {
	init() {
		//JavaScript to be fired on all pages

		//Sticky header transform
		$(document).ready(function(){
			$(window).scroll(function(){
  			var sticky = $('.mainNav'),
      	scroll = $(window).scrollTop();
  			if (scroll >= 100) {
  				sticky.addClass('scroll');
  			} else {
  				sticky.removeClass('scroll');
  			}
			});
		});

		// Set height for header on scroll when toggled
		var scrolled = false;
		$(window).scroll(function() {
    	if($(window).scrollTop() > 100 && scrolled == false){
				if ($(".headerContent--nav_primary .menu-item-has-children > a").parent().hasClass("toggled")) {
  				var $oheight = $('.toggled').find('.sub-menu').height();
					$('.headerBorder').height( 98 + $oheight );
  			}
      	scrolled = true;
    	} else if($(window).scrollTop() == 0) {
    		$(".headerBorder").css("height","");
      	scrolled = false;
    	}
		});


		//Search field
		$(document).ready(function(){
			$( ".headerContent--search" ).click(function() {
				event.preventDefault();
				$('.headerContent--search').toggleClass('toggled');
				$('.mainNav').toggleClass('search');
				$('.headerContent--searchForm').toggleClass('active');
				$('#menu-primar-meny').toggleClass('hidden');
				$('#menu-primary-menu').toggleClass('hidden');
				$('.headerContent--lang').toggleClass('hidden');
				$('.headerContent--searchContainer').toggleClass('active');
				$('.searchOverlay').toggleClass('active');
				$("#s").focus();
  		});
		});

		//Header menu
		$(document).ready(function(){
			$( ".headerContent--menu" ).click(function() {
				event.preventDefault();
				$('body').css('overflow', 'hidden');
				$('.headerContent--overlay').addClass('active');
  		});
  		$( ".headerContent--close" ).click(function() {
  			event.preventDefault();
				$('body').css('overflow', 'auto');
				$('.headerContent--overlay').removeClass('active');
			});
		});

		//Newsletter
		$(document).ready(function(){
			$( ".newsletterSignup" ).click(function() {
				event.preventDefault();
				$('body').css('overflow', 'hidden');
				$('.newsletterContent').addClass('active');
  		});
  		$( ".newsletterContent--close" ).click(function() {
  			event.preventDefault();
				$('body').css('overflow', 'auto');
				$('.newsletterContent').removeClass('active');
			});
		});

		//Toggle dropdown in main menu
		$(document).ready(function(){
			$(".headerContent--nav_primary .menu-item-has-children > a").on("click", function() {
				event.preventDefault();
				if ($(this).parent().hasClass('toggled')){
					$(this).parent().toggleClass("toggled");
					// Remove height when closing menu
					$(".headerBorder").css("height","");
  			} else {
  				$('.headerContent--nav_primary').find('.toggled').removeClass('toggled');
  				$(this).parent().toggleClass("toggled");
  				// Remove old menu height
  				$(".headerBorder").css("height","");
  				if ($(".mainNav").hasClass("scroll")) {
  					// Add menu height
  					var $height = $(this).next('.sub-menu').height();
						$('.headerBorder').height( $('.headerBorder').height() + $height );	
					}
  			}
			});
		});

		// Filter for arkiv
		$(document).ready(function(){
			var $items = $('.item');
			var $btns = $('.filter-btn').click(function() {
				event.preventDefault();
  			if (this.id == 'all') {
    			$items.show();
  			} else {
    			var $el = $('.' + this.id).show();
    			$items.not($el).hide();
  			}
  			$btns.removeClass('active');
  			$(this).addClass('active');
			})
		});

		//Toggle dropdown in mobile menu
		$(document).ready(function(){
			$(".headerContent--overlay .menu-item-has-children > a").on("click", function() {
				event.preventDefault();
				if ($(this).parent().hasClass('toggled')){
					$(this).parent().toggleClass("toggled");
  			} else {
  				$('.headerContent--overlay').find('.toggled').removeClass('toggled');
  				$(this).parent().toggleClass("toggled");
  			}
			});
		});

	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
/* eslint-enable */


