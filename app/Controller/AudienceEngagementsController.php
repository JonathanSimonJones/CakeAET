<!-- File: app\Controller\StickiesController.php -->

<?php
class AudienceEngagementsController extends AppController
{
	public $helpers = array('Js', 'Html', 'Form');
	
	public function tool($var = 0)
	{
		if($var == 4)
		{
			$this->Session->setFlash('This is when it IS 4');
		}
		else
		{
			$this->Session->setFlash('This is when it is NOT 4');
		}
		$this->set('stickies', $this->AudienceEngagement->find('all'));
		$this->set('title_for_layout', 'Audience Engagement Tool');
	}
}