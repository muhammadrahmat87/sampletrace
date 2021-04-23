<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chartlaborlima extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_laborlima', 'model_laborlima');
        $this->load->model('Model_viewdata', 'model_viewdata');

    }
    public function getData($filter, $field, $name)
    {
        $allhabitat = $this->model_laborlima->findField($filter, $field); //menghitung jumlah per trial code
        $fieldReference = ['ph5', 'c5', 'n_tot5', 'cn5', 'p_tot5','k_tot5', 'ktk5', 'mg5', 'ca5', 'pbray5', 'k5', 'na5', 'htkr5', 'altkr5'];
        if ($allhabitat->num_rows() > 0) {
            foreach ($allhabitat->result_array() as $key => $value) {

                $ph5 = $this->count_percentage($filter, $value[$field], $fieldReference[0], $field)['average'];
                $c5 = $this->count_percentage($filter, $value[$field], $fieldReference[1], $field)['average'];
                $n_tot5 = $this->count_percentage($filter, $value[$field], $fieldReference[2], $field)['average'];
                $cn5 = $this->count_percentage($filter, $value[$field], $fieldReference[3], $field)['average'];
                $p_tot5 = $this->count_percentage($filter, $value[$field], $fieldReference[4], $field)['average'];
				$k_tot5 = $this->count_percentage($filter, $value[$field], $fieldReference[5], $field)['average'];
                $ktk5 = $this->count_percentage($filter, $value[$field], $fieldReference[6], $field)['average'];
                $mg5 = $this->count_percentage($filter, $value[$field], $fieldReference[7], $field)['average'];
                $ca5 = $this->count_percentage($filter, $value[$field], $fieldReference[8], $field)['average'];
                $pbray5 = $this->count_percentage($filter, $value[$field], $fieldReference[9], $field)['average'];
				$k5 = $this->count_percentage($filter, $value[$field], $fieldReference[10], $field)['average'];
                $na5 = $this->count_percentage($filter, $value[$field], $fieldReference[11], $field)['average'];
                $htkr5 = $this->count_percentage($filter, $value[$field], $fieldReference[12], $field)['average'];
                $altkr5 = $this->count_percentage($filter, $value[$field], $fieldReference[13], $field)['average'];
                $detail_habitat[] =
                    [
                    'label' => $value[$field],
                    'ph5' => $ph5,
                    'c5' => $c5,
                    'n_tot5' => $n_tot5,
                    'cn5' => $cn5,
                    'p_tot5' => $p_tot5,
					'k_tot5' => $k_tot5,
                    'ktk5' => $ktk5,
                    'mg5' => $mg5,
                    'ca5' => $ca5,
                    'pbray5' => $pbray5,
					'k5' => $k5,
                    'na5' => $na5,
                    'htkr5' => $htkr5,
                    'altkr5' => $altkr5,
                ];
                $a_ph5[] = $ph5;
                $a_c5[] = $c5;
                $a_n_tot5[] = $n_tot5;
                $a_cn5[] = $cn5;
                $a_p_tot5[] = $p_tot5;
				$a_k_tot5[] = $k_tot5;
                $a_ktk5[] = $ktk5;
                $a_mg5[] = $mg5;
                $a_ca5[] = $ca5;
                $a_pbray5[] = $pbray5;
				$a_k5[] = $k5;
                $a_na5[] = $na5;
                $a_htkr5[] = $htkr5;
                $a_altkr5[] = $altkr5;
                $habitat[] = $value[$field];
            }
            $data = [
                'label' => $habitat,
                'data' => [
                    'a_ph5' => $a_ph5,
                    'a_c5' => $a_c5,
                    'a_n_tot5' => $a_n_tot5,
                    'a_cn5' => $a_cn5,
                    'a_p_tot5' => $a_p_tot5,
					'a_k_tot5' => $a_k_tot5,
                    'a_ktk5' => $a_ktk5,
                    'a_mg5' => $a_mg5,
                    'a_ca5' => $a_ca5,
                    'a_pbray5' => $a_pbray5,
					'a_k5' => $a_k5,
                    'a_na5' => $a_na5,
                    'a_htkr5' => $a_htkr5,
                    'a_altkr5' => $a_altkr5,
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
        $count = $this->model_laborlima->getRata($filter, $habitat, $select, $field);
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
        $trial_code = $this->model_laborlima->trial_code('count', 1)->result_array();
        foreach ($trial_code as $key => $value) {
            $trial[] = $this->model_laborlima->trial_code('non', $value['trial_code']);
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
