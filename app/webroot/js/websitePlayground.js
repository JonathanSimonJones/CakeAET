/* Website Playground.js */

var numGreenCards;
var height;
var stickyUniqueId = 0;
var droppableUniueId = 1;
var currentGreenCardDescription;
var greenCardDescriptionActive = false;
var displayGreenCards = false;
var feedback = false;
var centerX = 0;
var centerY = 0;
var brainstormName = 'firstTest';

var drpOptions = {	accept: ".sticky-clone",
					drop: function(event, ui)
					{
						if(!$(this).hasClass('hasSticky'))
						{
							//createNewDroppable(this);
							$(this).parent().clone().appendTo('#DroppableList').children().droppable(drpOptions);
							//$(this).parent().clone(true).appendTo('#DroppableList');
							//console.log(ui.draggable.attr('id'));
							$(ui.draggable).removeClass('shadow').addClass('initativeItem').insertBefore(this);
							updateStickyIncentiveStatusInDB($(ui.draggable).attr("id"), brainstormName, 1, 1);
							$(this).parent().addClass('hasSticky');
						}
						else
						{
							$(ui.draggable).addClass('revertToPreviousPosition');
						}
					},
					out: function(event, ui)
					{
						// If the draggable is already part of an initive
						if($(ui.draggable).hasClass('initativeItem'))
						{
							// Add a shadow to it again
							$(ui.draggable).addClass('shadow').removeClass('initativeItem').appendTo('#stickyList');
							updateStickyIncentiveStatusInDB($(ui.draggable).attr("id"), brainstormName, 0, 1);
							// If more than one droppable exists 
							if( $(".Droppable").length > 1)
							{
								// Add class removeDroppable to droppable that was most recently add
								$(this).parent().addClass("removeDroppable");
							}
							
							// Remove the has class sticky
							$(this).parent().removeClass('hasSticky');
						}
					}
};

$(document).ready(function()
{
	numGreenCards = countNumberOfGreenCards();
	
	centerX = $(document).width() / 2;
	centerY = $(document).height() / 2;

	$("#AddGreenCard").click(function(){
		CreateNewSticky('green', '', centerX, centerY);
		return false;
	});

	$("#LearnMoreButton").click(function(){
		switchOverlayState('green');
		$("#OverLay").fadeIn();
		return false;
	});

	$("#OverLay").click(function(){
		$("#OverLay").fadeOut();
		return false;
	});

	$('#Window').click(function(event)
	{
		event.stopPropagation();
	});

	$('.sticky').draggable(
	{
		stack: ".sticky",
		helper: "clone",
		containment: '#Surface',
		stop:function(event, ui)
		{
			//$(ui.helper).clone(true).removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon sticky').addClass('sticky-clone shadow').appendTo('#stickyList').attr('id', '' + stickyUniqueId++).find( "p" ).html( "" );
			//console.log("Hello World!");
			if( $(this).hasClass('GreenTileIcon') )
			{
				CreateNewSticky("image", "", $(ui.helper).position().left, $(ui.helper).position().top , $(ui.helper).attr('name') );
			}
			else
			{
				CreateNewSticky("paleYellow", "", $(ui.helper).position().left, $(ui.helper).position().top);
			}
		}
	});
	
	$(".sticky-clone").live('mouseover', function() {
		$(this).draggable({
							containment: '#Surface',
							stack: ".sticky-clone",
							snap: ".Droppable",
							snapMode: "inner",
							stop: function(event, ui)
							{	
								$('li').filter('.removeDroppable').not('.hasSticky').remove();
								updateStickyPositionInDB($(ui.helper).attr("id"), brainstormName, $(ui.helper).position().left, $(ui.helper).position().top );
							}
							}).bind('click', function()
							{
								$(this).focus();
							}).focusout(function()
							{
								updateStickyBodyInDB($(this).attr("id"), brainstormName, $(this).text());
							})
							;
	});
	
	$('#update').click(function()
	{
		$(this).html('You have clicked update');
	});
});

$(function() {	


	// Used to animate the header
	$('#HeaderSlidingBar #HeaderClickableBar').toggle(function(){
		$('#HeaderSlidingBar').animate({'top':0 + "px"});
		$('#MovingTargetsTab').attr("src", "/domainName/img/AET/Header/topBarArrowUp.png");
	}, function(){
		$('#HeaderSlidingBar').animate({'top':-150 + "px"});
		$('#MovingTargetsTab').attr("src", "/domainName/img/AET/Header/topBarArrowDown.png");
	});
   
   /*
$("#challengeCard").toggle(
function()
{
$("#challengeCard").animate({ width: 400+"px",
height: 400+"px",
marginRight:"30%",
marginTop:0+"px"}, 1500);
$("#ChallegeCardContent").css({'visibility': 'visible'});
},
function()
{
$("#challengeCard").animate({ width: 100+"px",
height: 100+"px",
marginRight:"0%",
marginTop:-50+"px"}, 1500);
$("#ChallegeCardContent").css({'visibility': 'collapse'});
});
$("#PickRandomQuestion").dblclick(function()
{
$("RandomQuestion").css({'visibility': 'visible'});
});
*/
   $('.sticky_editable').attr('contenteditable', 'true');
   

	$('.HelpIcon').click(function(event)
	{
		if(greenCardDescriptionActive === false)
		{
			currentGreenCardDescription = $(this).attr('title');
			$('.HelpIcon').addClass('GreyOverlay');
			$('#GreenCardDescriber').fadeIn();//css({'display': 'block'});
			//alert(title);
			//var $title = $(
			//$('.greenCardDescription').children().filter("#currentGreenCardDescription").css({'display': 'block'});
			//$('.HelpIcon').removeClass('GreyOverlay');
			
			switch(currentGreenCardDescription)
			{
				case "Test Tile"	: $('#TestDesc').css({'display': 'block'});
										break;
				case "Co design Tile": $('#CoDesignDesc').css({'display': 'block'});
										break;
				case "Contribute Tile": $('#ContributeDesc').css({'display': 'block'});
										break;
				case "Create Tile": $('#CreateDesc').css({'display': 'block'});
										break;
				case "Evaluate Tile": $('#EvaluateDesc').css({'display': 'block'});
										break;
				case "Extra Content Tile": $('#ExtraContentDesc').css({'display': 'block'});
										break;
				case "Show Loyalty Tile": $('#ShowLoyaltyDesc').css({'display': 'block'});
										break;
				case "See the process Tile": $('#SeeTheProcessDesc').css({'display': 'block'});
										break;
				case "Share Tile": $('#ShareDesc').css({'display': 'block'});
										break;
				case "Talk To Others Tile": $('#TalkToOthersDesc').css({'display': 'block'});
										break;
				case "Talk To You Tile": $('#TalkToYouDesc').css({'display': 'block'});
										break;
				case "Unique Tile": $('#UniqueDesc').css({'display': 'block'});
										break;
			};
			
			// Stop overlay from fading out due to click event
			event.stopPropagation();

			greenCardDescriptionActive = true;
		}
	});

	$('#GreenCardDescriber').click(function(event){
		$('.greenCardDescription').css({'display': 'none'});
		$('#GreenCardDescriber').fadeOut();//({'display': 'none'});
		$('.HelpIcon').removeClass('GreyOverlay');
		event.stopPropagation();
		greenCardDescriptionActive = false;
	});

	$('#NextStep').toggle(function(){
		$('.tabbed_area').css({'display': 'none'});
		$('.tabbed_area2').css({'display': 'block'});
		}, function(){
		$('.tabbed_area').css({'display': 'block'});
		$('.tabbed_area2').css({'display': 'none'});
	});

	//$('#DroppableList').children().each().droppable( drpOptions );

	$('.Droppable').droppable( drpOptions);

	$('#BetaLogo').click(function(){
		switchOverlayState('feedback');
		$("#OverLay").fadeIn();
	});
	
	$('#newInitiative').click(function(){
		newInitiative();
	});
	
	$('.footerTab').click(function()
	{	
		footerTabClick(this);
		/*
		$('.footerTab').removeClass('active');
		$(this).addClass('active');
		
		var number = $(this).attr('id');
		number = number.match(/\d+/g);
		var contentID = "#content_" + number;
		$('.footerTabContent').css("display", "none");
		$(contentID).css("display","inline");
		*/
	});
});

function footerTabClick(tab)
{
	$('.footerTab').removeClass('active');
	$(tab).addClass('active');
	
	var number = $(tab).attr('id');
	number = number.match(/\d+/g);
	var contentID = "#content_" + number;
	$('.footerTabContent').css("display", "none");
	$(contentID).css("display","inline");
};

/*

function tabSwitch(new_tab, new_content) {
	document.getElementById('content_1').style.display = 'none';
	document.getElementById('content_2').style.display = 'none';
	document.getElementById('content_3').style.display = 'none';
	document.getElementById(new_content).style.display = 'inline';

	  
	document.getElementById('tab_1').className = '';
	document.getElementById('tab_2').className = '';
	document.getElementById('tab_3').className = '';
	document.getElementById(new_tab).className = 'active';
};*/

function CreateNewSticky(colour, body, xPos, yPos, title)
{
	if(xPos < 0)
	{
		xPos = centerX;
	}
	if(yPos < 0)
	{
		yPos = centerY;
	}
	//if(imageName === 'undefined')
	//{
	//}
	
	$(document).ready(function()
	{
		if(colour === 'green')
		{
			var htmlData='<div class="sticky sticky-clone ui-draggable user-created-sticky sticky_editable shadow" contenteditable="true"><p>' + body + '</p></div>'; 
			//var htmlData='<div class="sticky sticky-clone ui-draggable user-created-sticky sticky_editable shadow" contenteditable="true"><textarea cols="20" rows="5">Text should appear here</textarea></div>'; 
			$('#stickyList').append(htmlData);
			// Fix below
			$('.sticky-clone').draggable({stack: ".sticky-clone"}).last().attr({'id': stickyUniqueId}).css({'position':'absolute', 'left': xPos, 'top': yPos});
			createStickyInDatabase( stickyUniqueId, "green", "", brainstormName, centerX, centerY);
			stickyUniqueId++;
		}
		else if(colour === 'paleYellow')
		{
			$('#StickyNoteIcon').clone().removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon sticky').addClass('sticky-clone shadow').css({'position':'absolute', 'left': xPos, 'top': yPos}).appendTo('#stickyList').attr('id', stickyUniqueId).find( "p" ).html( body );
			createStickyInDatabase( stickyUniqueId, "paleYellow", "", brainstormName, xPos, yPos);
			stickyUniqueId++;
		}
		else if(colour === 'image')
		{
			var greenCardSelector = 'img[name=' + title + ']';
			$(greenCardSelector).first().clone().removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon sticky').addClass('sticky-clone shadow').css({'position':'absolute', 'left': xPos, 'top': yPos}).appendTo('#stickyList').attr('id', stickyUniqueId).find( "p" ).html( body );
			createStickyInDatabase( stickyUniqueId, "image", "", brainstormName, xPos, yPos, title);
			stickyUniqueId++;
		}
		else
		{
			alert('Shit J, create new sticky caused a boo boo, you gave the wrong colour to the function');
		}
	});
};

function CreateNewStickyStartUp(colour, body, partOfIncentive, xPos, yPos, imageName)
{
	if(xPos < 0)
	{
		xPos = centerX;
	}
	if(yPos < 0)
	{
		yPos = centerY;
	}
	
	$(document).ready(function()
	{
		/*
		if(partOfIncentive === 1)
		{
			$(".Droppable").parent().clone().appendTo('#DroppableList').children().droppable(drpOptions);
			$(ui.draggable).removeClass('shadow').addClass('initativeItem').insertBefore(".Droppable").first();
		}
		*/
		if(colour === 'green')
		{
			var htmlData='<div class="sticky-clone ui-draggable user-created-sticky sticky_editable shadow" contenteditable="true"><p>' + body + '</p></div>'; 
			//var htmlData='<div class="sticky sticky-clone ui-draggable user-created-sticky sticky_editable shadow" contenteditable="true"><textarea cols="20" rows="5">Text should appear here</textarea></div>'; 
			$('#stickyList').append(htmlData);
			// Fix below
			$('.sticky-clone').draggable({stack: ".sticky-clone"}).last().attr({'id': stickyUniqueId}).css({'position':'absolute', 'left': xPos, 'top': yPos});
			
			if(partOfIncentive === 1)
			{
				var $stickyNum = "#"+stickyUniqueId;
				//alert($stickyNum);
				
				$(".Droppable").parent().clone().appendTo('#DroppableList').children().droppable(drpOptions);
				$($stickyNum).removeClass('shadow').addClass('initativeItem').insertBefore(".Droppable").first();
				$(".Droppable").parent().last().addClass('hasSticky');
			}
			stickyUniqueId++;
		}
		else if(colour === 'paleYellow')
		{
			$('#StickyNoteIcon').clone().removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon sticky').addClass('sticky-clone shadow').css({'position':'absolute', 'left': xPos, 'top': yPos}).appendTo('#stickyList').attr('id', stickyUniqueId).find( "p" ).html( body );
			stickyUniqueId++
		}
		else if(colour === 'image')
		{
			var greenCardSelector = 'img[name=' + imageName + ']';
			$(greenCardSelector).first().clone().removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon sticky').addClass('sticky-clone shadow').css({'position':'absolute', 'left': xPos, 'top': yPos}).appendTo('#stickyList').attr('id', stickyUniqueId).find( "p" ).html( body );
			stickyUniqueId++;
		}
		else
		{
			alert('Shit J, create new sticky caused a boo boo, you gave the wrong colour to the function');
		}
	});
};

function countNumberOfGreenCards(){
	var ul = document.getElementById('GreenCardList');
	var i=0, c =0;
	
	if(ul != null)
	{
		var foo = 0;
		while(ul.getElementsByTagName('li')[i++])
		{
			c++;
		}
	}
	else
	{
		c = 0;
	}
	return c;
};

function createNewDroppable(elementToCopy)
{
	$(elementToCopy).parent().clone(true, true).appendTo('#DroppableList');
	/*var selector = '#droppable' + droppableUniueId;
	$('.DroppableClone'+ droppableUniueId).droppable({
	accept: ".sticky-clone",
	drop: function(event, ui)
	{
	createNewDroppable(this);
	//$(this).parent().clone(true).appendTo('#DroppableList');
	//console.log(ui.draggable.attr('id'));
	}
	});*/
};

function switchOverlayState(state)
{
	switch(state)
	{
		case 'green': displayGreenCards = true;
					feedback = false;
					$('#GreenCardExplained').css({'display':'block'});
					$('#Feedback').css({'display':'none'});
					$('#Window').css({'background-color':'#565658'});
					break;
					
		case 'feedback': displayGreenCards = false;
					feedback = true;
					$('#GreenCardExplained').css({'display':'none'});
					$('#Feedback').css({'display':'block'});
					$('#Window').css({'background-color':'#BBBBBB'});
					break;
	};
};

function createStickyInDatabase(idOfSticky, colour, body, brainstormName, xPos, yPos, imageName){
	/*
	$.ajax({
	type: "POST",
	url: "/domainName/AudienceEngagements/add_sticky_to_database",
	data: {'stickyId': idOfSticky, 'colour': colour, 'body': body, 'brainstormId': brainstormName, 'xPos' : xPos, 'yPos' : yPos, 'imageName' : imageName }
	}).done(function(html){
		$('#AjaxChecker').html('Added Sticky with ID ' + idOfSticky);
	});
	*/
};

function updateStickyPositionInDB(idOfSticky, brainstormName, xPos, yPos ){
	/*
	$.ajax({
	type: "POST",
	url: "/domainName/AudienceEngagements/update_sticky_postition_in_db",
	data: {'test1': idOfSticky, 'brainstormId': brainstormName, 'xPos' : xPos, 'yPos' : yPos },
	success: function()
	{
		//window.location.href="http://localhost/domainName/AudienceEngagements/tool";
	}
	}).done(function(html){
		$('#AjaxChecker').html('Updated sticky with ID ' + idOfSticky);
	});
	*/
};

function updateStickyBodyInDB(idOfSticky, brainstormName, body){
	/*
	$.ajax({
	type: "POST",
	url: "/domainName/AudienceEngagements/update_body_of_sticky_in_db",
	data: {'idOfSticky': idOfSticky, 'brainstormId': brainstormName, 'body' : body}
	});*/
};

function updateStickyIncentiveStatusInDB(idOfSticky, brainstormName, partOfIncentive, idOfIncentive){
	/*
	$.ajax({
	type: "POST",
	url: "/domainName/AudienceEngagements/update_sticky_incentive_status",
	data: {'idOfSticky': idOfSticky, 'brainstormId': brainstormName, 'partOfIncentive': partOfIncentive, 'idOfIncentive' : idOfIncentive }
	});
	*/
};

function newInitiative()
{
	var tabNumber = $('.footerTab').last().attr("id");
	tabNumber = tabNumber.match(/\d+/g);
	
	var newNumber = parseFloat(tabNumber);
	newNumber += 1;
	
	var newTabHTML = ' <li> <div id="tab_' + newNumber + '" class="footerTab">Initative ' + newNumber + '</div></li>';
	$('.tabs').children().last().before(newTabHTML);
	
	$('.footerTab').click(function()
	{
		footerTabClick(this);
	});
	
	var newTabContentHTML = '<div id="initative_content' + newNumber + '" class="footerTabContent"> <ul id="DroppableList"> <li> <div class="Droppable">Droppable area</div> </li> </ul> </div>';
	$('.footerTabContent').last().after(newTabContentHTML);
}