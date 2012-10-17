<!--tool.ctp -->
<?php
	// Includes 
	echo $this->Html->script('jquery', FALSE);
	echo $this->Html->script('jquery-ui', FALSE);
	echo $this->Html->script('websitePlayground', FALSE);
	echo $this->Html->css('websitePlayground.css', FALSE);
	echo $this->Html->css('Header.css', null, array('inline' => false));
	echo $this->Html->css('RightBar.css', null, array('inline' => false));
	echo $this->Html->css('ui-lightness/jquery-ui-1.8.21.custom.css', null, array('inline' => false));
	echo $this->Html->css('OverlayWindow.css', null, array('inline' => false));
	echo $this->Html->css('BottomBar.css', null, array('inline' => false));
	echo $this->Html->css('FeedbackForm.css', null, array('inline' => false));
	echo $this->Html->css('Sticky.css', null, array('inline' => false));
?>

<!-- Whole screen -->
<div id="Surface">
	
	<!-- Beta Logo -->
	<?php echo $this->Html->image('AET/Header/beta.png', array('width' => 100, 'height' => 200, 'title' => 'Beta', 'id' => 'BetaLogo'))?>
	
	<!-- The drop down header bar -->
	<header id="HeaderSlidingBar">
		
		<div id="HeaderContent">
			
			<!-- Moving targets logo -->
			<?php echo $this->Html->image('AET/Header/MovingTargetsLogo.jpg', array('width' => 300, 'height' => 150, 'title' => 'Moving Targets Logo'))?>
			
		</div>
		
		<!-- Title bar -->
		<div id="HeaderClickableBar">
		
			<!-- The title -->
			<div id="HeaderTitle">
				<h1><b>BRAINSTORMING SPACE</b><small> How can you involve your <i>potential</i> audiences?</small></h1>
			</div>
			
			<!-- The arrow tab -->
			<div id="HeaderTab">
				<?php echo $this->Html->image('AET/Header/topBarArrowDown.png', array('width' => 35, 'height' => 25, 'id' => 'MovingTargetsTab', 'alt' => ''))?>
			</div>
			
		</div>
	</header>
	
	<!-- The area where the stickies can be placed -->
	<section id="StickySpace">
	
		<!-- Display any flash messages 
		<div style="position: absolute; top: 100px;">
			<?php //echo $this->Session->flash(); ?>
			<p id="update">Click This Text<p>
			<?php //echo $this->Html->link('This one is 4', array('controller' => 'audienceEngagements', 'action' => 'tool', '4')); ?>
			<?php //echo $this->Html->link('This one is 6', array('controller' => 'audienceEngagements', 'action' => 'tool', '6')); ?>
			<?php //echo $this->Html->link('This is plain tool', array('controller' => 'audienceEngagements', 'action' => 'tool')); ?>
			<p id="AjaxChecker"></p>
		</div>-->
		
		<!-- The right hand bar -->
		<ul id="RightHandBar">
			
			<!-- Sticky note icon -->
			<li>
				<div id="StickyNoteIcon" class="sticky sticky_editable RightBarIcon">
					<p>Sticky Note</p>
				</div>
			</li>
		
			<!-- Random Challenge card -->
			<li id="challengeCardArea">
				<?php echo $this->Html->image('AET/RightBar/Random%20Challenge.png', array('width' => 100, 'height' => 100, 'title' => 'Random Challenge', 'id' => 'ChallengeCard'))?>
				<p id="SeeAllButton">See all</p>
			</li>
			
			<!-- Next step button -->
			<li>
				<a href="#" id='NextStep'><?php echo $this->Html->image('AET/RightBar/NextStep.png', array('width' => 100, 'height' => 100, 'title' => 'Next Step Button'))?></a>
			</li>
		</ul>
		
		<!-- Where the sticky notes get placed when they are created -->
		<div id="stickyList"> </div>
	</section>	<!-- End of sticky space -->
	
	<!-- Footer -->
	<footer id="tabbed_box_1" class="tabbed_box">
	
		<!-- The whole tabbed area -->
		<div class="tabbed_area">  
		  
			<!-- The top tabs -->
			<ul class="tabs">

				<!-- During Concept & Implementation tab -->
				<li>
					<div id="tab_1" class="active footerTab">
						<?php echo $this->Html->image('AET/BottomBarIcons/ConceptAndImplem.png', array('width' => 20, 'height' => 20, 'title' => 'Concept & Design', 'class' => 'bottomBarIcon'))?>
						During Concept & Implementation
					</div>
				</li>
				
				<!-- During Marketing & Promotion tab -->
				<li>
					<div id="tab_2" class="footerTab">
						<?php echo $this->Html->image('AET/BottomBarIcons/promotion.png', array('width' => 20, 'height' => 20, 'title' => 'Promotion', 'class' => 'bottomBarIcon'))?>
						During Marketing & Promotion
					</div>
				</li>
				
				<!-- Sustain the Engagement tab-->
				<li>
					<div id="tab_3" class="footerTab">
						<?php echo $this->Html->image('AET/BottomBarIcons/SustainEngagement.png', array('width' => 20, 'height' => 20, 'title' => 'Sustain The Engagement', 'class' => 'bottomBarIcon'))?>
						Sustain the engagement
					</div>
				</li>
			</ul>
			
			<!-- The content of During Concept & Implementation -->
			<div id="content_1" class="footerTabContent">
				<ul>
					<li><?php echo $this->Html->image('AET/GreenCards/test.png', 				array('width' => 100, 'height' => 100, 'title' => 'Test Tile', 				'name' => 'Test-Tile', 				'class' => 'GreenTileIcon CreateBetaTest sticky' ))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/Codesign.png', 			array('width' => 100, 'height' => 100, 'title' => 'Co design Tile', 		'name' => 'Co-Design-Tile',			'class' => 'GreenTileIcon CreateCoDesign sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/contribute.png', 			array('width' => 100, 'height' => 100, 'title' => 'Contribute Tile',		'name' => 'Contribute-Tile',		'class' => 'GreenTileIcon CreateContribute sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/create.png', 				array('width' => 100, 'height' => 100, 'title' => 'Create Tile', 			'name' => 'Create-Tile',			'class' => 'GreenTileIcon CreateCreation sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/evaluate.png', 			array('width' => 100, 'height' => 100, 'title' => 'Evaluate Tile', 			'name' => 'Evaluate-Tile',			'class' => 'GreenTileIcon CreateEvaluate sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/extra%20content.png',		array('width' => 100, 'height' => 100, 'title' => 'Extra Content Tile', 	'name' => 'Extra-Content-Tile',		'class' => 'GreenTileIcon CreateExtraContent sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/show%20loyalty.png', 		array('width' => 100, 'height' => 100, 'title' => 'Show Loyalty Tile', 		'name' => 'Show-Loyalty-Tile',		'class' => 'GreenTileIcon CreateLoyalty GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/see%20the%20process.png', array('width' => 100, 'height' => 100, 'title' => 'See the process Tile', 	'name' => 'See-The-Process-Tile',	'class' => 'GreenTileIcon CreateSeeProcess sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/Share.png', 				array('width' => 100, 'height' => 100, 'title' => 'Share Tile', 			'name' => 'Share-Tile',				'class' => 'GreenTileIcon CreateShare sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20others.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To Others Tile', 	'name' => 'Talk-To-Others-Tile',	'class' => 'GreenTileIcon CreateTalkToOthers sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20you.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To You Tile', 		'name' => 'Talk-To-You-Tile',		'class' => 'GreenTileIcon CreateTalkToYou sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/unique.png', 				array('width' => 100, 'height' => 100, 'title' => 'Unique Tile', 			'name' => 'Unique-Tile',			'class' => 'GreenTileIcon CreateUnique GreyOverlay sticky'))?></li>
				</ul>
			</div>
			
			<!-- The content of During Marketing & Promotion -->
			<div id="content_2" class="footerTabContent">
				<ul>
					<li><?php echo $this->Html->image('AET/GreenCards/test.png', 				array('width' => 100, 'height' => 100, 'title' => 'Test Tile', 				'name' => 'Test-Tile', 				'class' => 'GreenTileIcon CreateBetaTest GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/Codesign.png', 			array('width' => 100, 'height' => 100, 'title' => 'Co design Tile', 		'name' => 'Co-Design-Tile',			'class' => 'GreenTileIcon CreateCoDesign GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/contribute.png', 			array('width' => 100, 'height' => 100, 'title' => 'Contribute Tile',		'name' => 'Contribute-Tile',		'class' => 'GreenTileIcon CreateContribute sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/create.png', 				array('width' => 100, 'height' => 100, 'title' => 'Create Tile', 			'name' => 'Create-Tile',			'class' => 'GreenTileIcon CreateCreation sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/evaluate.png', 			array('width' => 100, 'height' => 100, 'title' => 'Evaluate Tile', 			'name' => 'Evaluate-Tile',			'class' => 'GreenTileIcon CreateEvaluate sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/extra%20content.png',		array('width' => 100, 'height' => 100, 'title' => 'Extra Content Tile', 	'name' => 'Extra-Content-Tile',		'class' => 'GreenTileIcon CreateExtraContent sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/show%20loyalty.png', 		array('width' => 100, 'height' => 100, 'title' => 'Show Loyalty Tile', 		'name' => 'Show-Loyalty-Tile',		'class' => 'GreenTileIcon CreateLoyalty GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/see%20the%20process.png', array('width' => 100, 'height' => 100, 'title' => 'See the process Tile', 	'name' => 'See-The-Process-Tile',	'class' => 'GreenTileIcon CreateSeeProcess sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/Share.png', 				array('width' => 100, 'height' => 100, 'title' => 'Share Tile', 			'name' => 'Share-Tile',				'class' => 'GreenTileIcon CreateShare sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20others.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To Others Tile', 	'name' => 'Talk-To-Others-Tile',	'class' => 'GreenTileIcon CreateTalkToOthers sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20you.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To You Tile', 		'name' => 'Talk-To-You-Tile',		'class' => 'GreenTileIcon CreateTalkToYou sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/unique.png', 				array('width' => 100, 'height' => 100, 'title' => 'Unique Tile', 			'name' => 'Unique-Tile',			'class' => 'GreenTileIcon CreateUnique sticky'))?></li>
				</ul>
			</div>
			
			<!-- The content of Sustain the Engagement-->
			<div id="content_3" class="footerTabContent">
				<ul>
					<li><?php echo $this->Html->image('AET/GreenCards/test.png', 				array('width' => 100, 'height' => 100, 'title' => 'Test Tile', 				'name' => 'Test-Tile', 				'class' => 'GreenTileIcon CreateBetaTest GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/Codesign.png', 			array('width' => 100, 'height' => 100, 'title' => 'Co design Tile', 		'name' => 'Co-Design-Tile',			'class' => 'GreenTileIcon CreateCoDesign GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/contribute.png', 			array('width' => 100, 'height' => 100, 'title' => 'Contribute Tile',		'name' => 'Contribute-Tile',		'class' => 'GreenTileIcon CreateContribute GreyOverlay sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/create.png', 				array('width' => 100, 'height' => 100, 'title' => 'Create Tile', 			'name' => 'Create-Tile',			'class' => 'GreenTileIcon CreateCreation sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/evaluate.png', 			array('width' => 100, 'height' => 100, 'title' => 'Evaluate Tile', 			'name' => 'Evaluate-Tile',			'class' => 'GreenTileIcon CreateEvaluate sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/extra%20content.png',		array('width' => 100, 'height' => 100, 'title' => 'Extra Content Tile', 	'name' => 'Extra-Content-Tile',		'class' => 'GreenTileIcon CreateExtraContent sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/show%20loyalty.png', 		array('width' => 100, 'height' => 100, 'title' => 'Show Loyalty Tile', 		'name' => 'Show-Loyalty-Tile',		'class' => 'GreenTileIcon CreateLoyalty sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/see%20the%20process.png', array('width' => 100, 'height' => 100, 'title' => 'See the process Tile', 	'name' => 'See-The-Process-Tile',	'class' => 'GreenTileIcon CreateSeeProcess sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/Share.png', 				array('width' => 100, 'height' => 100, 'title' => 'Share Tile', 			'name' => 'Share-Tile',				'class' => 'GreenTileIcon CreateShare sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20others.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To Others Tile', 	'name' => 'Talk-To-Others-Tile',	'class' => 'GreenTileIcon CreateTalkToOthers sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20you.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To You Tile', 		'name' => 'Talk-To-You-Tile',		'class' => 'GreenTileIcon CreateTalkToYou sticky'))?></li>
					<li><?php echo $this->Html->image('AET/GreenCards/unique.png', 				array('width' => 100, 'height' => 100, 'title' => 'Unique Tile', 			'name' => 'Unique-Tile',			'class' => 'GreenTileIcon CreateUnique sticky'))?></li>
				</ul>
			</div>
			
			<!-- The add green card button and helper icon -->
			<div>
				<ul id="footerHelpAndAddIcons">
					<?php echo $this->Html->image('AET/BottomBarIcons/add%20green.png', array('width' => 45, 'height' => 45, 'title' => 'Add green card', 'id' => 'AddGreenCard'))?>
					<?php echo $this->Html->image('AET/BottomBarIcons/info%20green.png', array('width' => 45, 'height' => 45, 'title' => 'Information for green cards', 'id' => 'LearnMoreButton'))?>
				</ul>
			</div>
		</div>  <!-- end tabbed_area -->
		
		<!-- Initative footer -->
		<div class="tabbed_area2">  
			
			<!-- The tabs -->
			<ul class="tabs">
				<li>
					<div id="tab_1" class="active footerTab">
						Initative 1
					</div>
				</li>
				
				<!-- The new initative button -->
				<li>
					<div id="newInitiative">
						<b>+</b>
					</div>
				</li>
			</ul>  
			
			<!-- Where the stickies are placed when in an incentive -->
			<div class="footerTabContent">
				<ul id="DroppableList">
					<li>
						<div class="Droppable">Droppable area</div>
					</li>
				</ul>
			</div>
		</div>		<!-- End of tabbed_area2 -->
	</footer>	<!-- End of Footer -->
</div> <!-- End surface -->

<!-- Start of the overlay window -->
<!-- The grey overlay -->
<div id="OverLay">

	<!-- The window -->
	<div id="Window">
		
		<!-- The list of Green cards -->
		<div id="GreenCardExplained">
			<ul id="GreenCardList">
				<li><?php echo $this->Html->image('AET/GreenCards/test.png', 				array('width' => 100, 'height' => 100, 'title' => 'Test Tile', 				'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/Codesign.png', 			array('width' => 100, 'height' => 100, 'title' => 'Co design Tile', 		'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/contribute.png', 			array('width' => 100, 'height' => 100, 'title' => 'Contribute Tile',		'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/create.png', 				array('width' => 100, 'height' => 100, 'title' => 'Create Tile', 			'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/evaluate.png', 			array('width' => 100, 'height' => 100, 'title' => 'Evaluate Tile', 			'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/extra%20content.png',		array('width' => 100, 'height' => 100, 'title' => 'Extra Content Tile', 	'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/show%20loyalty.png', 		array('width' => 100, 'height' => 100, 'title' => 'Show Loyalty Tile', 		'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/see%20the%20process.png', array('width' => 100, 'height' => 100, 'title' => 'See the process Tile', 	'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/Share.png', 				array('width' => 100, 'height' => 100, 'title' => 'Share Tile', 			'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20others.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To Others Tile', 	'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/talk%20to%20you.png', 	array('width' => 100, 'height' => 100, 'title' => 'Talk To You Tile', 		'class' => 'HelpIcon'))?></li>
				<li><?php echo $this->Html->image('AET/GreenCards/unique.png', 				array('width' => 100, 'height' => 100, 'title' => 'Unique Tile', 			'class' => 'HelpIcon'))?></li>
			</ul><!-- End GreenCardList -->
		</div><!-- End GreenCardExplained -->
		
		<!-- The feedback content -->
		<div id="Feedback">
			
			<!-- The beta icon -->
			<?php echo $this->Html->image('AET//Header/beta.png', array('width' => 100, 'height' => 200, 'title' => 'Beta', 'id' => 'BetaLogoForm'))?>
			
			<!-- The feedback form -->
			<form id="FeedBackForm">
				<ul>
					<li><div class="FormListElement">Topic: </br><input type="text" name="Topic" id="Topic" value="" /></div></li>
					<li><div class="FormListElement" style="float:right;">Category: </br><input type="text" name="Category" id="Category" value="" /></div></li>
					<li><div class="FormListElement">Description: </br><textarea name="comments" id="comments" cols="50" rows="5"></textarea></div></li>
					<li><div class="FormListElement">Your Media Sector: </br><input type="text" name="media" id="media" value="" /></div></li>
					<li><div class="FormListElement" style="float:right;">Email: </br><input type="text" name="email" id="email" value="" /></div></li>
					<li></br><input type="submit" value="submit" style="float:right;"/></li>
				 </ul>
			</form>
		</div>	<!-- End of feedback -->
	</div><!-- End Window-->
	
	<!-- A list of all the meaning of the green cards -->
	<div id="GreenCardDescriber">
		<ul>
			<li class="greenCardDescription" id="TestDesc"><p>Techniue used with interactive media with the aim of testing the technology and interface.</p><p> However it can also be understood as shadowing or role-playing a prototyped experience to gather users' responses and feedback.</p></li>
			<li class="greenCardDescription" id="CoDesignDesc"><p>Involvment of potential audience-users at concept stage with the aims of inspiration, idea generation and/or research.</p><p> It can be either done through open call to the public or the recruitment of focus groups.</p></li>
			<li class="greenCardDescription" id="ContributeDesc"><p>Enabling audience-users to contribute to the out-come.</p><p> Generally it is understood as contribution when audience-users generate content (or bits of content) under the general vision (concept) of the creator.</p></li>
			<li class="greenCardDescription" id="CreateDesc"><p>Enabling audience-users to contribute to the outcome.</p><p>Generally it is understood as creation when audience-users generate content - connected to the main content - but under their own creative vision.</p></li>
			<li class="greenCardDescription" id="EvaluateDesc"><p>Not only making available unfinished bits of content to the audience/users but allowing them to interact with the creators by providing feedback and suggestions.</p><p> This can either happen at concept or implementation stage.</p></li>
			<li class="greenCardDescription" id="ExtraContentDesc"><p>It is understood as extra content any content that initially would not belong to the main content.</p><p> Cut scenes, bits of the process (sketches, trashed ideas), getting to know the creators, interviews.</p></li>
			<li class="greenCardDescription" id="ShowLoyaltyDesc"><p>When the audience-users identify with the content they may want to display thay engagement.</p><p> That demonstration can take many forms, from merchandising to belonging to fan-communities.</p></li>
			<li class="greenCardDescription" id="SeeTheProcessDesc"><p>Audience-users will to learn more about the creators & their processes.</p><p> Unfinished pieces of content that acquite value for the audience-users and could be exploited as a promotion tool or even monetised.</p></li>
			<li class="greenCardDescription" id="ShareDesc"><p>Enabling the audience-users to share their experience - and with it your content - with others.</p><p> Providing the framework and tools for it can increase visibility of your content and rise awareness.</p></li>
			<li class="greenCardDescription" id="TalkToOthersDesc"><p>If people engage with the content they will talk about whether you are involve or not in those conversations.</p><p> Providing the framework for those discussion can give you great insight into how they understand and engage with your content.</p></li>
			<li class="greenCardDescription" id="TalkToYouDesc"><p>Audience-users interest in learning more about the creators or even the fictional characters.</p><p> Similarly, opening a channel for direct communication can provide you with great insight into your audiences and their engagement.</p></li>
			<li class="greenCardDescription" id="UniqueDesc"><p>The feeling of having a unique exerience usually comes from a high degree of customisation or the access to exclusive content.</p></li>
		</ul>
	</div>
</div><!-- End overlay-->

<?php

function checkForNull($value)
{
	if($value == NULL)
	{
		return 0;
	}
	else 
	{
		return $value;
	}
}
?>
<?php //foreach ($stickies as $sticky): ?>
    <script>
		//CreateNewStickyStartUp(	'<?php //echo $sticky['AudienceEngagement']['colour']; ?>',
								'<?php //echo $sticky['AudienceEngagement']['body']; ?>', 
								<?php //echo checkForNull($sticky['AudienceEngagement']['partOfIncentive']); ?>, 
								<?php //echo $sticky['AudienceEngagement']['xPos']; ?>, 
								<?php //echo $sticky['AudienceEngagement']['yPos']; ?>, 
								'<?php //echo $sticky['AudienceEngagement']['imageName']; ?>'
								//);
	</script>
<?php //endforeach; ?>
