$(document).ready(function() {
	function bindNavbar() {
		if ($(window).width() > 768) {
			$('.navbar-default .dropdown').on('mouseover', function(){
				$('.dropdown-toggle', this).next('.dropdown-menu').show();
			}).on('mouseout', function(){
				$('.dropdown-toggle', this).next('.dropdown-menu').hide();
			});
			
			$('.dropdown-toggle').click(function() {
				if ($(this).next('.dropdown-menu').is(':visible')) {
					window.location = $(this).attr('href');
				}
			});
		}
		else {
			$('.navbar-default .dropdown').off('mouseover').off('mouseout');
		}
	}
	
	$(window).resize(function() {
		bindNavbar();
	});
	
	bindNavbar();
});


$(document).ready(function() {
    "use strict";

    $('body').on('click', '.scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 80)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $(".site-search").on('click', function() {
        $(".search-big").addClass("active");
    });

    $(".sb-close").on('click', function() {
        $(".search-big").removeClass("active");
    });

    $('.quote-carousel').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });

    $('.vlist-carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });

    $("#playListContainer").audioControls({
        autoPlay: false,
        timer: 'increment',
        onAudioChange: function(response) {
            $('.songPlay').text(response.title + ' ...');
        }
    });

    $(".volume").on('click', function() {
        $(".bar").toggleClass("volume-hidden");
    });

    $('#tweecool').tweecool({
        username: 'tweecool',
        profile_image: false,
        limit: 2
    });

    $('#tweecool2').tweecool({
        username: 'tweecool',
        profile_image: false,
        limit: 2
    });

    var endDate = "August 20, 2016";
    $('.countdown.styled').countdown({
        date: endDate,
        render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
        }
    });

    new WOW().init();

    $(window).scroll(function() {
        var value = $(this).scrollTop();
        if (value > 250)
            $(".header-scroll").addClass("active");
        else
            $(".header-scroll").removeClass("active");
    });

    $('.swipebox-video').swipebox();

});
