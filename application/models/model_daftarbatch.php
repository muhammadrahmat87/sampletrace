<?php

	class Model_daftarbatch extends CI_Model
	{

		public $table ="tabel_data";
		
		function tampil_daftarsample(){

		$this->db->select('*');
			
			$this->db->from('table_batch');
			 
			$query =  $this->db->get(); 
			
		return $query;
		}
		 

	}
	
?>