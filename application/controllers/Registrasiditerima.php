<?php

	class Registrasiditerima extends CI_Controller
	{

		function __construct() 
		{
			   parent::__construct();
       			 checkAuth();
			$this->load->library('ssp');
			$this->load->model('model_registrasiditerima');	 
			$this->load->library('form_validation');
            $this->load->library('excel');
            
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
            
        $data['data'] = $this->model_registrasiditerima->tampil_registrasiditerima();	 
        $this->template->load('template', 'registrasiditerima/view', $data);		
    	}	
		
		public function edit()
    {
        

        $this->form_validation->set_rules('kode', 'kode', 'required');
		$this->form_validation->set_rules('id_reg', 'id_reg', 'required');
		
        $this->form_validation->set_rules('status', 'status', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('Registrasiditerima');
        }else{
            $data=array(
                "status"=>$_POST['status'],
            );
            $this->db->where('id_reg', $_POST['id_reg']);
            $this->db->update('tabel_data',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('Registrasiditerima');
        }
    }

    function import($id){
        $this->load->library('session');

        $data = $this->model_registrasiditerima->tampil_registrasiditerimabyid($id)->result();

        

        $inputFileName ='./uploads/'.$data[0]->berkas;

         try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

      

            $res = array();

            if ($highestRow>0) {
                
            for ($row =14; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE); 

                $get_last_idlabor = $this->db->select("*")->from("table_sample")->order_by("kode","desc")->limit(1)->get()->row();

                    $id_labor = date('Y')."000001";

                    if (!empty($get_last_idlabor)) {

                        $str_lengt = substr($get_last_idlabor->id_labor, 4,6)+1;
                        
                        $num = str_pad($str_lengt, 6,0,STR_PAD_LEFT);
                        $id_labor = date('Y').$num;
                        
                    }

                    $no_sample = "1";

                    if (!empty($get_last_idlabor)) {

                        $str_lengt = substr($get_last_idlabor->id_labor, 4,6)+1;
                        
                        $num = str_pad($str_lengt, 1,0,STR_PAD_LEFT);
                        $no_sample = $num;
                        
                    }
        

                    $res = array(
                         // "kode"=>$data[0]->kode,
                         "id_reg"=>$data[0]->id_reg,
                         "id_labor"=>$id_labor,

                         "no_sample"=>$no_sample,
                         "date_sampling"=>  date('d-m-Y',PHPExcel_Shared_Date::ExcelToPHP($rowData[0][12])),
                         "fn"=> $rowData[0][2]."/".$rowData[0][10],
                         "plot"=> $no_sample."/".$rowData[0][2]."/".$rowData[0][10],

                         "pengirim"=>$data[0]->pengirim,
                         "no_permintaan"=>$data[0]->no_permintaan,
                         "tgl_surat"=>$data[0]->tgl_surat,
                         "kategori"=>$data[0]->kategori,
                         "urgensi"=>$data[0]->urgensi,
                         "jenis"=>$data[0]->jenis,
                         "lokasi"=>$data[0]->lokasi,
                         "jumlah"=>$data[0]->jumlah,
                         "permintaan"=>$data[0]->permintaan,
                         "tgl_kirim"=>$data[0]->tgl_kirim,
                         "division"=>empty($rowData[0][0]) ? 0 : $rowData[0][0],
                        "complex"=>empty($rowData[0][1]) ? 0 : $rowData[0][1],
                        "block"=>empty($rowData[0][2]) ? 0 : $rowData[0][2],
                        "topography"=>empty($rowData[0][3]) ? 0 : $rowData[0][3],
                        "fert"=>$rowData[0][4]."/".$rowData[0][5],
                        "soil_type"=>$rowData[0][6]."/".$rowData[0][7],
                        "leader_lsu"=>empty($rowData[0][8]) ? 0 : $rowData[0][8],
                        "group_lsu"=>empty($rowData[0][9]) ? 0 : $rowData[0][9],
                        "sample_code"=>empty($rowData[0][10]) ? 0 : $rowData[0][10],
                        "lab_code"=>empty($rowData[0][11]) ? 0 : $rowData[0][11],
                        "sample_date" => date('d-m-Y',PHPExcel_Shared_Date::ExcelToPHP($rowData[0][12])),
                        // "sample_date"=>empty($rowData[0][12]) ? 0 : $rowData[0][12],
                        "frond_no"=>empty($rowData[0][13]) ? 0 : $rowData[0][13],
                        "n"=> $rowData[0][14],
                        "p"=> $rowData[0][15],
                        "k"=> $rowData[0][16],
                        "mg"=> $rowData[0][17],
                        "ca"=> $rowData[0][18],
                        "mn"=> $rowData[0][19],
                        "b"=> $rowData[0][20],
                        "zn"=> $rowData[0][21],
                        "cu"=> $rowData[0][22],
                        "ci"=> $rowData[0][23],
                        "fe"=> $rowData[0][24],
                        "na"=> $rowData[0][25],
                        "ref_rfc"=>empty($rowData[0][26]) ? 0 : $rowData[0][26], //kalau empty nilainya 0 
                        "ref_lab"=>empty($rowData[0][27]) ? "-" : $rowData[0][27],
                        "berkas"=>$data[0]->berkas,
                        "status"=>'Menunggu Konfirmasi Batch',


                    );

                $this->db->insert('table_sample',$res); 

                $this->db->where('id_reg',$data[0]->id_reg);
                $this->db->update('tabel_data',array(
                    "status"=>"Menunggu Konfirmasi Batch"
                ));

 
                 // Sesuaikan key array dengan nama kolom di database                                                         
                      
            }

            }
            // echo '<pre>';
            // print_r($get_last_idlabor); komando latihan pertempuran di sini para rider dilahirkan
           //

           $this->session->set_flashdata('message','Data Berhasil Di Import'); 
           redirect('registrasiditerima');
    }

 
	}

?>