/*
Author       : Dreamguys
Template Name: Pulltail - Bootstrap Template
Version      : 1.0
*/
var calendarElements=[], timeElements=[];
(function($) {
	"use strict";
	
	var $slimScrolls = $('.slimscroll');
	var $wrapper = $('.main-wrapper');
	
	// Sidebar
	
	if($(window).width() <= 991) {
		var Sidemenu = function() {
			this.$menuItem = $('.main-nav a');
		};

		function init() {
			var $this = Sidemenu;
			$('.main-nav a').on('click', function(e) {
				if($(this).parent().hasClass('has-submenu')) {
					e.preventDefault();
				}
				if(!$(this).hasClass('submenu')) {
					$('ul', $(this).parents('ul:first')).slideUp(350);
					$('a', $(this).parents('ul:first')).removeClass('submenu');
					$(this).next('ul').slideDown(350);
					$(this).addClass('submenu');
				} else if($(this).hasClass('submenu')) {
					$(this).removeClass('submenu');
					$(this).next('ul').slideUp(350);
				}
			});
		}

	// Sidebar Initiate
	
	init();
	}

	// Mobile menu sidebar overlay
	
	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function() {
		$('main-wrapper').toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		return false;
	});	
	
	$(document).on('click', '.sidebar-overlay', function() {
		$('html').removeClass('menu-opened');
		$(this).removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});
	
	$(document).on('click', '#menu_close', function() {
		$('html').removeClass('menu-opened');
		$('.sidebar-overlay').removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});

	// Select 2
	
	if ($('.select').length > 0) {
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}
	
	if ($('.category-select').length > 0) {
		$(".category-select").select2({
			placeholder: "Choose Category",
			allowClear: false
		});
	}
	
	if ($('.loc-select').length > 0) {
		$(".loc-select").select2({
			placeholder: "Choose Location",
			allowClear: false
		});
	}
	
	if ($('.region select').length > 0) {
		$(".region select").select2({
			placeholder: "Region",
			allowClear: false
		});
	}
		
	// Fade in Scroll 
	
	if($('.main-wrapper .aos').length>0){
		AOS.init({
			duration:1200,
			once:true
		});
	}
	
	// Datepicker	
	if($('.datetimepicker').length > 0 ){
		$('.datetimepicker').each(function(indx, el){
			calendarElements[indx]=$(el).datetimepicker({
				format: 'MM.DD.YYYY',
				icons: {
					up: "fas fa-angle-up",
					down: "fas fa-angle-down",
					next: 'fas fa-angle-right',
					previous: 'fas fa-angle-left'
				}
			});
		});
	}

	// Timepicker

	if($('.timepicker').length > 0) {
		$('.timepicker').each(function(indx, el){
			timeElements[indx]=$(el).datetimepicker({
				format: "hh:mm A",
				locale: "en",
				icons: {
					up: "fa fa-angle-up",
					down: "fa fa-angle-down",
					next: 'fa fa-angle-right',
					previous: 'fa fa-angle-left'
				}
			});
		});
	}

	
	// Scroll Down
	
	$('.price-down').on('click', function() {
		$('html, body').animate({ scrollTop: $("#price").offset().top - 85}, 150); 
	});
	
	//Stick Sidebar
	
	if ($(window).width() > 767) {
		if($('.theiaStickySidebar').length > 0) {
			$('.theiaStickySidebar').theiaStickySidebar({
			  // Settings
			  additionalMarginTop: 30
			});
		}
	}
	
    //Range Slider
	
	if($('.input-range').length > 0) {
		$(".input-range").ionRangeSlider({
			type: "single",
			grid: true,
			min: 0,
			max: 100,
			from: 50,
			to: 100       
		});
	}
	
	$('.input-range').on('input', function () {
        $('.demo span').html(this.value);
    });
	
	//Show Filter
	
	$(".btn.filterbtn").on('click', function() {
		  $(".showfilter").toggleClass("filter-open");
	});		
	
	// Password Eye

	$('.toggle-password').on('click', function() {
		$(this).toggleClass("feather-eye feather-eye-off");
		var input = $(".pass-input");
		if (input.attr("type") === "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});	
	
	// Most Popular Cartypes Slider

	if($('.popular-cartype-slider').length > 0) {
		$('.popular-cartype-slider').owlCarousel({
			loop:true,
			margin:24,
			nav:true,
			dots: false,
			autoplay:true,
			smartSpeed: 2000,
			navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				
				550:{
					items:1
				},
				700:{
					items:3
				},
				1000:{
					items:4
				},
				1200:{
					items:5
				}
			}
		})
	}

	// Recommended Car Rental Deals
	
	if($('.rental-deal-slider').length > 0) {
		$('.rental-deal-slider').owlCarousel({
			loop:true,
			margin:24,
			nav:true,
			dots: false,
			autoplay:true,
			smartSpeed: 2000,
			navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				
				550:{
					items:1
				},
				700:{
					items:2
				},
				1000:{
					items:3
				}
			}
		})
	}

	//What People Say Slider
	
	if($('.about-testimonials').length > 0) {
		$('.about-testimonials').owlCarousel({
			loop:true,
			margin:24,
			nav:false,
			dots: true,
			autoplay:true,
			smartSpeed: 2000,
			navText : ["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				
				550:{
					items:1
				},
				700:{
					items:2
				},
				1000:{
					items:2
				}
			}
		})
	}

	// Slick Testimonial Two

	if ($('.detail-bigimg').length > 0) {
		$('.detail-bigimg').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			asNavFor: '.slider-nav-thumbnails'
		});
	}

	if ($('.slider-nav-thumbnails').length > 0) {
		$('.slider-nav-thumbnails').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.detail-bigimg',
			dots: false,
			arrows: false,
			centerMode: false,
			focusOnSelect: true

		});
	}	

	if($('.car-details-slider').length > 0 ){
		$('.car-details-slider').owlCarousel({
			items:4,
			margin:24,
			nav:true,
			dots:false,
			rtl: false,
			navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
			responsiveClass:true,
			responsive:{
				0:{
					items:1
				},
				768:{
					items:2
				},
				1170:{
					items:3,
					loop:true
				},
				1200:{
					items:3,
					loop:true
				}
			}
		});	
	}

	// Select Favourite
	
	$('.fav-icon').on('click', function() {
		$(this).toggleClass('selected');
	});

	// JQuery counterUp

	if($('.customer-count .counterUp').length > 0) {
		$('.customer-count .counterUp, h4 span').counterUp({
            delay: 15,
            time: 1500
        });
	}
	
	if($('#listing').length)
		{
		var block=$('#listing .row').eq(0);
		$(block).empty(); $(block).parent().find('.blog-pagination').remove();
		$.ajax({
				url: 'assets/api/trailers.php',
				success: function(response){
					if(response.data.trailers)
						{
						for(var i=0; i<response.data.trailers.length; i++)
							{
							var element=response.data.trailers[i];
							var photo = false;
							if(element.photos) 
								photo=element.photos[0];
							if(!photo) continue;
							$(block).append('<div class="col-xl-6 col-lg-6 col-md-6 col-12">\
								<div class="listing-item">									\
									<div class="listing-img">\
										<a href="listing-details.html">\
											<img src="'+(photo ? photo.size400.url : '')+'" class="img-fluid" alt="">\
										</a>\
										<div class="fav-item">\
											<span class="featured-text">'+(element.make ? element.make + ' ' : '')+(element.year ? element.year : '')+'</span>\
											<a href="javascript:void(0)" class="fav-icon">\
												<i class="feather-heart"></i>\
											</a>										\
										</div>	\
									</div>										\
									<div class="listing-content">\
										<div class="listing-features">\
											<a href="javascript:void(0)" class="author-img">\
												<img src="assets/img/profiles/profile.png" alt="author">\
											</a>\
											<h3 class="listing-title">\
												<a href="listing-details.html">'+(element.make ? element.make + ' ' : '')+(element.year ? element.year : '')+'</a>\
											</h3>																	  \
											<div class="list-rating">							\
												<i class="fas fa-star filled"></i>\
												<i class="fas fa-star filled"></i>\
												<i class="fas fa-star filled"></i>\
												<i class="fas fa-star filled"></i>\
												<i class="fas fa-star filled"></i>\
												<span>(5.0)</span>\
											</div>\
										</div> \
										<div class="listing-details-group">\
											<ul>\
												<li>\
													<span><img src="assets/img/icons/car-parts-05.svg" alt="Auto"></span>\
													<p>Auto</p>\
												</li>\
												<li>\
													<span><img src="assets/img/icons/car-parts-02.svg" alt="10 KM"></span>\
													<p>10 KM</p>\
												</li>\
												<li>\
													<span><img src="assets/img/icons/car-parts-03.svg" alt="Petrol"></span>\
													<p>Petrol</p>\
												</li>\
											</ul>	\
											<ul>\
												<li>\
													<span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>\
													<p>Power</p>\
												</li>\
												<li>\
													<span><img src="assets/img/icons/car-parts-05.svg" alt="'+(element.year ? element.year : '')+'"></span>\
													<p>'+(element.year ? element.year : '')+'</p>	\
												</li>\
												<li>\
													<span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>\
													<p>5 Persons</p>\
												</li>\
											</ul>\
										</div>																 \
										<div class="listing-location-details">\
											<div class="listing-price">\
												<span><i class="feather-map-pin"></i></span>'+(element.address && element.address.city ? element.address.city + ' ' : '')+'\
											</div>\
											<div class="listing-price">\
												<h6>$'+(element.rentPrice && element.rentPrice.perDay ? element.rentPrice.perDay + ' ' : '')+' <span>/ Day</span></h6>\
											</div>\
										</div>\
										<div class="listing-button">\
											<a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>\
										</div>	\
									</div>\
								</div>		 \
							</div>');
							}
						}
				}
			}, 'json');
		}
	
	$(calendarElements[0]).data("DateTimePicker").date(new Date());
	$(timeElements[0]).data("DateTimePicker").date(new Date());
	setReturnDateTime();
	
	
	$('select[name=user_profile_color_1]').change(function(){
		
		setReturnDateTime();
		
	});
	
	$(calendarElements[0]).on("dp.change", function(e) {
		setReturnDateTime();
	});
	
	$(timeElements[0]).on("dp.change", function(e) {
		setReturnDateTime();
	});
	
	function setReturnDateTime()
		{
		var rentalType = $('select[name=user_profile_color_1] option:selected').attr('value'), 
			returnDate, returnTime,
			pickupDate = $(calendarElements[0]).data("DateTimePicker").date();
		returnDate = new Date(pickupDate);
		returnTime=new Date($(timeElements[0]).data("DateTimePicker").date());
		if (rentalType == "1") {returnDate.setDate(returnDate.getDate() + 1);returnTime.setDate(returnTime.getDate() + 1);}
		if (rentalType == "2") {returnDate.setMonth(returnDate.getMonth() + 1);returnTime.setMonth(returnTime.getMonth() + 1);}
		if (rentalType == "3") {returnDate.setFullYear(returnDate.getFullYear() + 1);returnTime.setFullYear(returnTime.getFullYear() + 1);}
		$(calendarElements[1]).data("DateTimePicker").date(returnDate);
		$(timeElements[1]).data("DateTimePicker").date(returnTime);
		}
		
	
	
})(jQuery);



	