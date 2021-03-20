<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_treatment', 'model_treatment');

    }

    public function index()
    {
        $filter = $this->input->post('value');
        $treatment_om = ["Control", "EFB"];
        foreach ($treatment_om as $key => $value) {
            $result_treatment_om[] = $this->model_treatment->organicMaterial($filter, $value);
        }
        $bait=['Control',"Control inclined","Inside EFB","under EFB inclined","Between EFB-Soil","under EFB"];
        foreach ($bait as $key => $value) {
            $result_bait[]=$this->model_treatment->getHabitat($filter,$value);
        }
        $response =
            [
            'status' => 'success',
            'response' => 200,
            'organic_material' => [
                'label'=>$treatment_om,
                'data'=>$result_treatment_om
            ],
            'habitat'=>[
                'label'=>$bait,
                'data'=>$result_bait
            ]
        ];
         echo json_encode($response);
    }

}

/* End of file  Chart.php */
