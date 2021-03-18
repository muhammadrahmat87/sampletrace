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
        $import['import'] = $this->model_import->tampil_import();
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
				
				'installation_date' =>$row['H'],
				'treatment_om' =>$row['I'],
				'treatment_rate' =>$row['J'],
				'treatment_freq' =>$row['K'],
				'treatment_slopes' => $row['L'],
				'treatment_mp' => $row['M'],
				'treatment_direction' => $row['N'],
				'treatment_distance' => $row['O'],
				'treatment_position' => $row['P'],
				'treatment_n' => $row['Q'],
				'treatment_p' => $row['R'],
				'treatment_k' => $row['S'],
				'treatment_mg' => $row['T'],
				'gps' => $row['U'],
				 				
		        'time_squence' => $row['V'], 
				'days_after' => $row['W'],  	
				'replicate' => $row['X'], 	
				'degree' => $row['Y'], 	
				'palm_number' => $row['Z'], 	
				'habitat_type' => $row['AA'],  
				'baits' => $row['AB'], 
				'hole' => $row['AC'],  	
				'score' => $row['AD'],  
				
				'soil_humidity' => $row['AE'], 
				'temperature' => $row['AF'], 
				'rainfall_during' => $row['AG'], 
				'rainfall_beforethree' => $row['AH'], 
				'rainfall_beforesix' => $row['AI'], 
				'bulk_density' => $row['AJ'], 
			   
				'porosity' => $row['AK'], 
				'agregate' => $row['AL'], 
				'field_capacity' => $row['AM'], 
				'wilting_point' => $row['AN'], 
		
				'ph5' => $row['AO'],  
				'c5' => $row['AP'], 
				'n_tot5' => $row['AQ'], 
				'cn5' => $row['AR'], 
				'p_tot5' => $row['AS'], 
				'k_tot5' => $row['AT'], 
				'ktk5' => $row['AU'], 
				'mg5' => $row['AV'], 
				'ca5' => $row['AW'], 
				'pbray5' => $row['AX'], 
				'k5' => $row['AY'], 
				'na5' => $row['AZ'],  
				'htkr5' => $row['BA'], 
				'altkr5' => $row['BB'], 
			   
				'ph10' => $row['BC'], 
				'c10' => $row['BD'], 
				'n_tot10' => $row['BE'], 
				'cn10' => $row['BF'], 
				'p_tot10' => $row['BG'], 
				'k_tot10' => $row['BH'], 
				'ktk10' => $row['BI'], 
				'mg10' => $row['BJ'], 
				'ca10' => $row['BK'], 
				'pbray10' => $row['BL'], 
				'k10' => $row['BM'], 
				'na10' => $row['BN'],  
				'htkr10' => $row['BO'], 
				'altkr10' => $row['BP'], 
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