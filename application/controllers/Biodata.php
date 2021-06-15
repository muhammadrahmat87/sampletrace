<?php

	class Biodata extends CI_Controller
	{
		private $filename = "biodata"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			checkAuth();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_biodata');
			
		}
		
		function index()
    	{	
        $biodata['biodata'] = $this->model_biodata->tampil_biodata();
        $this->template->load('template', 'biodata/view', $biodata);
		
    	}	
 
		function form(){
		    $data = array(); // Buat variabel $data sebagai array
		    
		    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
		      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
		      $upload  = $this->model_biodata->upload_file($this->filename);
		      
		      if($upload['result'] == "success"){ // Jika proses upload sukses
		        // Load plugin PHPExcel nya
		        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		        $excelreader = new PHPExcel_Reader_Excel2007();
		         $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
       			 $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		         $data['sheet'] = $sheet; 
		      }else{ // Jika proses upload gagal
		        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		      }
		    }
			$this->template->load('template', 'biodata/form', $data);  
		  }

		  function import(){
		  	// Load plugin PHPExcel nya
		  	include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		    $excelreader = new PHPExcel_Reader_Excel2007();
   			$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    		$sheet = $loadexcel->getActiveSheet()->toArray("", true, true ,true);
		    $data = array();	    
		    $numrow = 0;
		    foreach($sheet as $row){
		      // Cek $numrow apakah lebih dari 1
		      // Artinya karena baris pertama adalah nama-nama kolom
		      // Jadi dilewat saja, tidak usah dibiodata
		      if($numrow > 1){
		        // START -->
		        // Skrip untuk mengambil value nya
		      
		        // Kita push (add) array data ke variabel data
		       array_push($data, array(      	 
				'nama' => $row['A'],
				'nik' => $row['B'],
				'section' =>$row['C'],
				'hp' =>$row['D'],
				 
				 ));
		      }
		      
		      $numrow++; // Tambah 1 setiap kali looping
		    }
		    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		    $this->model_biodata->insert_multiple($data);    
		    redirect("biodata"); // Redirect ke halaman awal (ke controller siswa fungsi index)
		  }

	 
	}

?>