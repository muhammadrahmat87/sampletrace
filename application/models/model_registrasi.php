<?php

	class Model_registrasi extends CI_Model
	{

		public $table ="tabel_data";
		
		function tampil_data(){
			$this->db->select('*');
			$this->db->group_by('id_reg');
			$this->db->distinct('id_reg');
			$this->db->from('tabel_data');
			$this->db->join('biodata', 'biodata.nama=tabel_data.pengirim');
			$this->db->where('status','Menunggu');
			$query =  $this->db->get(); 
			
		return $query;
		}

		public function get_nama(){
			$query = $this->db->get('biodata')->result();
			return $query;
		   }

		function save()
		{
			$data = array(
				//tabel di database => name di form
				'pengirim'        	=> $this->input->post('pengirim', TRUE),		
				'id_reg'          		=> $this->input->post('id_reg', TRUE),	
				'no_permintaan'          		=> $this->input->post('no_permintaan', TRUE),
				'tgl_surat'          		=> $this->input->post('tgl_surat', TRUE),
				'kategori'          	=> $this->input->post('kategori', TRUE),
				'urgensi' 				=> $this->input->post('urgensi', TRUE),
				'jumlah'	    			=> $this->input->post('jumlah', TRUE),
				'jenis' 				=> $this->input->post('jenis', TRUE),
				'lokasi'	    			=> $this->input->post('lokasi', TRUE),
				'tgl_kirim'	    		=> $this->input->post('tgl_kirim', TRUE),
				'status'	    		=> $this->input->post('status', TRUE),
			);
			$this->db->insert($this->table, $data);

		
		}

		function buat_kode()   {    
			$this->db->select('RIGHT(tabel_data.id_reg,2) as kode', FALSE);
			$this->db->order_by('id_reg','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('tabel_data');      //cek dulu apakah ada sudah ada kode di tabel.    
			if($query->num_rows() <> 0){      
			 //jika kode ternyata sudah ada.      
			 $data = $query->row();      
			 $kode = intval($data->kode) + 1;    
			}
			else{      
			 //jika kode belum ada      
			 $kode = 1;    
			}
			$kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);    
			$kodejadi = "STS2021-".$kodemax;    
			return $kodejadi;  
		   }


		function ubah($data, $id){
			$this->db->where('kode',$kode);
			$this->db->update('tabel_data', $data);
			return TRUE;
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