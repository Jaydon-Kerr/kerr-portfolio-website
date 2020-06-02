/*
Program:		searchYoutube.js
Author:			Jaydon Kerr
Date:			June 7, 2019
Description:	uses the youtube api to search for videos.
*/

//global variable to tell if search is active
var searchYoutubeActive = false;
var APIReady = false;
jQuery(document).ready(function()
{
	console.log("searchYoutube.js has loaded!");

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
	// check if search is not currently active and if API is ready
	if (!searchYoutubeActive && APIReady) 
	{
		// set searchEngineActive to active to avoid overlapping requests
		searchYoutubeActive = true;
		// fade out and empty the container
		jQuery("#output").fadeOut();
		jQuery("#output").empty();

		// search YouTube for the usrInpt
		searchYoutubeSearch(usrInpt);
	}
	else
	{
		// debugging
		console.log("Search engine is active!")
	}
}

/*	--------------------------------------------------------------
	Name: googleApiClientReady
	Desc: callback function specified in script URL within HTML page
	      uses API key method to load & initialize the youtube API
	Args: none
	Retn: none
--------------------------------------------------------------	*/
googleApiClientReady = function() {
	gapi.client.load('youtube', 'v3', function() {
		gapi.client.init({
			'apiKey': 'AIzaSyA6ki6U048R79Vkh7-43d4rXiLwztNs8pQ',
			'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/translate/v2/rest']
		}).then(handleAPILoaded());
	});
}

/*	--------------------------------------------------------------
	Name: handleAPILoaded
	Desc: callback function specified in execute once the API has 
		  been loaded and initialized - enables search button
	Args: none
	Retn: none
--------------------------------------------------------------	*/
function handleAPILoaded() {
	console.log("API is ready");
	APIReady = true;
}

/*--------------------------------------------------------------------
Name:	searchYoutubeSearch
Desc:	searches using searchYoutube based on the users inputted search term
Para:	searchTerm (string)
Retn:	none
--------------------------------------------------------------------*/
function searchYoutubeSearch(searchTerm)
{
	var settings =
	{
		q: searchTerm,
		part: 'snippet',
		maxResults: 3
	};

	var request = gapi.client.youtube.search.list(settings);

	request.execute(function(response)
		{
			console.log(response);
			searchYoutubeDisplay(response);
		});
}

/*--------------------------------------------------------------------
Name:	searchYoutubeDisplay
Desc:	displays results from the searchYoutubeSearch
Para:	data - the data returned from the surver
Retn:	none
--------------------------------------------------------------------*/
function searchYoutubeDisplay(data)
{
	searchYoutubeActive = false;

	jQuery.each(data.items, function(i, video) {

			var video = '<iframe class="cse__video" src="https://www.youtube.com/embed/' + 
				video.id.videoId + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

			// open container and add content
			jQuery("#output").append("<div class='cse'>" + video + "</div>");

			// display the container
			jQuery("#output").fadeIn();			
		})
}