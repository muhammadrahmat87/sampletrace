<?php

	class Import extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_import');
		}
		
		function index()
    	{
        $import['trials'] = $this->model_import->tampil_import();
        $this->template->load('template', 'import/view', $import);
		
    	}	
		
	 	

		function select()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_trials();
				$this->model_import->update($uploadFoto);
				redirect('import');
			} else {
				$trial_code           = $this->uri->segment(3);
				$data['import'] = $this->db->get_where('trials', array('trial_code' => $trial_code))->row_array();
				$this->template->load('template', 'import/select', $data);
			}
		}	

		 
     
      
    	 

		 
		

		// siswa_aktif() -> untuk menampilkan view peserta didik ->terletak di controller Siswa
		// combobox_kelas() -> untuk menampilkan data kelas sesuai jurusan yang dipilih -> terletak di controller Kelas
		// loadDataSiswa() -> untuk menampilkan data siswa trial_code dan nama sesuai kode_kelas yang dipilih di filter, lalu ditampilkan ke div id = kelas yang bedada di view/siswa_aktif -> terletak di controller Siswa
		
		

		function export_excel()
		{
			$this->load->library('CPHP_excel');
	        $objPHPExcel = new PHPExcel();
	        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
	        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');
	        
	        $kelas = $_POST['kelas'];
	        $this->db->where('kd_kelas', $kelas);
	        $siswa = $this->db->get('tbl_siswa');
	        $no=2;
	        foreach ($siswa->result() as $row){
	            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->nim);
	            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
	            $no++;
	        }
	        
	        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
	        $objWriter->save("data-siswa.xlsx");
	        $this->load->helper('download');
	        force_download('data-siswa.xlsx', NULL);
		}

		

		function form(){
		    $data = array(); // Buat variabel $data sebagai array
		    
		    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
		      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
		      $upload  = $this->model_import->upload_file($this->filename);
		      
		      if($upload['result'] == "success"){ // Jika proses upload sukses
		        // Load plugin PHPExcel nya
		        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		        
		        $excelreader = new PHPExcel_Reader_Excel2007();

		         $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
       			 $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		        
		        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
		        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
		        $data['sheet'] = $sheet; 
		      }else{ // Jika proses upload gagal
		        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		      }
		    }
			$this->template->load('template', 'import/form', $data);
		     
		  }

		  function import(){
		  	// Load plugin PHPExcel nya
		  	include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		    $excelreader = new PHPExcel_Reader_Excel2007();
   			$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    		$sheet = $loadexcel->getActiveSheet()->toArray("", true, true ,true);

		    
		    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		    $data = array();
		    
		    $numrow = 0;
		    foreach($sheet as $row){
		      // Cek $numrow apakah lebih dari 1
		      // Artinya karena baris pertama adalah nama-nama kolom
		      // Jadi dilewat saja, tidak usah diimport
		      if($numrow > 1){
		        // START -->
		        // Skrip untuk mengambil value nya
		      
		        // Kita push (add) array data ke variabel data
		       array_push($data, array(
		       	 
				'trial_code' => $row['A'],
				'title' => $row['B'],
				'location' =>$row['C'],
				'block' =>$row['D'],
				'palm_age' =>$row['E'],
				'start' =>$row['F'],
				'finish' =>$row['G'],
				
				
				'treatment_om' =>$row['H'],
				'treatment_rate' =>$row['I'],
				'treatment_freq' =>$row['J'],
				'treatment_slopes' => $row['K'],
				'treatment_mp' => $row['L'],
				'treatment_direction' => $row['M'],
				'treatment_distance' => $row['N'],
				'treatment_position' => $row['O'],
				'treatment_n' => $row['P'],
				'treatment_p' => $row['Q'],
				'treatment_k' => $row['R'],
				'treatment_mg' => $row['S'],
				'gps' => $row['T'],
				 				
		        'time_squence' => $row['U'], 
				'days_after' => $row['V'],  	
				'replicate' => $row['W'], 	
				'degree' => $row['X'], 	
				'palm_number' => $row['Y'], 	
				'habitat_type' => $row['Z'],  
				'baits' => $row['AA'], 
				'hole' => $row['AB'],  	
				'score' => $row['AC'],  
				
				'soil_humidity' => $row['AD'], 
				'temperature' => $row['AE'], 
				'rainfall_during' => $row['AF'], 
				'rainfall_beforethree' => $row['AG'], 
				'rainfall_beforesix' => $row['AH'], 
				'bulk_density' => $row['AI'], 
			   
				'porosity' => $row['AJ'], 
				'agregate' => $row['AK'], 
				'field_capacity' => $row['AL'], 
				'wilting_point' => $row['AM'], 
		
				'ph5' => $row['AN'],  
				'c5' => $row['AO'], 
				'n_tot5' => $row['AP'], 
				'cn5' => $row['AQ'], 
				'p_tot5' => $row['AR'], 
				'k_tot5' => $row['AS'], 
				'ktk5' => $row['AT'], 
				'mg5' => $row['AU'], 
				'ca5' => $row['AV'], 
				'pbray5' => $row['AW'], 
				'k5' => $row['AX'], 
				'na5' => $row['AY'],  
				'htkr5' => $row['AZ'], 
				'altkr5' => $row['BA'], 
			   
				'ph10' => $row['BB'], 
				'c10' => $row['BC'], 
				'n_tot10' => $row['BD'], 
				'cn10' => $row['BE'], 
				'p_tot10' => $row['BF'], 
				'k_tot10' => $row['BG'], 
				'ktk10' => $row['BH'], 
				'mg10' => $row['BI'], 
				'ca10' => $row['BJ'], 
				'pbray10' => $row['BK'], 
				'k10' => $row['BL'], 
				'na10' => $row['BM'],  
				'htkr10' => $row['BN'], 
				'altkr10' => $row['BO'], 

				
				 ));
		      }
		      
		      $numrow++; // Tambah 1 setiap kali looping
		    }
		    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		    $this->model_import->insert_multiple($data);
			
			
			
		    
		    redirect("import"); // Redirect ke halaman awal (ke controller siswa fungsi index)
		  }

	 
	}

?>