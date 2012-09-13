<!-- File: app\Controller\StickiesController.php -->

<?php
class AudienceEngagementsController extends AppController
{
	public $helpers = array('Js', 'Html', 'Form', 'Ajax');
	public $components = array('RequestHandler');			// Contains the method isAjax();
	
	public function tool($var = 0)
	{
		//$refreshPage = false;
		//if( $this->RequestHandler->isAjax())
		//{
			//$this->Session->setFlash('I can now set the flash');
			//$this->render();
		//}
		//$field = $this->AudienceEngagement->find('all', array('conditions' => array('stickyId' => 5)));
		//debug($refreshPage);
		
		//debug("Show me the money");
		if($var == 4)
		{
			//$this->Session->setFlash('This is when it IS 4');
		}
		else
		{
			//$this->Session->setFlash('This is when it is NOT 4');
		}
		
		$this->set('stickies', $this->AudienceEngagement->find('all'));
		$this->set('title_for_layout', 'Audience Engagement Tool');
	}
	
	public function add_sticky_to_database()
	{	
		// No view as this is only accessed through an ajax request
		$this->autoRender = false;
		
		// Check to see if the form is empty
		if (!empty($this->data))
		{
			// Check if the data has been saved successfully
			if ($this->AudienceEngagement->save($this->data))
			{
				$this->log( "Failed to add sticky to database", 'debug');
			}
		}
	}
	
	public function update_sticky_postition_in_db()
	{	
		// No view as this is only accessed through an ajax request
		$this->autoRender = false;
		
		// Get the id of the sticky to pass to find
		$idOfSticky = $this->request->data[test1];
		
		// Find the row that corresponds to the id of the sticky passed
		$field = $this->AudienceEngagement->find('first', array('conditions' => array('stickyId' => $idOfSticky)));
		
		// Get the database id of the passed sticky
		$stickyId = $field[AudienceEngagement][id];
		
		// Set the model to save the information to the stickyId passed by ajax
		$this->AudienceEngagement->id = $stickyId;

		// Save the information to the database
		if (!$this->AudienceEngagement->save($this->request->data))
		{
			$this->log( "Failed to update sticky position", 'debug');
		}
	}
	
	public function update_body_of_sticky_in_db()
	{
		// No view as this is only accessed through an ajax request
		$this->autoRender = false;
		
		// Trim the body down so that it is only the text, no tags or trailing whitespace
		$this->request->data[body] = trim(strip_tags($this->request->data[body]));
		
		// Get the id of the sticky to pass to find
		$idOfSticky = $this->request->data[idOfSticky];
		
		// Find the row that corresponds to the id of the sticky passed
		$field = $this->AudienceEngagement->find('first', array('conditions' => array('stickyId' => $idOfSticky)));
		
		// Get the database id of the passed sticky
		$stickyId = $field[AudienceEngagement][id];
		
		// Set the model to save the information to the stickyId passed by ajax
		$this->AudienceEngagement->id = $stickyId;
		
		// Save the information to the database
		if (!$this->AudienceEngagement->save($this->request->data))
		{
			$this->log( "Failed update sticky body", 'debug');
		}
	}
	
	public function update_sticky_incentive_status()
	{
		// No view as this is only accessed through an ajax request
		$this->autoRender = false;
		
		// Get the id of the sticky to pass to find
		$idOfSticky = $this->request->data[idOfSticky];
		
		// Find the row that corresponds to the id of the sticky passed
		$field = $this->AudienceEngagement->find('first', array('conditions' => array('stickyId' => $idOfSticky)));
		
		// Get the database id of the passed sticky
		$stickyId = $field[AudienceEngagement][id];
		
		// Set the model to save the information to the stickyId passed by ajax
		$this->AudienceEngagement->id = $stickyId;
		
		// Save the information to the database
		if (!$this->AudienceEngagement->save($this->request->data))
		{
			//$this->log( "Failed update sticky incentive status", 'debug');
		}
	}
	
	public function tool_stage_2()
	{
		$this->set('title_for_layout', 'Stage 2');
	}
}

/*
	    <?php
    class AjaxController extends AppController {
        public function beforeFilter() {
            parent::beforeFilter();
            $this->autoRender = false;
            $this->layout = false;
     
            if (!$this->request->is('ajax')) {
                $this->redirect('/');
            }
        }
     
        // Add methods here as needed.
    }
*/