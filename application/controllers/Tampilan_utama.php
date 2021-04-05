<?php

	class Tampilan_utama extends CI_Controller
	{
		
		public function __construct()
		{
		parent::__construct();
		$this->load->model('model_tampilanutama');
		}
	
		function index()
		{
			$quser = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($quser)->row_array();

			$date = date("Y");
			$qsiswa = "SELECT COUNT(*) AS hasil FROM trials where finish > $date ";
			$data['aktif'] = $this->db->query($qsiswa)->row_array();

			
			$date = date("Y");
			$qsiswa = "SELECT COUNT(*) AS hasil FROM trials where finish <= $date";
			$data['closed'] = $this->db->query($qsiswa)->row_array();

			$qguru = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['alltrials'] = $this->db->query($qguru)->row_array();

			$qguru = 'SELECT COUNT(DISTINCT region) AS hasil FROM trials';
			$data['ree'] = $this->db->query($qguru)->row_array();
			 
					
				
			$query = "SELECT COUNT(region) AS Siak FROM trials where region = 'Siak'";
			$data['regions'] = $this->db->query($query)->row_array(); 

			$a = "SELECT COUNT(region) AS Lampung FROM trials where region = 'Lampung'";
			$data['regionl'] = $this->db->query($a)->row_array(); 

			$queryq = "SELECT COUNT(region) AS Kampar FROM trials where region = 'Kampar'";
			$data['regionk'] = $this->db->query($queryq)->row_array(); 

			$queryw = "SELECT COUNT(region) AS Kalimantan FROM trials where region = 'Kalimantan Tengah'";
			$data['regionkt'] = $this->db->query($queryw)->row_array(); 

			$querye = "SELECT COUNT(region) AS Palembang FROM trials where region = 'Palembang'";
			$data['regionp'] = $this->db->query($querye)->row_array(); 

			$queryr = "SELECT COUNT(region) AS Indragiri FROM trials where region = 'Indragiri'";
			$data['regioni'] = $this->db->query($queryr)->row_array(); 

			$queryt = "SELECT COUNT(region) AS Jambi FROM trials where region = 'Jambi'";
			$data['regionj'] = $this->db->query($queryt)->row_array(); 

			$queryy = "SELECT COUNT(region) AS Belitung FROM trials where region = 'Belitung'";
			$data['regionb'] = $this->db->query($queryy)->row_array(); 

			$queryy = "SELECT COUNT(psm) AS aaa FROM trials where psm = 'PSM 1'";
			$data['psm1'] = $this->db->query($queryy)->row_array(); 
		
			$queryy = "SELECT COUNT(psm) AS bbb FROM trials where psm = 'PSM 2'";
			$data['psm2'] = $this->db->query($queryy)->row_array(); 
		
			$queryy = "SELECT COUNT(psm) AS ccc FROM trials where psm = 'PSM 5'";
			$data['psm5'] = $this->db->query($queryy)->row_array(); 
		
			$queryy = "SELECT COUNT(psm) AS ddd FROM trials where psm = 'PSM 6'";
			$data['psm6'] = $this->db->query($queryy)->row_array(); 

			$data['graph'] = $this->model_tampilanutama->graph();

			$this->template->load('template', 'dashboard', $data);
		}

	}

?>