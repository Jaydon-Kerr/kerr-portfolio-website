/*
Program:		searchYoutube.js
Author:			Jaydon Kerr
Date:			June 7, 2019
Description:	uses the youtube api to search for videos.
*/

//global variable to tell if search is active
var searchYoutubeActive = false;

$(document).ready(function()
{
	console.log("searchYoutube.js has loaded!");

	//detect button click
	$("#youtubeBtnSearch").on("click", function()
		{
			if (!searchYoutubeActive) 
			{
				searchYoutubeActive = true;
				var searchTerm = $("#youtubeInput").val();
				console.log(searchTerm);
				searchYoutubeSearch(searchTerm);
			}
			else
			{
				console.log("Youtube search has not finished yet.");
			}
		});

	$("#youtubeInput").on("keypress", function(event)
		{
			var keycode = event.which;

			if (keycode == 13) 
			{
				event.preventDefault();
				
				if (!searchYoutubeActive) 
				{
					searchYoutubeActive = true;

					var searchTerm = $("#youtubeInput").val();

					searchYoutubeSearch(searchTerm);
				}
				else
				{
					console.log("Youtube search has not finished yet.");
				}
			}
		});
});

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
			'apiKey': 'AIzaSyDbIR5r6ZJvHpHDBS5IF6IOmXHL0jVBqqo',
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
	$("#search-button").attr("disabled", false);
	console.log("API is ready");
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
		part: 'snippet'
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

	$.each(data.items, function(i, video) {

			$("#youtubeSearchOutput").append("<div id='video-" + i + "'></div>");
			$("#video-" + i).append("<h3>" + video.snippet.title + "</h3>");
			//display an embedded video in an inline frame
			$("#video-" + i).append('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + 
				video.id.videoId + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
			$("#video-" + i).append("<p>" + video.snippet.description + 
				"</p>");
			
		})
}