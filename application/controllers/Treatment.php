<?php

class Treatment extends CI_Controller
{
    private $filename = "import_data"; // nama file .csv

    public function __construct()
    {
        parent::__construct();
        //checkAksesModule();
        $this->load->library('ssp');
        $this->load->model('model_treatment');
        $this->load->model('model_trials');
        
    }
    public function saveScore(Type $var = null)
    {
        $id = $this->input->post('id');
        $insert = [
            'score' => $this->input->post('score'),
        ];
        $this->model_treatment->updateScore($id, $insert);
        $response = ['response' => 200, 'status' => 'success'];
        echo json_encode($response);
    }
    public function index()
    {
        $treatment['treatment'] = $this->model_treatment->tampil_treatment();
        // echo json_encode($treatment);
        $this->template->load('template', 'treatment/add', $treatment);
    }

    
    public function filter(Type $var = null)
    {
        $trialCode = $this->input->post('trialcode');
        
        $stime = $this->input->post('stime');
        $sreplicate = $this->input->post('sreplicate');
        $shabitat = $this->input->post('shabitat');
        $data = [
            'trialcode' => $trialCode,
            
            'stime' => $stime,
            'sreplicate' => $sreplicate,
            'shabitat' => $shabitat,
        ];
        $treatment['treatment'] = $this->model_treatment->filterData($data);
        $this->template->load('template', 'treatment/add', $treatment);

    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_treatment();
            $this->model_treatment->save($uploadFoto);
            redirect('treatment');
        } else {
            $this->template->load('template', 'treatment/add');
        }
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_treatment();
            $this->model_treatment->update($uploadFoto);
            redirect('treatment');
        } else {
            $trial_code = $this->uri->segment(3);
            $data['treatment'] = $this->db->get_where('treatment', array('trial_code' => $trial_code))->row_array();
            $this->template->load('template', 'treatment/edit', $data);
        }
    }

    public function delete()
    {
        $trial_code = $this->uri->segment(3);
        if (!empty($trial_code)) {
            $this->db->where('trial_code', $trial_code);
            $this->db->delete('treatment');
        }
        redirect('treatment');
    }

    public function export_excel()
    {
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');

        $kelas = $_POST['kelas'];
        $this->db->where('kd_kelas', $kelas);
        $siswa = $this->db->get('tbl_siswa');
        $no = 2;
        foreach ($siswa->result() as $row) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $no, $row->nim);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $no, $row->nama);
            $no++;
        }

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save("data-siswa.xlsx");
        $this->load->helper('download');
        force_download('data-siswa.xlsx', null);
    }

    public function form()
    {
        $data = array(); // Buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
            $uploadcsv = $this->model_siswa->upload_csv($this->filename);

            if ($uploadcsv['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $csvreader = PHPExcel_IOFactory::createReader('CSV');
                $loadcsv = $csvreader->load('csv/' . $this->filename . '.csv'); // Load file yang tadi diupload ke folder csv
                $sheet = $loadcsv->getActiveSheet()->getRowIterator();

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $uploadcsv['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $this->load->view('siswa/form', $data);
    }

   
    public function getTreatment(Type $var = null)
    {
        
        $filter=str_replace("%"," ",$this->input->post("filter"));
        $filter=explode("&",$filter);
        if ($this->input->post('filter')=="") {
            $filter2=false;
        } else{
            foreach ($filter as $key => $value) {
                $explode=explode("=",$value);
                $filter2[$explode[2]]=$explode[3];
            }
        }
        
        $post = [
            'length' => $this->input->post('length'),
            'start' => $this->input->post('start'),
            'order' => $this->input->post('order'),
            'search' => $this->input->post('search'),
            'draw' => $this->input->post('draw'),
            'filter' => $filter2,
        ];
        $list = $this->model_treatment->get_datatables($post);
        $data = [];
        $no = $post['start'];
        foreach ($list as $field) {
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $field->trial_code;
            
            $row[] = $field->time_squence;
            $row[] = $field->replicate;
            $row[] = $field->habitat_type;
            $row[] = $field->baits;
            $row[] = $field->hole;
            $row[] = $field->score;
			
            $data[] = $row;
        }
        $response = ['status' => 20, 'msg' => 'Data di datapatkan', 'draw' => $post['draw'],'filter'=>$filter2, 'recordsTotal' => $this->model_treatment->count_all($post), 'recordsFiltered' => $this->model_treatment->count_filtered($post), 'data' => $data, "post" => $post];
        echo json_encode($response);
    }
    public function getTrials(Type $var = null)
    {
        $data=$this->model_trials->getTrials()->result_array();
        $response=['response'=>200,'status'=>'success','data'=>$data,];
        echo json_encode($response);
    }
    public function findTrials(Type $var = null)
    {
        $trial_code=$this->input->post('id');
        $trials=$this->model_trials->findTrials($trial_code)->row_array();
         $tot_replicate=str_replace(" ","",$trials['tot_replicate']);
        $tot_time_squence=str_replace(" ","",$trials['tot_time_squence']);
		
        $data=[
            'trial_code'=>$trials['trial_code'],
           'tot_replicate'=>explode(",",$tot_replicate),
            'tot_time_squence'=>explode(",",$tot_time_squence),
			
        ];
        $response=['response'=>200,'status'=>'success','data'=>$data,];
        echo json_encode($response);
    }

}