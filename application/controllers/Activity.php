<?php

	class Activity extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_activity');
			 
			$this->load->library('user_agent');
		}
		
		 
		
		function index()
    	{
        $trials['trials'] = $this->model_activity->tampil_trials();
        $this->template->load('template', 'activity/view', $trials);
		
    	}		

		 
	 
	}

?>