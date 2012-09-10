<?php
	
	echo $this->Html->script('jquery', FALSE);
	echo $this->Html->script('jquery-ui', FALSE);
	echo $this->Html->script('websitePlayground', FALSE);
?>

<div id="Surface">
	<?php echo $this->Html->image('AET/Header/beta.png', array('width' => 100, 'height' => 200, 'title' => 'Beta', 'id' => 'BetaLogo'))?>
	<header id="HeaderSlidingBar">
		<div id="HeaderContent">
			<?php echo $this->Html->image('AET/Header/MovingTargetsLogo.jpg', array('width' => 300, 'height' => 150, 'title' => 'Moving Targets Logo'))?>
		</div>
		<div id="HeaderClickableBar">
			<div id="HeaderTitle">
				<h1><b>BRAINSTORMING SPACE</b><small> How can you involve your <i>potential</i> audiences?</small></h1>
			</div>
			<div id="HeaderTab">
				<?php echo $this->Html->image('AET/Header/topBarArrowDown.png', array('width' => 35, 'height' => 25, 'id' => 'MovingTargetsTab', 'alt' => ''))?>
			</div>
		</div>
	</header>
	
	<!--<button type="button" style="position: absolute; top: 100px;"><?php //echo $this->Html->link('Click here to show flash message', array('action' => 'tool', 4)); ?></button> -->
	
	<section id="StickySpace">
		<div style="position: absolute; top: 100px;">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Html->link('This one is 4', array('controller' => 'audienceEngagements', 'action' => 'tool', '4')); ?>
			<?php echo $this->Html->link('This one is 6', array('controller' => 'audienceEngagements', 'action' => 'tool', '6')); ?>
			<?php echo $this->Html->link('This is plain tool', array('controller' => 'audienceEngagements', 'action' => 'tool')); ?>
			<p id="AjaxChecker"></p>
		</div>
		<ul id="RightHandBar">
			<li>
				<div id="StickyNoteIcon" class="sticky sticky_editable RightBarIcon">
					<p>Sticky Note</p>
				</div>
			</li>
		
			<li>
				<div id="challengeCardArea">
					<!--<img src='Icons2/RightBar/Random%20Challenge.png' title='Random Challenge' width="100" height="100" id='ChallengeCard'>-->
					<?php echo $this->Html->image('AET/RightBar/Random%20Challenge.png', array('width' => 100, 'height' => 100, 'title' => 'Random Challenge', 'id' => 'ChallengeCard'))?>
					<p id="SeeAllButton">See all</p>
				</div>
			</li>
			
			<li>
				<!--<a href="#" id='NextStep'><img src='Icons2/RightBar/NextStep.png' title='Next Step Button' width="100" height="100"></a>-->
				<a href="#" id='NextStep'><?php echo $this->Html->image('AET/RightBar/NextStep.png', array('width' => 100, 'height' => 100, 'title' => 'Next Step Button'))?></a>
			</li>
		</ul>
		
		<div id="stickyList"> </div>
	</section>
	
	<footer id="tabbed_box_1" class="tabbed_box">
		<div class="tabbed_area">  
		  
			<ul class="tabs">  
				<li>
					<a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active footerTab">
						<?php echo $this->Html->image('AET/BottomBarIcons/ConceptAndImplem.png', array('width' => 20, 'height' => 20, 'title' => 'Concept & Design', 'class' => 'bottomBarIcon'))?>
						During Concept & Implementation
					</a>
				</li>  
				<li>
					<a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2" class="footerTab">
						<?php echo $this->Html->image('AET/BottomBarIcons/promotion.png', array('width' => 20, 'height' => 20, 'title' => 'Promotion', 'class' => 'bottomBarIcon'))?>
						During Marketing & Promotion
					</a>
				</li>  
				<li>
					<a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3" class="footerTab">
						<?php echo $this->Html->image('AET/BottomBarIcons/SustainEngagement.png', array('width' => 20, 'height' => 20, 'title' => 'Sustain The Engagement', 'class' => 'bottomBarIcon'))?>
						Sustain the engagement
					</a>
				</li>
			</ul>
			  
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
			<div>
				<ul id="footerHelpAndAddIcons">
					<!--<li><img src='Icons2/BottomBarIcons/add%20green.png' title='Add green card' width=45 height=45 id="AddGreenCard"></li>-->
					<?php echo $this->Html->image('AET/BottomBarIcons/add%20green.png', array('width' => 45, 'height' => 45, 'title' => 'Add green card', 'id' => 'AddGreenCard'))?>
					<!--<li><img src='Icons2/BottomBarIcons/info%20green.png' title='Information for green cards' width=45 height=45 id="LearnMoreButton"></li>-->
					<?php echo $this->Html->image('AET/BottomBarIcons/info%20green.png', array('width' => 45, 'height' => 45, 'title' => 'Information for green cards', 'id' => 'LearnMoreButton'))?>
				</ul>
			</div>
		</div>  <!-- end tabbed_area -->	
		<div class="tabbed_area2">  
		  
			<ul class="tabs">
				<li>
					<a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active footerTab">
						Initative1
					</a>
				</li>  
			</ul>  
			
			<div class="footerTabContent">
				<ul id="DroppableList">
					<li>
						<div class="Droppable">Droppable area</div>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</div> <!-- End surface -->

		
<div id="OverLay">
	<div id="Window">
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
		<div id="Feedback">
			<!--<img src='Icons2/Header/beta.png' title='Beta' width="100" height="200" id="BetaLogoForm">-->
			<?php echo $this->Html->image('AET//Header/beta.png', array('width' => 100, 'height' => 200, 'title' => 'Beta', 'id' => 'BetaLogoForm'))?>
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
		</div>
	</div><!-- End Window-->
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

<?php foreach ($stickies as $sticky): ?>
    <script>
		CreateNewStickyStartUp('<?php echo $sticky['AudienceEngagement']['colour']; ?>','<?php echo $sticky['AudienceEngagement']['body']; ?>', <?php echo $sticky['AudienceEngagement']['xPos']; ?>, <?php echo $sticky['AudienceEngagement']['yPos']; ?> );
	</script>
<?php endforeach; ?>