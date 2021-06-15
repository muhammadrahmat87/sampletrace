<?php

	class Daftarantrian extends CI_Controller
	{

		function __construct() 
		{
			   parent::__construct();
       			 checkAuth();
			$this->load->library('ssp');
			$this->load->model('model_daftarantrian');	 
			$this->load->library('form_validation');
		}
		
		function index()
    	{		
        $data['data'] = $this->model_daftarantrian->tampil_daftarantrian();	 
        $this->template->load('template', 'daftarantrian/view', $data);		
    	}	
		
		public function edit()
    {
        $this->form_validation->set_rules('kode', 'kode', 'required');
		$this->form_validation->set_rules('id_reg', 'id_reg', 'required');
		
        $this->form_validation->set_rules('status', 'status', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('Registration');
        }else{
            $data=array(
                "status"=>$_POST['status'],
            );
            $this->db->where('id_reg', $_POST['id_reg']);
            $this->db->update('tabel_data',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('Daftarantrian');
        }
    }
 
	}

?>