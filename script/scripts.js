	(function($) {
		"use strict";
		$(window).scroll(function () {
            if ($(document).scrollTop() <= 70) {
                $('#header-full').removeClass('follow');
                $("#logo img").attr('src',"images/logo-retina.png");
                $("#logo img").attr('data-retina',"images/logo-retina.png");
            } else {
                $('#header-full').addClass('follow');
                $("#logo img").attr('src',"images/logo-dark-retina.png");
                $("#logo img").attr('data-retina',"images/logo-dark-retina.png");
            }
            if ($(document).scrollTop() <= 500) {
                $('#sub-nav').removeClass('follow');
            } else {
                $('#sub-nav').addClass('follow');
            }
        });
        $(window).scroll(function(i){
            var scrollVar = $(window).scrollTop();
            $('#video-container').css({'opacity':( 600-scrollVar )/600});
            $('#slideshow').css({'opacity':( 600-scrollVar )/600});
            $('#main-header').css({'opacity':( 600-scrollVar )/600});
            $('#hero-container').css({'opacity':( 600-scrollVar )/600});
        });
        $('#subtitle-intro-home').delay(700).animate({
         'opacity' : '1'}, { duration: 700, easing: 'easeOutSine' });
        $('#title-intro-home').delay(1000).animate({
         'opacity' : '1'}, { duration: 700, easing: 'swing' });
        $('#intro-header p').delay(1300).animate({
         'opacity' : '1'}, { duration: 700, easing: 'swing' });
        $('#mce-EMAIL').delay(1600).animate({
         'opacity' : '1'}, { duration: 500, easing: 'easeOutSine' });
        $('#mc-embedded-subscribe').delay(1600).animate({
         'opacity' : '1'}, { duration: 500, easing: 'easeOutSine' });
        $('#button-intro').delay(1600).animate({
         'opacity' : '1'}, { duration: 500, easing: 'easeOutSine' });
        $('#main-title').delay(700).animate({
         'opacity' : '1'}, { duration: 700, easing: 'easeOutSine' });
        $('#hero-container img').delay(1000).animate({
         'opacity' : '1'}, { duration: 700, easing: 'easeOutSine' });
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            default_width: 600,
            default_height: 420,
            social_tools: false
        });
        $('#slideshow').flexslider({
            animation: "slide",
            pauseOnAction: true,
            animationLoop: false
        });
        $('#slideshow-testimonial').flexslider({
            animation: "slide",
            pauseOnAction: true,
            animationLoop: false
        });
        $('#slideshow-team').flexslider({
            animation: "slide",
            slideshow: false,
            pauseOnAction: true,
            animationLoop: false
        });

        var offset = 220;
        var duration = 500;
        $(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('#back-top').addClass('active');
            } else {
                jQuery('#back-top').removeClass('active');
            }
        });
        $('#tabs-1').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 500 } });
        $('#tabs-career').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 500 } });
        $('#back-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        });
        $( ".accordion" ).accordion({
            heightStyle: "content"
        });
        $('#nav-service').onePageNav(); 
        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });
        $('img[data-retina]').retina({checkIfImageExists: true});
        $(".open-menu").click(function(){
            $("body").addClass("no-move");
        });
        $(".close-menu, .close-menu-big").click(function(){
            $("body").removeClass("no-move");
        });
	})(jQuery);