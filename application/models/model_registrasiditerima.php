<?php

	class Model_registrasiditerima extends CI_Model
	{

		public $table ="tabel_data";
		
		function tampil_registrasiditerima(){
			$this->db->select('*');
			$this->db->group_by('id_reg');
			$this->db->distinct('id_reg');
			$this->db->from('tabel_data');
			$this->db->join('biodata', 'biodata.nama=tabel_data.pengirim');
			$this->db->where('status','Sample Diterima Admin');
			$query =  $this->db->get(); 
			
		return $query;
		}

		public function get_nama(){
			$query = $this->db->get('biodata')->result();
			return $query;
		   }

		function ubah($data, $id){
			$this->db->where('kode',$kode);
			$this->db->update('tabel_data', $data);
			return TRUE;
		}

		 
		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		 

	}
	
?>