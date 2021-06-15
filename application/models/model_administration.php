<?php

	class Model_registration extends CI_Model
	{

		public $table ="tabel_data";
		
		
		function tampil_data(){
        $hasil = $this->db->query("select * from tabel_data order by urgensi desc ");
        return $hasil;
		}


		function save()
		{
			$data = array(
				//tabel di database => name di form
				'pengirim'        	=> $this->input->post('pengirim', TRUE),
				
				'no_permintaan'          		=> $this->input->post('no_permintaan', TRUE),
				'tgl_surat'          		=> $this->input->post('tgl_surat', TRUE),
				'kategori'          	=> $this->input->post('kategori', TRUE),
				'urgensi' 				=> $this->input->post('urgensi', TRUE),
				'jumlah'	    			=> $this->input->post('jumlah', TRUE),
				'jenis' 				=> $this->input->post('jenis', TRUE),
				'lokasi'	    			=> $this->input->post('lokasi', TRUE),
				// 'permintaan'	    		=> $this->input->post('permintaan', TRUE),
				// 'berkas'	    			=> $this->input->post('berkas', TRUE),
				'tgl_kirim'	    		=> $this->input->post('tgl_kirim', TRUE),
				 
			 				 
			);
			$this->db->insert($this->table, $data);

			
		}

		function update()
		{
			$data = array(
				'kode'        	=> $this->input->post('kode', TRUE),
				'trial_code'        	=> $this->input->post('trial_code', TRUE),
				'title'          		=> $this->input->post('title', TRUE),
				'description'          	=> $this->input->post('description', TRUE),
				'location' 				=> $this->input->post('location', TRUE),
				'psm' 				=> $this->input->post('psm', TRUE),
				'region' 				=> $this->input->post('region', TRUE),
				'start'	    			=> $this->input->post('start', TRUE),
				'finish'	    		=> $this->input->post('finish', TRUE),
				 
				 	
			);
		

			$kode	= $this->input->post('kode');
			$this->db->where('kode', $kode);
			$this->db->update($this->table, $data);

		 
		}

		// Fungsi untuk melakukan proses upload file
	  	public function upload_file($filename){
		    $this->load->library('upload'); // Load librari upload
		    
		   
		  
		 	$config['upload_path'] = './excel/';
    		$config['allowed_types'] = 'xlsx';
    		$config['max_size']  = '100480';
   			$config['overwrite'] = true;
			$config['file_name'] = $filename;
		    $this->upload->initialize($config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
		      // Jika berhasil :
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		      return $return;
		    }else{
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		  }
		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		 

	}
	
?>