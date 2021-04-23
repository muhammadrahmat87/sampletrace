<?php

class Model_labor extends CI_Model
{

    public $table = "treatment";
    public $colum_order = [null, "id", "trial_code", "treatment", "time_squence", "days_after", "replicate", "habitat_type", "baits", "hole", "score", "success"];
    public $column_search = ["id", "trial_code", "treatment", "time_squence", "days_after", "replicate", "habitat_type", "baits", "hole", "score", "success"];
    public $order = ['id' => 'desc'];
// server side
   

    public function count_filtered($post)
    {
        $this->get_datatables_query($post);
        return $this->db->get()->num_rows();
    }

    public function count_all($post)
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    public function tampil_treatment()
    {
        $this->db->from($this->table);
        $this->db->limit(1);
        return $this->db->get();
    }

 

   
    public function filterSelect($object)
    {
        $this->db->select($object);
        $this->db->from($this->table);
        $this->db->distinct($object);
        return $this->db->get()->result_array();

    }
     
   
    public function trial_code($type, $code)
    {
        $this->db->from($this->table);
        $this->db->select('trial_code');
        if ($type == 'count') {
            $this->db->distinct('trial_code');
        } else {
            // $this->db->where('trial_code', $code);
        }
        if ($type == 'count') {
            return $this->db->get();
        } else {
            return $this->db->count_all_results();
        }

    }
 
 public function getCount($location, $habitat,$select,$field)
    {

        $this->db->select('bulk_density');                             //select_id
        $this->db->from($this->table);                       //from table treatment
        if ($location !== "all") {                           //filter = all
            $this->db->where('trial_code', $location);       //where trial code = all
        }
        // if ($soil!==3) {                                     //tidak sama dengan
        //     $this->db->where('soil_humidity', $soil);        //menghitung score (variable yang dihitung)
            
        // }
       return $this->db->where($field, $habitat);

    }

    public function getRata($location, $habitat,$select,$field)
    {

        $this->db->select($select);                             //select_id
        $this->db->from($this->table);                       //from table treatment
        if ($location !== "all") {                           //filter = all
            $this->db->where('trial_code', $location);       //where trial code = all
        }
        // if ($soil!==3) {                                     //tidak sama dengan
        //     $this->db->where('soil_humidity', $soil);        //menghitung score (variable yang dihitung)
            
        // }
        $this->db->where($field, $habitat);
        return $this->db->get();

    }

    public function findField($filter,$field)               
    {
        $this->db->from($this->table);
        if ($filter!=="all") {
            $this->db->where('trial_code', $filter);        //trial code = all (filter)
        }
        $this->db->where($field."!='' ");                   //$field = habitat, treatment
        
        $this->db->select($field);
        $this->db->distinct($field);
       
        return $this->db->get();
        
    }

     

    


}
