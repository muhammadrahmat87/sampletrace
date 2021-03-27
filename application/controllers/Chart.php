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
    public function getData($filter, $field, $name)
    {
        $allhabitat = $this->model_treatment->findField($filter, $field);
        if ($allhabitat->num_rows()>0) {
        foreach ($allhabitat->result_array() as $key => $value) {
            $count_habitat = $this->model_treatment->getDataField($filter, $value[$field], 3, $field);
            $score = $this->model_treatment->getDataField($filter, $value[$field], 1, $field);
            $percentage = round(($score / $count_habitat) * 100, 2);
            $detail_habitat[] = [$name => $value[$field], 'count' => $count_habitat, 'score' => $score, 'percentage' => $percentage];
            $habitat[] = $value[$field];
            $result_habitat[] = $percentage;
        }
        $data = [
            'label' => $habitat,
            'data' => $result_habitat,
            'detail' => $detail_habitat,
        ];
    }
        else{
            
            $data=[
                'label'=>[],
                'data'=>[],
                'detail'=>[]
            ];
        }
        return $data;

    }
    public function index()
    {
        $filter = $this->input->post('value');
        $trial_code = $this->model_treatment->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_treatment->trial_code('non', $value['trial_code']);
        }

        $response =
            [
            'status' => 'success',
            'response' => 200,

            'habitat' => $this->getData($filter, "habitat_type", "habitat"),
            'om' => $this->getData($filter, "treatment_om", "om"),
            'freq' => $this->getData($filter, "treatment_freq", "freq"),
            'slopes' => $this->getData($filter, "treatment_slopes", "slopes"),
            'mp' => $this->getData($filter, "treatment_mp", "mp"),
            'distance' => $this->getData($filter, "treatment_distance", "distance"),
            'direction' => $this->getData($filter, "treatment_direction", "direction"),
            'position' => $this->getData($filter, "treatment_position", "position"),
            'n' => $this->getData($filter, "treatment_n", "n"),
            'p' => $this->getData($filter, "treatment_p", "p"),
            'k' => $this->getData($filter, "treatment_k", "k"),
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
