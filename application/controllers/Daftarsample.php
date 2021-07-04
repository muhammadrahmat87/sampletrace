<?php

	class Daftarsample extends CI_Controller
	{

        
		function __construct() 
		{
			   parent::__construct();
       			 checkAuth();
			$this->load->library('ssp');
			$this->load->model('model_daftarsample');	 
			$this->load->library('form_validation');
		}
		
        function delete()
        {

            $this->db->empty_table('table_sample');
            return('daftarsample');
        }
		function index()
    	{		
            $quser = 'SELECT COUNT(*) AS hasil FROM tabel_data where status = "Menunggu"';
            $data['suratmasuk'] = $this->db->query($quser)->row_array();
        
            $quser = 'SELECT COUNT(*) AS hasil FROM tabel_data where status = "Sample Diterima Admin"';
            $data['suratditerima'] = $this->db->query($quser)->row_array();
    
            $quser = 'SELECT COUNT(*) AS hasil FROM tabel_data where status = "Menunggu Konfirmasi Batch"';
            $data['suratdisample'] = $this->db->query($quser)->row_array();
    
            $quser = 'SELECT COUNT(*) AS hasil FROM table_sample';
            $data['samplemasuk'] = $this->db->query($quser)->row_array();

            $data['surat'] = $this->model_daftarsample->tampil_daftarsurat();	
            $data['data'] = $this->model_daftarsample->tampil_daftarsample();	
             
            $this->template->load('template', 'daftarsample/view', $data);		
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
            redirect('Daftarsample');
        }
    }
 
	}

?>