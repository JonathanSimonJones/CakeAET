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
				<h1><b>PLANNING SPACE</b><small> Developing those ideas from the users perspective</small></h1>
			</div>
			<div id="HeaderTab">
				<?php echo $this->Html->image('AET/Header/topBarArrowDown.png', array('width' => 35, 'height' => 25, 'id' => 'MovingTargetsTab', 'alt' => ''))?>
			</div>
		</div>
	</header>
	
	<body>
		<section id="StickySpace">
		<div style="position: absolute; top: 100px;">
			<?php echo $this->Session->flash(); ?>
		</div>
		<div id="leftBar">
		</div>
	</body>
	
	<footer id="BottomBarTest" class="tabbed_box"> <!--id="tabbed_box_1"-->
		<div class="tabbed_area2" style="display:block">  
		  
			<ul class="tabs">
				<li>
					<div id="tab_1" class="active footerTab">
						Initative 1
					</div>
				</li>
				<li>
					<div id="newInitiative">
						<b>+</b>
					</div>
				</li>
			</ul>
			
			<div id="initative_content_1" class="footerTabContent">
				<ul id="DroppableList">
					<li>
						<div class="Droppable">Droppable area</div>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</div> <!-- End Surface -->

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