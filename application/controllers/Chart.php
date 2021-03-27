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

        $all_freq = $this->model_treatment->findfreq($filter);
        foreach ($all_freq as $key => $value) {
            $count_freq = $this->model_treatment->getFREQ($filter, $value['treatment_freq'],3);
            $score=$this->model_treatment->getFREQ($filter, $value['treatment_freq'],1);
            $percentage=round(($score/$count_freq)*100,2);
            $detail_freq[] = ["freq" => $value['treatment_freq'], 'count' => $count_freq,'score'=>$score,'percentage'=>$percentage];
            $freq[] = $value['treatment_freq'];
            $result_freq[] = $percentage;
        }

        $all_slopes = $this->model_treatment->findSLOPES($filter);
        foreach ($all_slopes as $key => $value) {
            $count_slopes = $this->model_treatment->getSLOPES($filter, $value['treatment_slopes'],3);
            $score=$this->model_treatment->getSLOPES($filter, $value['treatment_slopes'],1);
            $percentage=round(($score/$count_slopes)*100,2);
            $detail_slopes[] = ["slopes" => $value['treatment_slopes'], 'count' => $count_slopes,'score'=>$score,'percentage'=>$percentage];
            $slopes[] = $value['treatment_slopes'];
            $result_slopes[] = $percentage;
        }

        $all_mp = $this->model_treatment->findMP($filter);
        foreach ($all_mp as $key => $value) {
            $count_mp = $this->model_treatment->getMP($filter, $value['treatment_mp'],3);
            $score=$this->model_treatment->getMP($filter, $value['treatment_mp'],1);
            $percentage=round(($score/$count_mp)*100,2);
            $detail_mp[] = ["mp" => $value['treatment_mp'], 'count' => $count_mp,'score'=>$score,'percentage'=>$percentage];
            $mp[] = $value['treatment_mp'];
            $result_mp[] = $percentage;
        }

        $all_direction = $this->model_treatment->findDIRECTION($filter);
        foreach ($all_direction as $key => $value) {
            $count_direction = $this->model_treatment->getDIRECTION($filter, $value['treatment_direction'],3);
            $score=$this->model_treatment->getDIRECTION($filter, $value['treatment_direction'],1);
            $percentage=round(($score/$count_direction)*100,2);
            $detail_direction[] = ["direction" => $value['treatment_direction'], 'count' => $count_direction,'score'=>$score,'percentage'=>$percentage];
            $direction[] = $value['treatment_direction'];
            $result_direction[] = $percentage;
        }

        $all_distance = $this->model_treatment->findDISTANCE($filter);
        foreach ($all_distance as $key => $value) {
            $count_distance = $this->model_treatment->getDISTANCE($filter, $value['treatment_distance'],3);
            $score=$this->model_treatment->getDISTANCE($filter, $value['treatment_distance'],1);
            $percentage=round(($score/$count_distance)*100,2);
            $detail_distance[] = ["distance" => $value['treatment_distance'], 'count' => $count_distance,'score'=>$score,'percentage'=>$percentage];
            $distance[] = $value['treatment_distance'];
            $result_distance[] = $percentage;
        }

        $all_position = $this->model_treatment->findPOSITION($filter);
        foreach ($all_position as $key => $value) {
            $count_position = $this->model_treatment->getPOSITION($filter, $value['treatment_position'],3);
            $score=$this->model_treatment->getPOSITION($filter, $value['treatment_position'],1);
            $percentage=round(($score/$count_position)*100,2);
            $detail_position[] = ["position" => $value['treatment_position'], 'count' => $count_position,'score'=>$score,'percentage'=>$percentage];
            $position[] = $value['treatment_position'];
            $result_position[] = $percentage;
        }

        $all_n = $this->model_treatment->findN($filter);
        foreach ($all_n as $key => $value) {
            $count_n = $this->model_treatment->getN($filter, $value['treatment_n'],3);
            $score=$this->model_treatment->getN($filter, $value['treatment_n'],1);
            $percentage=round(($score/$count_n)*100,2);
            $detail_n[] = ["n" => $value['treatment_n'], 'count' => $count_n,'score'=>$score,'percentage'=>$percentage];
            $n[] = $value['treatment_n'];
            $result_n[] = $percentage;
        }

        $all_p = $this->model_treatment->findP($filter);
        foreach ($all_p as $key => $value) {
            $count_p = $this->model_treatment->getP($filter, $value['treatment_p'],3);
            $score=$this->model_treatment->getP($filter, $value['treatment_p'],1);
            $percentage=round(($score/$count_p)*100,2);
            $detail_p[] = ["p" => $value['treatment_p'], 'count' => $count_p,'score'=>$score,'percentage'=>$percentage];
            $p[] = $value['treatment_p'];
            $result_p[] = $percentage;
        }

        $all_k = $this->model_treatment->findK($filter);
        foreach ($all_k as $key => $value) {
            $count_k = $this->model_treatment->getK($filter, $value['treatment_k'],3);
            $score=$this->model_treatment->getK($filter, $value['treatment_k'],1);
            $percentage=round(($score/$count_k)*100,2);
            $detail_k[] = ["k" => $value['treatment_k'], 'count' => $count_k,'score'=>$score,'percentage'=>$percentage];
            $k[] = $value['treatment_k'];
            $result_k[] = $percentage;
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

            'freq' => [
                'label' => $freq,
                'data'=>$result_freq,
                'detail' => $detail_freq,
            ],

            'slopes' => [
                'label' => $slopes ,
                'data'=>$result_slopes,
                'detail' => $detail_slopes,
            ],

            'mp' => [
                'label' => $mp ,
                'data'=>$result_mp,
                'detail' => $detail_mp,
            ],

            'distance' => [
                'label' => $distance ,
                'data'=>$result_distance,
                'detail' => $detail_distance,
            ],

            'direction' => [
                'label' => $direction ,
                'data'=>$result_direction,
                'detail' => $detail_direction,
            ],

            'position' => [
                'label' => $position ,
                'data'=>$result_position,
                'detail' => $detail_position,
            ],

            'n' => [
                'label' => $n ,
                'data'=>$result_n,
                'detail' => $detail_n,
            ],

            'p' => [
                'label' => $p ,
                'data'=>$result_p,
                'detail' => $detail_p,
            ],

            'k' => [
                'label' => $k ,
                'data'=>$result_k,
                'detail' => $detail_k,
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


