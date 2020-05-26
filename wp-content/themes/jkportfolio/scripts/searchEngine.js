/*
Program:		searchEngine.js
Author:			Jaydon Kerr
Date:			June 7, 2019
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





	// listen for clicks on CSESearch
	// $("#CSESearch").on("click", function()
	// 	{
	// 		if (!searchEngineActive)
	// 		{
	// 			searchEngineActive = true;

	// 			console.log("clicking works!");
	// 			//get the search term
	// 			var searchTerm = $("#searchEngineInput").val();

	// 			//search for it
	// 			CSESearch(searchTerm);
	// 		}
	// 		else
	// 		{
	// 			console.log("Engine search has not finished yet.");
	// 		}
			
	// 	});

	// //setup before functions
	// var typingTimer;                //timer identifier
	// var doneTypingInterval = 5000;  //time in ms (5 seconds)

	// //on keyup, start the countdown
	// $('#myInput').keyup(function(){
	//     clearTimeout(typingTimer);
	//     if ($('#myInput').val()) {
	//         typingTimer = setTimeout(doneTyping, doneTypingInterval);
	//     }
	// });

	// //user is "finished typing," do something
	// function doneTyping () {
	//     //do something
	// }
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
		key: "AIzaSyDbIR5r6ZJvHpHDBS5IF6IOmXHL0jVBqqo",
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
			// title as link
			var title = "<a href='" + object.link + "'>" + object.title + "</a>";
			// container
			jQuery("#output").append("<div>" + title + "</div>");
			// link and title
			// $("#engine-result-" + i).append("<a href='" + object.link + "'><h3>" + object.title + "</h3></a>");
			// // image preview
			// $("#engine-result-" + i).append("<img src='" + object.pagemap.cse_thumbnail[0].src + "'>");
			// // description
			// $("#engine-result-" + i).append("<p>" + object.htmlSnippet + "</p><br>");
		});
}