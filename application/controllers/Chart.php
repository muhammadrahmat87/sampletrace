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
        if ($allhabitat->num_rows() > 0) {
            foreach ($allhabitat->result_array() as $key => $value) {
                $count_habitat = $this->model_treatment->getDataField($filter, $value[$field], 3, $field); //count_semua_score
                $score = $this->model_treatment->getDataField($filter, $value[$field], 1, $field); //count score 1
                $percentage = round(($score / $count_habitat) * 100, 2);
                $detail_habitat[] = 
                [
                    'label' => $value[$field], 
                    'count' => $count_habitat, 
                    'score' => $score, 
                    'percentage' => $percentage
                ];
                $habitat[] = $value[$field];
                $result_habitat[] = $percentage;
            }
            $data = [
                'label' => $habitat,
                'data' => $result_habitat,
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
    public function index()
    {
        $filter = $this->input->post('value');
        $dataName = $this->input->post('dataName');
        $field = $this->input->post('field');
        if ($field == 'treatment_n' || $field == 'treatment_p' || $field == 'treatment_k') {
            
            $response =
                [
                'status' => 'success',
                'response' => 200,
                'value' => $filter,
                'data_chart' => $this->treatmentNPK($filter,$field,$dataName),
                'trial_code' => [
                    'label' => null,
                    'data' => null,
                ],
            ];
        } else {
            $trial_code = $this->model_treatment->trial_code('count', 1)->result_array();
            foreach ($trial_code as $key => $value) {
                $trial[] = $this->model_treatment->trial_code('non', $value['trial_code']);
            }

            $response =
                [
                'status' => 'success',
                'response' => 200,
                'value' => $filter,
                'data_chart' => $this->getData($filter, $field, $dataName),
                'trial_code' => [
                    'label' => $trial_code,
                    'data' => $trial,
                ],
            ];
        }

        echo json_encode($response);
    }
    public function treatmentNPK($filter,$field,$name)
    {
        if ($field=='treatment_n') {
            $code_name='N';
        } elseif ($field=='treatment_p') {
            $code_name='P';
        } elseif ($field=='treatment_k') {
            $code_name='K';
        }
        for ($i=1; $i <=3 ; $i++) {
            // for label
            $label[]= $code_name.$i;
            // search with model
            $count_habitat = $this->model_treatment->getDataField($filter, $i, 3, $field);
            $score = $this->model_treatment->getDataField($filter, $i, 1, $field);
            if ($score==0 ||$count_habitat==0) {
                $percentage=0;
            } else {
            $percentage = round(($score / $count_habitat) * 100, 2);
            }
            $detail_habitat[]=
                [
                    'count' => $count_habitat,
                    'label' => $code_name.$i,
                    'percentage' => $percentage,
                    'score'=>$score,
            ];
            $result_habitat[] =$percentage;
        }
        $result = [
            'data' => $result_habitat,
            'detail' =>$detail_habitat,
            'label' => $label,
        ];
        return $result;
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
