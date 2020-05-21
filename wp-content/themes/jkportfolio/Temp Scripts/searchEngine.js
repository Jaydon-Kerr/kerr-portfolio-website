/*
Program:		searchEngine.js
Author:			Jaydon Kerr
Date:			June 7, 2019
Description:	uses the google CSE to create a custom search engine for amazon.
*/

//global variable to tell if search is active
var searchEngineActive = false;

$(document).ready(function()
{	
	// debuging
	console.log("searchEngine.js has loaded!");

	// listen for clicks on searchEngineSearch
	$("#searchEngineSearch").on("click", function()
		{
			if (!searchEngineActive)
			{
				searchEngineActive = true;

				console.log("clicking works!");
				//get the search term
				var searchTerm = $("#searchEngineInput").val();

				//search for it
				searchEngineSearch(searchTerm);
			}
			else
			{
				console.log("Engine search has not finished yet.");
			}
			
		});

	// listen for enter key press on txtInput
	// $("#searchEngineInput").on("keypress", function(event)
	// 	{
	// 		var keycode = event.which;

	// 		if (keycode == 13) 
	// 		{
	// 			event.preventDefault();

	// 			if (!searchEngineActive) 
	// 			{
	// 				searchEngineActive = true;

	// 				var searchTerm = $("#searchEngineInput").val();

	// 				searchEngineSearch(searchTerm);
	// 			}
	// 			else
	// 			{
	// 				console.log("Engine search has not finished yet.");
	// 			}
	// 		}
	// 	});
	//listen for on change on usrInput
	var typingTimer;
	var doneTypingInterval = 5000;

	$("").on("change", function ()
		{
			clearTimeout(typingTimer);
			typingTimer = setTimeout(function() {console.log("timer out!")}, doneTypingInterval);
		});




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
Name:	searchEngineSearch
Desc:	searches using the searchEngine based on the users inputted search term
Para:	searchTerm (string)
Retn:	none
--------------------------------------------------------------------*/
function searchEngineSearch(searchTerm)
{
	var settings =
	{
		cx: "003901611926032306192:efwes0ycd_4",
		q: searchTerm,
		key: "AIzaSyDbIR5r6ZJvHpHDBS5IF6IOmXHL0jVBqqo",
		safe: "active",
		num: 5, 
	}
	$.getJSON("https://www.googleapis.com/customsearch/v1", settings, function(response)
		{
			console.log(response);
			searchEngineDisplay(response);
		});
}

/*--------------------------------------------------------------------
Name:	searchEngineDisplay
Desc:	displays the searchEngine results on the page
Para:	response (JSON obj)
Retn:	none
--------------------------------------------------------------------*/
function searchEngineDisplay(response)
{
	searchEngineActive = false;

	$.each(response.items, function(i, object)
		{
			console.log(object.title);

			// container
			$("#searchEngineOutput").append("<div id='engine-result-" + i + "'></div>");
			// link and title
			$("#engine-result-" + i).append("<a href='" + object.link + "'><h3>" + object.title + "</h3></a>");
			// image preview
			$("#engine-result-" + i).append("<img src='" + object.pagemap.cse_thumbnail[0].src + "'>");
			// description
			$("#engine-result-" + i).append("<p>" + object.htmlSnippet + "</p><br>");
		});
}