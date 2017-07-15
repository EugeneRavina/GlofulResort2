jQuery(function($) {'use strict',



	//Initiat WOW JS
	new WOW().init();

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInExpo');
        event.preventDefault();
    });
});

$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});



});
