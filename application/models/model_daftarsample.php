<?php

	class Model_daftarsample extends CI_Model
	{

		public $table ="tabel_data";
		
		function tampil_daftarsample(){
      
			$this->db->select('*');
			 
			$this->db->from('tabel_data');
			$this->db->join('biodata', 'biodata.nama=tabel_data.pengirim');
			$this->db->where('status','Sample Diterima Admin');
			$query =  $this->db->get(); 
			
		return $query;
		}
		 
		 

	}
	
?>