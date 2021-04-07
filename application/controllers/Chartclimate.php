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
        $allhabitat = $this->model_climate->findField($filter, $field); //menghitung jumlah per trial code
        $fieldReference = ['soil_humidity', 'temperature', 'rainfall_during', 'rainfall_beforethree', 'rainfall_beforesix'];
        if ($allhabitat->num_rows() > 0) {
            foreach ($allhabitat->result_array() as $key => $value) {

                $soil_humidity = $this->count_percentage($filter, $value[$field], $fieldReference[0], $field)['average'];
                $temperature = $this->count_percentage($filter, $value[$field], $fieldReference[1], $field)['average'];
                $rainfall_during = $this->count_percentage($filter, $value[$field], $fieldReference[2], $field)['average'];
                $rainfall_beforethree = $this->count_percentage($filter, $value[$field], $fieldReference[3], $field)['average'];
                $rainfall_beforesix = $this->count_percentage($filter, $value[$field], $fieldReference[4], $field)['average'];
                $detail_habitat[] =
                    [
                    'label' => $value[$field],
                    'soil_humidity' => $soil_humidity,
                    'temperature' => $temperature,
                    'rainfall_during' => $rainfall_during,
                    'rainfall_beforethree' => $rainfall_beforethree,
                    'rainfall_beforesix' => $rainfall_beforesix,
                ];
                $a_soil_humidity[] = $soil_humidity;
                $a_temperature[] = $temperature;
                $a_rainfall_during[] = $rainfall_during;
                $a_rainfall_beforethree[] = $rainfall_beforethree;
                $a_rainfall_beforesix[] = $rainfall_beforesix;
                $habitat[] = $value[$field];
            }
            $data = [
                'label' => $habitat,
                'data' => [
                    'a_soil_humidity' => $a_soil_humidity,
                    'a_temperature' => $a_temperature,
                    'a_rainfall_during' => $a_rainfall_during,
                    'a_rainfall_beforethree' => $a_rainfall_beforethree,
                    'a_rainfall_beforesix' => $a_rainfall_beforesix,
                ],
                'detail' => $detail_habitat,
            ];
        } else {

            $data = [
                'label' => [],
                'data' => [],
                'detail' => [],
            ];
        }
        return $data;

    }
    public function count_percentage($filter, $habitat, $select, $field)
    {
        $count = $this->model_climate->getRata($filter, $habitat, $select, $field);
        $data = [];
        foreach ($count->result_array() as $key => $value) {
            $data[] = $value[$select];
        }
        $count_field = $count->num_rows();
        $sum_data = array_sum($data);
        $average = $sum_data / $count_field;
        $result = [
            'count' => $count_field,
            'data' => $sum_data,
            'average' => round($average, 2),
        ];
        return $result;
    }
    public function index()
    {
        $start = microtime(true);
        $filter = $this->input->post('value');
        $dataName = $this->input->post('dataName');
        $field = $this->input->post('field');
        $trial_code = $this->model_climate->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_climate->trial_code('non', $value['trial_code']);
        }

        $response =
            [
            'status' => 'success',
            'response' => 200,
            'data_chart' => $this->getData($filter, $field, $dataName),
            'trial_code' => [
                'label' => $trial_code,
                'data' => $trial,
            ],
            'time_executed' => microtime(true) - $start,
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
