<?php

	class Model_daftarantrian extends CI_Model
	{

		public $table ="tabel_data";
		
		function tampil_daftarsample(){

		$this->db->select('*');
			
			$this->db->from('table_sample');
			$this->db->join('biodata', 'biodata.nama=table_sample.pengirim');
		 	$this->db->where('table_sample.status','Menunggu Konfirmasi Batch');
			$query =  $this->db->get(); 
			
		return $query;
		}
		 

	}
	
?>