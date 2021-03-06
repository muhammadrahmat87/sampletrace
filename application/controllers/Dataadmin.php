<?php

	class Dataadmin extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			parent::__construct();
			//checkAksesModule();
			$this->load->library('ssp');
			$this->load->model('model_dataadmin');
		}
		
		function index()
    	{
        $data['data'] = $this->model_dataadmin->tampil_data();
        $this->template->load('template', 'dataadmin/view', $data);
		
    	}		

		function add()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_data();
				$this->model_dataadmin->save($uploadFoto);

				helper_log("add", "Menambahkan Trial", "Data");
				redirect('dataadmin');

				
			} else {
				$this->template->load('template', 'dataadmin/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_data();
				$this->model_dataadmin->update($uploadFoto);
				redirect('data');
			} else {
				$trial_code           = $this->uri->segment(3);
				$data['data'] = $this->db->get_where('tabel_data', array('kode' => $trial_code))->row_array();
				$this->template->load('template', 'data/edit', $data);

				helper_log("add", "Mengupdate Data Trial", "All data");
			}
		}

		function delete()
		{
			$trial_code = $this->uri->segment(3);
			if (!empty($trial_code)) {
				$this->db->where('kode', $trial_code);
				$this->db->delete('tabel_data');

				helper_log("delete", "Menghapus Data Trial", "All data");
			} 

			
			redirect('data');
		}

		function upload_foto_data()
		{
			//validasi foto yang di upload
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024;
            $this->load->library('upload', $config);

            //proses upload
            $this->upload->do_upload('userfile');
            $upload = $this->upload->data();
            return $upload['file_name'];
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
		      $upload  = $this->model_data->upload_file($this->filename);
		      
		      if($upload['result'] == "success"){ // Jika proses upload sukses
		        // Load plugin PHPExcel nya
		        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		        
		        $excelreader = new PHPExcel_Reader_Excel2007();

		         $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
       			 $sheet = $loadexcel->getActiveSheet()->toArray("", true, true ,true);
		        
		        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
		        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
		        $data['sheet'] = $sheet; 
		      }else{ // Jika proses upload gagal
		        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		      }
		    }
		    
		    $this->load->view('data/form', $data);
		  }

		  function import(){
		  	// Load plugin PHPExcel nya
		  	include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		    $excelreader = new PHPExcel_Reader_Excel2007();
   			 $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

		    
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
		       	 
				   		       
				 ));
		      }
		      
		      $numrow++; // Tambah 1 setiap kali looping
		    }
		    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		    $this->model_data->insert_multiple($data);
		    
		    redirect("data"); // Redirect ke halaman awal (ke controller siswa fungsi index)
		  }

	 
	}

?>