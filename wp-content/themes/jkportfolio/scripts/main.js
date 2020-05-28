/*
	Title:		main.js
	Author:		Jaydon Kerr
	Date:		April 3rd, 2020
	Desc:		The main JavaScript file for JaydonKerr.me website portfolio
*/
jQuery(document).ready(function() 
{
	// jCarosel jQuery plugin initialization
	(function($) {
	    $(function() {
	        $('.jcarousel').jcarousel();

	        $('.jcarousel-control-prev')
	            .on('jcarouselcontrol:active', function() {
	                $(this).removeClass('inactive');
	            })
	            .on('jcarouselcontrol:inactive', function() {
	                $(this).addClass('inactive');
	            })
	            .jcarouselControl({
	                target: '-=1'
	            });

	        $('.jcarousel-control-next')
	            .on('jcarouselcontrol:active', function() {
	                $(this).removeClass('inactive');
	            })
	            .on('jcarouselcontrol:inactive', function() {
	                $(this).addClass('inactive');
	            })
	            .jcarouselControl({
	                target: '+=1'
	            });

	        $('.jcarousel-pagination')
	            .on('jcarouselpagination:active', 'a', function() {
	                $(this).addClass('active');
	            })
	            .on('jcarouselpagination:inactive', 'a', function() {
	                $(this).removeClass('active');
	            })
	            .jcarouselPagination();
	    });
	})(jQuery);

	
	// if page is on javascript post type
	var url = window.location.pathname;
	if (url.indexOf("javascript") >= 0) 
	{
		// add event listener to #code-output
		jQuery("#code-btn").on("click", function()
			{
				jQuery("#code-output").fadeToggle();
			});
	}
	else
	{
		// do nothing
	}
});