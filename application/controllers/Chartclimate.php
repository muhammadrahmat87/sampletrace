<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chartclimate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_climate', 'model_climate');
        $this->load->model('Model_viewdata', 'model_viewdata');

    }
    public function getData($filter, $field, $name)
    {
        $allhabitat = $this->model_climate->findField($filter, $field);  //menghitung jumlah per trial code
        if ($allhabitat->num_rows()>0) {
        foreach ($allhabitat->result_array() as $key => $value) {
            $count_soil = $this->model_climate->getCount($filter, $value[$field], 3, $field);  //menghitung baris score
            $soil = $this->model_climate->getRata($filter, $value[$field], 3, $field); //menghitung score = 1 , $field = habitat, treatment
             
            $percentage  = round(($soil / $count_soil) * 100, 2);
            $detail_habitat[] = ['label' => $value[$field], 'count' => $count_soil, 'soil_humidity' => $soil, 'percentagesh' => $percentage, 'percentagest' => $percentage, 'percentage' => $percentage];
            
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
        $trial_code = $this->model_climate->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_climate->trial_code('non', $value['trial_code']);
        }

        $response =
            [
            'status' => 'success',
            'response' => 200,

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
