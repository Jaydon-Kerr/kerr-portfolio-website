/*
Program:		jservice.js
Author:			Jaydon Kerr
Date:			June 8, 2019
Description:	uses the jservice API.
*/

//global variable to tell if search is active
var jServiceSearch = false;

$(document).ready(function()
{	
	//confirm file has loedad
	console.log("jservice.js has loaded!");

	//check for clicks on jServiceGetQuestion
	$("#jServiceGetQuestion").on("click", function()
		{
			if (!jServiceSearch)
			{
				jServiceSearch = true;

				//hide answer
				$("#jServiceAnswer").slideUp();
				
				jServiceGet();
			}
			else
			{
				console.log("jService search has not finished yet");
			}
		});
	
	//check for clicks on jServiceShowAnswer
	$("#jServiceGetAnswer").on("click", function()
		{
			$("#jServiceAnswer").slideToggle();
		});

}); 
/*--------------------------------------------------------------------
Name:	jServiceGet
Desc:	retrieves a random question from the jService API
Para:	none
Retn:	none
--------------------------------------------------------------------*/
function jServiceGet()
{
	$.getJSON("http://jservice.io/api/random", /* no settings needed since this is only requesting one random question */ function(response)
		{
			console.log(response);
			jServiceDisplay(response);
		});
}
/*--------------------------------------------------------------------
Name:	jServiceDisplay
Desc:	displays the data retrieved from the jService API
Para:	data
Retn:	none
--------------------------------------------------------------------*/
function jServiceDisplay(data)
{
	jServiceSearch = false;

	//1. display the question
	$("#jServiceQuestion").text(data[0].question);
	//2. show the output div
	$("#jServiceOutput").slideDown();
	//3. place the answer
	$("#jServiceAnswer").text(data[0].answer);
}