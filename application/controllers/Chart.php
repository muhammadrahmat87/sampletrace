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
        $treatment_om = ["Control", "EFB"];
        foreach ($treatment_om as $key => $value) {
            $result_treatment_om[] = $this->model_treatment->organicMaterial($filter, $value);
        }
        $allhabitat = $this->model_treatment->findField($filter);
        foreach ($allhabitat as $key => $value) {
            $count_habitat = $this->model_treatment->getHabitat($filter, $value['habitat_type'],3);
            $score=$this->model_treatment->getHabitat($filter, $value['habitat_type'],1);
            $percentage=($score/$count_habitat)*100;
            $detail_habitat[] = ["habitat" => $value['habitat_type'], 'count' => $count_habitat,'score'=>$score,'percentage'=>$percentage];
            $habitat[] = $value['habitat_type'];
            $result_habitat[] = $percentage;
        }
        $trial_code = $this->model_treatment->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_treatment->trial_code('non', $value['trial_code']);
        }

        $response =
            [
            'status' => 'success',
            'response' => 200,
            'organic_material' => [
                'label' => $treatment_om,
                'data' => $result_treatment_om,
            ],
            'habitat' => [
                'label' => $habitat,
                'data'=>$result_habitat,
                'detail' => $detail_habitat,
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
