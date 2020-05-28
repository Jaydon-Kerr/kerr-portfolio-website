/*
Program:		jservice.js
Author:			Jaydon Kerr
Date:			June 8, 2019
Description:	uses the jservice API.
*/

//global variable to tell if search is active
var jServiceSearch = false;

jQuery(document).ready(function()
{	
	//confirm file has loedad
	console.log("jservice.js has loaded!");

	//check for clicks on #usr-btn
	jQuery("#usr-btn").on("click", function()
		{
			// check if search is active
			if (!jServiceSearch)
			{
				jServiceSearch = true;

				// hide the answer
				jQuery("#answer").fadeOut();
				
				// retrieve the question
				jServiceGet();
			}
			else
			{
				console.log("jService search is active!");
			}
		});
	
	//check for clicks on #answer-btn
	jQuery("#answer-btn").on("click", function()
		{
			jQuery("#answer").fadeToggle();
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
	jQuery.getJSON("http://jservice.io/api/random", /* no settings needed since this is only requesting one random question */ function(response)
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
	// set search as inactive
	jServiceSearch = false;

	// 1. display the question
	// clear the old question
	jQuery("#question").empty();
	// append the new question
	jQuery("#question").append(data[0].question);

	// 2. output the answer
	// clear the old answer
	jQuery("#answer").empty();
	// append the new answer
	jQuery("#answer").append(data[0].answer);

	//1. display the question
	// $("#jServiceQuestion").text(data[0].question);
	// //2. show the output div
	// $("#jServiceOutput").slideDown();
	// //3. place the answer
	// $("#jServiceAnswer").text(data[0].answer);
}