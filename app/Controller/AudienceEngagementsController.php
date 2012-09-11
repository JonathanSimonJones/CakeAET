<!-- File: app\Controller\StickiesController.php -->

<?php
class AudienceEngagementsController extends AppController
{
	public $helpers = array('Js', 'Html', 'Form', 'Ajax');
	
	public function tool($var = 0)
	{
		//debug("Show me the money");
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
	
	public function add_sticky_to_database()
	{	
		// Check to see if the form is empty
		if (!empty($this->data))
		{
			// Check if the data has been saved successfully
			if ($this->AudienceEngagement->save($this->data))
			{
				//debug("Save was successful");
			}
		}
	}
	
	public function update_sticky_postition_in_db()
	{	
		//$this->Session->setFlash('Test.');
		$this->autoRender = false;
		
		
		
		//debug( $this->request->data['AudienceEngagements']);
		//$this->AudienceEngagement->stickyId = $this->request->data['AudienceEngagements'][$stickyId];
		
		// Check to see if the form is empty
		if (!empty($this->data))
		{
			// Check if the data has been saved successfully
			//if ($this->AudienceEngagement->save($this->data))
			{
				
				//$this->redirect($this->referer());
				debug("Update was successful");
			}
		}
		$this->redirect($this->referer());
	}
}