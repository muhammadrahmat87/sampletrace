<?php

	class Registrasi extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			   parent::__construct();
       			 checkAuth();
			$this->load->library('ssp');
			$this->load->model('model_registrasi');
			$this->load->model('model_biodata');
			$this->load->library('form_validation');
		}
		
		function index()
    	{	
        $data['data'] = $this->model_registrasi->tampil_data();	 
        $this->template->load('template', 'registrasi/view', $data);	
    	}		

		public function inputBarang()
		{
			$this->load->model('model_registrasi');
			$id_reg = $this->model_registrasi->CreateCode();
			echo $id_reg;   
		}
		function add()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_data();
				$this->model_registrasi->save($uploadFoto);
				helper_log("add", "Menambahkan Trial", "Data");
				redirect('registrasi');				
			} else {
				$data['kodeunik'] = $this->model_registrasi->buat_kode();
				$data['data'] = $this->model_registrasi->get_nama();
				$this->template->load('template', 'registrasi/add', $data);
			}
		}

		public function edit()
    {
        $this->form_validation->set_rules('kode', 'kode', 'required');
		$this->form_validation->set_rules('id_reg', 'id_reg', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('registrasi');
        }else{
            $data=array(
                "status"=>$_POST['status'],
            );
            $this->db->where('id_reg', $_POST['id_reg']);
            $this->db->update('tabel_data',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('registrasi');
        }
    }
	public function editurgensi()
    {
        $this->form_validation->set_rules('kode', 'kode', 'required');
		$this->form_validation->set_rules('id_reg', 'id_reg', 'required');
        $this->form_validation->set_rules('urgensi', 'urgensi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('registrasi');
        }else{
            $data=array(
                "urgensi"=>$_POST['urgensi'],
            );
            $this->db->where('id_reg', $_POST['id_reg']);
            $this->db->update('tabel_data',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('registrasi');
        }
    }

		function edited()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_data();
				$this->model_registrasi->update($uploadFoto);
				redirect('registrasi');
			} else {
				$trial_code           = $this->uri->segment(3);
				$data['data'] = $this->db->get_where('tabel_data', array('kode' => $trial_code))->row_array();
				$this->template->load('template', 'registrasi/', $data);
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

			
			redirect('registrasi');
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

	 
	 
	}

?>