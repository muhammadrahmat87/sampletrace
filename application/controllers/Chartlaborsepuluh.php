<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chartlaborsepuluh extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_laborsepuluh', 'model_laborsepuluh');
        $this->load->model('Model_viewdata', 'model_viewdata');

    }
    public function getData($filter, $field, $name)
    {
        $allhabitat = $this->model_laborsepuluh->findField($filter, $field); //menghitung jumlah per trial code
        $fieldReference = ['ph10', 'c10', 'n_tot10', 'cn10', 'p_tot10','k_tot10', 'ktk10', 'mg10', 'ca10', 'pbray10', 'k10', 'na10', 'htkr10', 'altkr10'];
        if ($allhabitat->num_rows() > 0) {
            foreach ($allhabitat->result_array() as $key => $value) {

                $ph10 = $this->count_percentage($filter, $value[$field], $fieldReference[0], $field)['average'];
                $c10 = $this->count_percentage($filter, $value[$field], $fieldReference[1], $field)['average'];
                $n_tot10 = $this->count_percentage($filter, $value[$field], $fieldReference[2], $field)['average'];
                $cn10 = $this->count_percentage($filter, $value[$field], $fieldReference[3], $field)['average'];
                $p_tot10 = $this->count_percentage($filter, $value[$field], $fieldReference[4], $field)['average'];
				$k_tot10 = $this->count_percentage($filter, $value[$field], $fieldReference[10], $field)['average'];
                $ktk10 = $this->count_percentage($filter, $value[$field], $fieldReference[6], $field)['average'];
                $mg10 = $this->count_percentage($filter, $value[$field], $fieldReference[7], $field)['average'];
                $ca10 = $this->count_percentage($filter, $value[$field], $fieldReference[8], $field)['average'];
                $pbray10 = $this->count_percentage($filter, $value[$field], $fieldReference[9], $field)['average'];
				$k10 = $this->count_percentage($filter, $value[$field], $fieldReference[10], $field)['average'];
                $na10 = $this->count_percentage($filter, $value[$field], $fieldReference[11], $field)['average'];
                $htkr10 = $this->count_percentage($filter, $value[$field], $fieldReference[12], $field)['average'];
                $altkr10 = $this->count_percentage($filter, $value[$field], $fieldReference[13], $field)['average'];
                $detail_habitat[] =
                    [
                    'label' => $value[$field],
                    'ph10' => $ph10,
                    'c10' => $c10,
                    'n_tot10' => $n_tot10,
                    'cn10' => $cn10,
                    'p_tot10' => $p_tot10,
					'k_tot10' => $k_tot10,
                    'ktk10' => $ktk10,
                    'mg10' => $mg10,
                    'ca10' => $ca10,
                    'pbray10' => $pbray10,
					'k10' => $k10,
                    'na10' => $na10,
                    'htkr10' => $htkr10,
                    'altkr10' => $altkr10,
                ];
                $a_ph10[] = $ph10;
                $a_c10[] = $c10;
                $a_n_tot10[] = $n_tot10;
                $a_cn10[] = $cn10;
                $a_p_tot10[] = $p_tot10;
				$a_k_tot10[] = $k_tot10;
                $a_ktk10[] = $ktk10;
                $a_mg10[] = $mg10;
                $a_ca10[] = $ca10;
                $a_pbray10[] = $pbray10;
				$a_k10[] = $k10;
                $a_na10[] = $na10;
                $a_htkr10[] = $htkr10;
                $a_altkr10[] = $altkr10;
                $habitat[] = $value[$field];
            }
            $data = [
                'label' => $habitat,
                'data' => [
                    'a_ph10' => $a_ph10,
                    'a_c10' => $a_c10,
                    'a_n_tot10' => $a_n_tot10,
                    'a_cn10' => $a_cn10,
                    'a_p_tot10' => $a_p_tot10,
					'a_k_tot10' => $a_k_tot10,
                    'a_ktk10' => $a_ktk10,
                    'a_mg10' => $a_mg10,
                    'a_ca10' => $a_ca10,
                    'a_pbray10' => $a_pbray10,
					'a_k10' => $a_k10,
                    'a_na10' => $a_na10,
                    'a_htkr10' => $a_htkr10,
                    'a_altkr10' => $a_altkr10,
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
        $count = $this->model_laborsepuluh->getRata($filter, $habitat, $select, $field);
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
        $trial_code = $this->model_laborsepuluh->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_laborsepuluh->trial_code('non', $value['trial_code']);
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
