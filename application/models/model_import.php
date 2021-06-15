<?php

	class Model_import extends CI_Model
	{

		public $table ="trials";
		
		function tampil_import(){
			$hasil = $this->db->query("select * from tabel_log where log_tipe = '4' order by log_id desc");
        return $hasil;
		}

		 

		// Fungsi untuk melakukan proses upload file
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
		      // Jika berhasil :
			  helper_log("import", "Import Data Excel  ", "Import", $filenamee);
			 
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
			
		    $this->db->insert_batch('treatment', $data);
			
			
		}
		public function getTrials(Type $var = null)
		{
			$this->db->from($this->table);
			return $this->db->get();
			
		}
		public function findTrials($trial_code)
		{
			$this->db->from($this->table);
			$this->db->where('trial_code', $trial_code);
			return $this->db->get();
			
		}

	}
	
?>