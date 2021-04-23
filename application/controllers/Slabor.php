<?php

	class Slabor extends CI_Controller
	{
		
		 
	
		function index()
		{
			$quser = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($quser)->row_array();

			$tgl_sekarang=date("Y-m-d");
			$qsiswa = 'SELECT COUNT(*) AS hasil FROM trials where finish >= date(now())  ';
			$data['aktif'] = $this->db->query($qsiswa)->row_array();

			$qguru = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($qguru)->row_array();

			$qruangan = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($qruangan)->row_array();
			
			
		 

			$this->template->load('template', 'labor/viewlabor', $data);
		}

	}

?>