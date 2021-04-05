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
            $count_habitat = $this->model_treatment->getDataField($filter, $value[$field], 3, $field); //count_semua_score
            $score = $this->model_treatment->getDataField($filter, $value[$field], 1, $field); //count score 1
            $percentage = round(($score / $count_habitat) * 100, 2);
            $detail_habitat[] = ['label' => $value[$field], 'count' => $count_habitat, 'score' => $score, 'percentage' => $percentage];
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
        $dataName=$this->input->post('dataName');
        $field=$this->input->post('field');
        $trial_code = $this->model_treatment->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_treatment->trial_code('non', $value['trial_code']);
        }

        $response =
            [
            'status' => 'success',
            'response' => 200,
            'value' => $filter,
            'data_chart'=> $this->getData($filter, $field, $dataName),
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
