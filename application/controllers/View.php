<?php

class View extends CI_Controller
{
    private $filename = "import_data"; // nama file .csv

    public function __construct()
    {
        parent::__construct();
        //checkAksesModule();
        $this->load->library('ssp');
        $this->load->model('model_view');
        $this->load->model('model_treatment');
        
    }

    
    public function saveScore(Type $var = null)
    {
        $id = $this->input->post('id');
        $insert = [
            'score' => $this->input->post('score'),
        ];
        $this->model_view->updateScore($id, $insert);
        $response = ['response' => 200, 'status' => 'success'];
        echo json_encode($response);
    }
    public function index()
    {
        $view['treatment'] = $this->model_view->tampil_view();
        // echo json_encode($treatment);
        $this->template->load('template', 'view/add', $view);
    }

    public function filterSelect(Type $var = null)
    {
        $data['trial_code']=$this->model_view->filterSelect('trial_code');
        $data['squence']=$this->model_view->filterTimesquence('time_squence');
        $data['replicate']=$this->model_view->filterSelect('replicate');
        $data['location']=$this->model_view->filterSelect('location');
        echo json_encode($data);
    }
 
    public function getview(Type $var = null)
    {
        
        $post = [
            'length' => $this->input->post('length'),
            'start' => $this->input->post('start'),
            'order' => $this->input->post('order'),
            'search' => $this->input->post('search'),
            'draw' => $this->input->post('draw'),
            "trial_code"=>$this->input->post('trial_code'),
            'squence'=>$this->input->post('squence'),
            'replicate'=>$this->input->post('replicate'),
        ];
        $list = $this->model_view->get_datatables($post);
        $data = [];
        $no = $post['start'];
         

        foreach ($list as $field) {
            $no++;
           
            $row = [];
            $row[] = $no;
            $row[] = $field->trial_code;
            $row[] = $field->title;
            $row[] = $field->location;
            $row[] = $field->block;
            $row[] = $field->palm_age;
			
			$row[] = $field->start;
            $row[] = $field->finish;
 
            $row[] = $field->treatment_om;
            $row[] = $field->treatment_rate;
            
            $row[] = $field->treatment_freq;
            $row[] = $field->treatment_slopes;
            $row[] = $field->treatment_mp;
            $row[] = $field->treatment_direction	;
            $row[] = $field->treatment_distance;
            $row[] = $field->treatment_position	;
            $row[] = $field->treatment_n;
            $row[] = $field->treatment_p;
            $row[] = $field->treatment_k;
            $row[] = $field->treatment_mg;
            $row[] = $field->gps;
           
            $row[] = $field->time_squence;
			$row[] = $field->days_after;
            $row[] = $field->replicate;
			$row[] = $field->degree;
			$row[] = $field->palm_number;
            $row[] = $field->habitat_type;
            $row[] = $field->baits;
            $row[] = $field->hole;
            $row[] = $field->score;
            $row[] = $field->soil_humidity;
            $row[] = $field->temperature;
			
            $row[] = $field->rainfall_during;
            $row[] = $field->rainfall_beforethree;
            $row[] = $field->rainfall_beforesix;
            $row[] = $field->bulk_density;
            $row[] = $field->porosity;
            $row[] = $field->agregate;
            $row[] = $field->field_capacity;
            $row[] = $field->wilting_point;
			
            $row[] = $field->ph5;
            $row[] = $field->c5;
            $row[] = $field->n_tot5;
            $row[] = $field->cn5;
            $row[] = $field->p_tot5;
            $row[] = $field->k_tot5;
            $row[] = $field->ktk5;
            $row[] = $field->mg5;
            $row[] = $field->ca5;
            $row[] = $field->pbray5;
            $row[] = $field->k5;
            $row[] = $field->na5;
			$row[] = $field->htkr5;
            $row[] = $field->altkr5;
            $row[] = $field->ph10;
            $row[] = $field->c10;
            $row[] = $field->n_tot10;
            $row[] = $field->cn10;
            $row[] = $field->p_tot10;
            $row[] = $field->k_tot10;
            $row[] = $field->ktk10;
            $row[] = $field->mg10;
            $row[] = $field->ca10;
            $row[] = $field->pbray10;
            $row[] = $field->k10;
            $row[] = $field->na10;
			$row[] = $field->htkr10;
            $row[] = $field->altkr10;
             
             
			 
 
            $data[] = $row;
        }
        $response = ['status' => 20, 'msg' => 'Data di datapatkan', 'draw' => $post['draw'], 'recordsTotal' => $this->model_view->count_all($post), 'recordsFiltered' => $this->model_view->count_filtered($post), 'data' => $data, "post" => $post];
        echo json_encode($response);
    }

}