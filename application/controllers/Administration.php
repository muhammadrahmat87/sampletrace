<?php

	class Registration extends CI_Controller
	{
		private $filename = "import_data"; // nama file .csv
		
		function __construct() 
		{
			   parent::__construct();
       			 checkAuth();
			$this->load->library('ssp');
			$this->load->model('model_registration');
		}
		
		function index()
    	{
        $data['data'] = $this->model_registration->tampil_data();
        $this->template->load('template', 'registration/view', $data);
		
    	}		

		function add()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_data();
				$this->model_registration->save($uploadFoto);

				helper_log("add", "Menambahkan Trial", "Data");
				redirect('registration');

				
			} else {
				$this->template->load('template', 'registration/add');
			}
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$uploadFoto = $this->upload_foto_data();
				$this->model_registration->update($uploadFoto);
				redirect('registration');
			} else {
				$trial_code           = $this->uri->segment(3);
				$data['data'] = $this->db->get_where('tabel_data', array('kode' => $trial_code))->row_array();
				$this->template->load('template', 'registration/edit', $data);

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

			
			redirect('registration');
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