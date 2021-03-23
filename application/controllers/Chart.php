<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_treatment', 'model_treatment');
        $this->load->model('Model_viewdata', 'model_viewdata');

    }

    public function index()
    {
        $filter = $this->input->post('value');
       
        $allhabitat = $this->model_treatment->findField($filter);
        foreach ($allhabitat as $key => $value) {
            $count_habitat = $this->model_treatment->getHabitat($filter, $value['habitat_type'],3);
            $score=$this->model_treatment->getHabitat($filter, $value['habitat_type'],1);
            $percentage=round(($score/$count_habitat)*100,2);
            $detail_habitat[] = ["habitat" => $value['habitat_type'], 'count' => $count_habitat,'score'=>$score,'percentage'=>$percentage];
            $habitat[] = $value['habitat_type'];
            $result_habitat[] = $percentage;
        }

        
        $all_om = $this->model_treatment->findOM($filter);
        foreach ($all_om as $key => $value) {
            $count_om = $this->model_treatment->getOM($filter, $value['treatment_om'],3);
            $score=$this->model_treatment->getOM($filter, $value['treatment_om'],1);
            $percentage=round(($score/$count_om)*100,2);
            $detail_om[] = ["om" => $value['treatment_om'], 'count' => $count_om,'score'=>$score,'percentage'=>$percentage];
            $om[] = $value['treatment_om'];
            $result_om[] = $percentage;
        }

        $trial_code = $this->model_treatment->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_treatment->trial_code('non', $value['trial_code']);
        }

        $response =
            [
            'status' => 'success',
            'response' => 200,
            
            'habitat' => [
                'label' => $habitat,
                'data'=>$result_habitat,
                'detail' => $detail_habitat,
            ],
            'om' => [
                'label' => $om,
                'data'=>$result_om,
                'detail' => $detail_om,
            ],
            'value' => $filter,
            'trial_code' => [
                'label' => $trial_code,
                'data' => $trial,
            ],
        ];
        echo json_encode($response);
    }
    public function filterSelect(Type $var = null)
    {
        $trial_code = $this->model_viewdata->filterSelect('trial_code');
        $response = [
            'status' => 'success',
            'response' => 200,
            'data' => [
                'trial_code' => $trial_code,
            ],
        ];
        echo json_encode($response);
    }

}

/* End of file  Chart.php */
