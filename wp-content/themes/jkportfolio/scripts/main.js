/*
	Title:		main.js
	Author:		Jaydon Kerr
	Date:		April 3rd, 2020
	Desc:		The main JavaScript file for JaydonKerr.me website portfolio
*/
/*----------------------------------------------------------------------------------
Name:           initializeElement
Description:    initialize image slideshow parent elements
Arguments:      theElement (string) - the 
Return:         None
------------------------------------------------------------------------------------*/
function initializeElement(iteration, type) 
{
	initializeImages("#" + type + iteration, "#" + type + iteration + "-img1", function(indexMax)
		{
			var localNum = iteration;
			var index = 1;
			// add event listener to left button
			jQuery("#" + type + localNum + "-left-btn").on("click", function()
				{
					// assign index the new value from processIndex
					index = processLeftBtn("#" + type + localNum + "-img", index, indexMax);
				});
			// add event listener to right button
			jQuery("#" + type + localNum + "-right-btn").on("click", function()
				{
					// assign index the new value from processIndex
					index = processRightBtn("#" + type + localNum +"-img", index, indexMax);
				});
		});
}

/*----------------------------------------------------------------------------------
Name:           initializeImages
Description:    initialize events for the images' slideshow
Arguments:      theElement (string) - the element to be initialized
				firstElement (string) - the first image to be shown
				callback (function) - the function to run after complete
Return:         None
------------------------------------------------------------------------------------*/
function initializeImages(theElement, firstElement, callback) 
{
	// find the amount of images
	var indexMax = jQuery(theElement).children("img").length;
	
	// Hide all image elements inside slideshow
	jQuery(theElement).children("img").css("display", "none");
	// show only the first image
	jQuery(firstElement).css("display", "block");

	callback(indexMax);
}

/*----------------------------------------------------------------------------------
Name:           hideElement
Description:    hide the provided element
Arguments:      theElement (string) - the element to be hidden
Return:         None
------------------------------------------------------------------------------------*/
function hideElement(theElement)
{
	jQuery(theElement).css("display", "none");
}

/*----------------------------------------------------------------------------------
Name:           showElement
Description:    show the provided element
Arguments:      theElement (string) - the element to be shown
Return:         None
------------------------------------------------------------------------------------*/
function showElement(theElement)
{
	jQuery(theElement).css("display", "block");
}

/*----------------------------------------------------------------------------------
Name:           processLeftBtn
Description:    process the index and hide/show images for the left btn
Arguments:      theElement (string) - the element to be manipulated
				index (int) - the current image index
				indexMax - the amount of images
Return:         index
------------------------------------------------------------------------------------*/
function processLeftBtn(theElement, index, indexMax)
{
	// Hide the current image
	hideElement(theElement + index);
	// Decrement index if not first image
	// check if index is on first image
	if (index <= 1)
	{
		index = indexMax;
	}
	else
	{
		index--;
	}
	// Show new image
	showElement(theElement + index);
	// return the index
	return index;
}

/*----------------------------------------------------------------------------------
Name:           processRightBtn
Description:    process the index and hide/show images for the right btn
Arguments:      theElement (string) - the element to be manipulated
				index (int) - the current image index
				indexMax - the amount of images
Return:         index
------------------------------------------------------------------------------------*/
function processRightBtn(theElement, index, indexMax)
{
	// Hide the current image
	hideElement(theElement + index);
	// Increment index if not last image
	// Check if index is last image
	if (index >= indexMax)
	{
		index = 1;
	}
	else
	{
		index++;
	}
	// Show new image
	showElement(theElement + index);
	// return the index
	return index;
}

jQuery(document).ready(function() 
{
	// TODO consider using foreach loop here
	initializeElement(1, "website");
	initializeElement(2, "website");

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

});