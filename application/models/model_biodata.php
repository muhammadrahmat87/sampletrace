<?php

	class Model_biodata extends CI_Model
	
		{
		public $table ="biodata";
		
		function tampil_biodata(){
			$hasil = $this->db->query("select * from biodata order by id asc");
        	return $hasil;
		}

		// function list_nama()
		// {
		// 	return $this->db->select('DISTINCT(nama)')
		// 		->get($this->table)->result();
		// }

		// public function get_nama(){
		// 	$query = $this->db->get('biodata')->result();
		// 	return $query;
		//    }
	  	public function upload_file($filename){

			$this->load->library('upload'); // Load librari upload
		 	$config['upload_path'] = './excel/';
    		$config['allowed_types'] = 'xlsx';
    		$config['max_size']  = '0';
   			$config['overwrite'] = true;
			$config['file_name'] = $filename;
			$filenamee =  $_FILES['file']['name'];  
		    $this->upload->initialize($config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');		      
			  return $return;
		    }else{
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		  }
		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		
		public function insert_multiple($data){
		    $this->db->insert_batch('biodata', $data);		
		}
	 

	}
	
?>