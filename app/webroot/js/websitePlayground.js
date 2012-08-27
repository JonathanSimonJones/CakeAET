/* Website Playground.js */

var numGreenCards;
var height;
var stickyUniqueId = 1;
var droppableUniueId = 1;
var currentGreenCardDescription;
var greenCardDescriptionActive = false;
var displayGreenCards = false;
var feedback = false;


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
							$(this).parent().addClass('hasSticky');
						}
						else
						{
							$(ui.draggable).addClass('revertToPreviousPosition');
						}
					},
					out: function(event, ui)
					{
						if($(ui.draggable).hasClass('initativeItem'))
						{
							$(ui.draggable).addClass('shadow').removeClass('initativeItem').appendTo('#stickyList');
							
							if( $(".Droppable").length > 1)
							{
								$(this).parent().addClass("removeDroppable");
							}
							$(this).parent().removeClass('hasSticky');
						}
					}
};

$(document).ready(function()
{
var numGreenCards = countNumberOfGreenCards();

	$("#AddGreenCard").click(function(){
		CreateNewSticky();
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
			$(ui.helper).clone(true).removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon sticky').addClass('sticky-clone shadow').appendTo('#stickyList').attr('id', 'userSticky' + stickyUniqueId++).find( "p" ).html( "" );
			//console.log("Hello World!");
		}
	});
});

$(function() {	
	$(".sticky-clone").live('mouseover', function() {
		$(this).draggable({
							containment: '#Surface',
							stack: ".sticky-clone",
							snap: ".Droppable",
							snapMode: "inner",
							stop: function()
							{	
								$('li').filter('.removeDroppable').not('.hasSticky').remove();
							}
							}).bind('click', function()
							{
								$(this).focus();
							});
	});

	// Used to animate the header
	$('#HeaderSlidingBar #HeaderClickableBar').toggle(function(){
		$('#HeaderSlidingBar').animate({'top':0 + "px"});
		$('#MovingTargetsTab').attr("src", "Icons2/Header/topBarArrowUp.png");
	}, function(){
		$('#HeaderSlidingBar').animate({'top':-150 + "px"});
		$('#MovingTargetsTab').attr("src", "Icons2/Header/topBarArrowDown.png");
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
				case "See process Tile": $('#SeeTheProcessDesc').css({'display': 'block'});
										break;
				case "Share Tile": $('#ShareDesc').css({'display': 'block'});
										break;
				case "Talk to others Tile": $('#TalkToOthersDesc').css({'display': 'block'});
										break;
				case "Talk to you Tile": $('#TalkToYouDesc').css({'display': 'block'});
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
});



function tabSwitch(new_tab, new_content) {
	document.getElementById('content_1').style.display = 'none';
	document.getElementById('content_2').style.display = 'none';
	document.getElementById('content_3').style.display = 'none';
	document.getElementById(new_content).style.display = 'inline';

	  
	document.getElementById('tab_1').className = '';
	document.getElementById('tab_2').className = '';
	document.getElementById('tab_3').className = '';
	document.getElementById(new_tab).className = 'active';
};

function CreateNewSticky(nameOfSticky)
{
	var htmlData='<div class="sticky sticky-clone ui-draggable user-created-sticky sticky_editable shadow" contenteditable="true"><p>Drag me around</p></div>';
	$('#stickyList').append(htmlData);
	// Fix below
	$('.sticky-clone').draggable({stack: ".sticky-clone"}).last().attr('id', 'userSticky' + stickyUniqueId++).find( "p" ).html( "" );
};

function countNumberOfGreenCards(){
	var ul = document.getElementById('GreenCardList');
	var i=0, c =0;
	while(ul.getElementsByTagName('li')[i++])
	{
		c++;
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