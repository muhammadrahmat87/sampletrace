<?php

	class Home extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			checkAuth();
		$this->load->model('model_tampilanutama');
		}
	
		function index()
		{
			$quser = 'SELECT COUNT(*) AS hasil FROM tabel_data where status = "Menunggu"';
            $data['suratmasuk'] = $this->db->query($quser)->row_array();
        
            $quser = 'SELECT COUNT(*) AS hasil FROM tabel_data where status = "Sample Diterima Admin"';
            $data['suratditerima'] = $this->db->query($quser)->row_array();
    
            $quser = 'SELECT COUNT(*) AS hasil FROM tabel_data where status = "Menunggu Konfirmasi Batch"';
            $data['suratdisample'] = $this->db->query($quser)->row_array();
    
            $quser = 'SELECT COUNT(*) AS hasil FROM table_sample';
            $data['samplemasuk'] = $this->db->query($quser)->row_array();

			$this->template->load('template', 'dashboard', $data);
		}

	}

?>