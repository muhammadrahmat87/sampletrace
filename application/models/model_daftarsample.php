<?php

	class Model_daftarsample extends CI_Model
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

		function tampil_daftarsurat(){
      
			$this->db->select('*');
			$this->db->group_by('id_reg');
			$this->db->distinct('id_reg ');
				
			$this->db->order_by('urgensi', 'DESC');
			$this->db->order_by('tgl_kirim', 'DESC');
			$this->db->from('tabel_data');
			$this->db->join('biodata', 'biodata.nama=tabel_data.pengirim');
			$this->db->where('status','Menunggu Konfirmasi Batch');
			$query =  $this->db->get(); 
			
		return $query;
		}
		 
		 

	}
	
?>