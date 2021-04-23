<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chartlabor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_labor', 'model_labor');
        $this->load->model('Model_viewdata', 'model_viewdata');

    }
    public function getData($filter, $field, $name)
    {
        $allhabitat = $this->model_labor->findField($filter, $field); //menghitung jumlah per trial code
        $fieldReference = ['bulk_density', 'porosity', 'agregate', 'field_capacity', 'wilting_point'];
        if ($allhabitat->num_rows() > 0) {
            foreach ($allhabitat->result_array() as $key => $value) {

                $bulk_density = $this->count_percentage($filter, $value[$field], $fieldReference[0], $field)['average'];
                $porosity = $this->count_percentage($filter, $value[$field], $fieldReference[1], $field)['average'];
                $agregate = $this->count_percentage($filter, $value[$field], $fieldReference[2], $field)['average'];
                $field_capacity = $this->count_percentage($filter, $value[$field], $fieldReference[3], $field)['average'];
                $wilting_point = $this->count_percentage($filter, $value[$field], $fieldReference[4], $field)['average'];
                $detail_habitat[] =
                    [
                    'label' => $value[$field],
                    'bulk_density' => $bulk_density,
                    'porosity' => $porosity,
                    'agregate' => $agregate,
                    'field_capacity' => $field_capacity,
                    'wilting_point' => $wilting_point,
                ];
                $a_bulk_density[] = $bulk_density;
                $a_porosity[] = $porosity;
                $a_agregate[] = $agregate;
                $a_field_capacity[] = $field_capacity;
                $a_wilting_point[] = $wilting_point;
                $habitat[] = $value[$field];
            }
            $data = [
                'label' => $habitat,
                'data' => [
                    'a_bulk_density' => $a_bulk_density,
                    'a_porosity' => $a_porosity,
                    'a_agregate' => $a_agregate,
                    'a_field_capacity' => $a_field_capacity,
                    'a_wilting_point' => $a_wilting_point,
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
        $count = $this->model_labor->getRata($filter, $habitat, $select, $field);
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
        $trial_code = $this->model_labor->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_labor->trial_code('non', $value['trial_code']);
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
