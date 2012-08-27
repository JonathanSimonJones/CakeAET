<!-- File: app\Controller\StickiesController.php -->

<?php
class AudienceEngagementsController extends AppController
{
	public $helpers = array('Js', 'Html', 'Form');
	
	public function tool()
	{
		$this->set('stickies', $this->AudienceEngagement->find('all'));
		$this->set('title_for_layout', 'Audience Engagement Tool');
	}
}