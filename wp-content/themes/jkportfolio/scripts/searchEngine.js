/*
Program:		searchEngine.js
Author:			Jaydon Kerr
Date-Created:	June 7, 2019
Date-Updated: 	May 27, 2020
Description:	uses the google CSE to create a custom search engine for amazon.
*/
// cant use jQuery $ as it causes issues with WordPress. Must use jQuery function instead
// global variable to tell if search is active
var searchEngineActive = false;
// wait for the html document to be fully loaded and ready
jQuery(document).ready(function()
{	
	// debuging
	console.log("searchEngine.js has loaded!");

	// timer variable
	var typingTimer;
	// how long to after the user is done typing
	var doneTypingInterval = 2000;
	// listen for value change on #userInput
	jQuery("#userInput").on("change", function()
		{
			// get the #userInput value
			var usrInpt = jQuery("#userInput").val();

			// check if #userInput is empty
			if (usrInpt == "")
			{
				// debugging
				console.log("String is empty");
			}
			else
			{
				// clear the previous timer if it exists
				clearTimeout(typingTimer);
				// set a new timer
				typingTimer = setTimeout(onTimeout(usrInpt), doneTypingInterval);
			}	
		});
});
/*--------------------------------------------------------------------
Name:	onTimeout
Desc:	searches for the user input after the timer times out
Para:	usrInpt (string)
Retn:	none
--------------------------------------------------------------------*/
function onTimeout(usrInpt)
{
	// check if the search engine is not currently active
	if (!searchEngineActive) 
	{
		// set searchEngineActive to active to avoid overlapping requests
		searchEngineActive = true;
		// fade out and empty the container
		jQuery("#output").fadeOut();
		jQuery("#output").empty();

		// search the CSE for the searchQuery
		CSESearch(usrInpt);
	}
	else
	{
		// debugging
		console.log("Search engine is active!")
	}
}

/*--------------------------------------------------------------------
Name:	CSESearch
Desc:	searches using the searchEngine based on the users inputted search term
Para:	searchTerm (string)
Retn:	none
--------------------------------------------------------------------*/
function CSESearch(searchTerm)
{
	// CSE search settings
	var settings =
	{
		cx: "003901611926032306192:efwes0ycd_4",
		q: searchTerm,
		key: "AIzaSyA6ki6U048R79Vkh7-43d4rXiLwztNs8pQ",
		safe: "active",
		num: 3, 
	}
	// use google API and pass the settings
	jQuery.getJSON("https://www.googleapis.com/customsearch/v1", settings, function(response)
		{	
			// debugging
			console.log(response);
			// pass the response to CSEDisplay
			CSEDisplay(response);
		});
}

/*--------------------------------------------------------------------
Name:	CSEDisplay
Desc:	displays the searchEngine results on the page
Para:	response (JSON obj)
Retn:	none
--------------------------------------------------------------------*/
function CSEDisplay(response)
{
	// search engine is no longer active
	searchEngineActive = false;

	// ouput each item recieved
	jQuery.each(response.items, function(i, object)
		{
			var title = "<a class='cse__title' href='" + object.link + "'>" + object.title + "</a>";
			var image = "<img class='cse__img' src='" + object.pagemap.cse_thumbnail[0].src + "'>";
			var description = "<p class='cse__desc'>" + object.htmlSnippet + "</p>";

			// open container and add content
			jQuery("#output").append("<div class='cse'>" + image + title + description + "</div>");

			// display the container
			jQuery("#output").fadeIn();
		});
}