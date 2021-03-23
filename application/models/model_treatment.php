<?php

class Model_treatment extends CI_Model
{

    public $table = "treatment";
    public $colum_order = [null, "id", "trial_code", "treatment", "time_squence", "days_after", "replicate", "habitat_type", "baits", "hole", "score", "success"];
    public $column_search = ["id", "trial_code", "treatment", "time_squence", "days_after", "replicate", "habitat_type", "baits", "hole", "score", "success"];
    public $order = ['id' => 'desc'];
// server side
    public function get_datatables_query($post)
    {
        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if ($post['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $post['search']['value']);
                } else {
                    $this->db->or_like($item, $post['search']['value']);
                }
                if (count($this->column_search) - 1 == $i) //last loop
                {
                    $this->db->group_end();
                }
                //close bracket
            }
            $i++;
        }

        if (isset($post['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$post['order']['0']['column']], $post['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = ['id' => 'asc'];
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

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

    public function save()
    {
        $data = array(
            //tabel di database => name di form

            'score' => $this->input->post('score', true),
        );
        $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $data = array(
            'trial_code' => $this->input->post('trial_code', true),
            'title' => $this->input->post('title', true),
            'location' => $this->input->post('location', true),
            'block' => $this->input->post('block', true),
            'palm_age' => $this->input->post('palm_age', true),
            'start' => $this->input->post('start', true),
            'finish' => $this->input->post('finish', true),
            'tot_treatment' => $this->input->post('tot_treatment', true),
            'tot_time_squence' => $this->input->post('tot_time_squence', true),
            'tot_habitat_type' => $this->input->post('tot_habitat_type', true),
            'tot_baits' => $this->input->post('tot_baits', true),
            'tot_hole' => $this->input->post('tot_hole', true),
            'last_update' => $this->input->post('last_update', true),
        );

        $kode = $this->input->post('trial_code');
        $this->db->where('trial_code', $kode);
        $this->db->update($this->table, $data);
    }

    // Fungsi untuk melakukan proses upload file
    public function upload_csv($filename)
    {
        $this->load->library('upload'); // Load librari upload

        $config['upload_path'] = './csv/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;

        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
    public function insert_multiple($data)
    {
        $this->db->insert_batch('trials', $data);
    }
    public function updateScore($id, $object)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $object);

    }

    public function filterSelect($object)
    {
        $this->db->select($object);
        $this->db->from($this->table);
        $this->db->distinct($object);
        return $this->db->get()->result_array();

    }
    public function organicMaterial($location, $treatment_om)
    {

        $this->db->select('id');
        $this->db->from($this->table);
        if ($location !== "all") {
            $this->db->where('trial_code', $location);
        }
        $this->db->where('treatment_om', $treatment_om);
        return $this->db->count_all_results();

    }
    public function getHabitat($location, $habitat,$score)
    {

        $this->db->select('id');
        $this->db->from($this->table);
        if ($location !== "all") {
            $this->db->where('trial_code', $location);
        }
        if ($score!==3) {
            $this->db->where('score', $score);
            
        }
        $this->db->where('habitat_type', $habitat);
        return $this->db->count_all_results();

    }
    public function getOM($location, $om,$score)
    {

        $this->db->select('id');
        $this->db->from($this->table);
        if ($location !== "all") {
            $this->db->where('trial_code', $location);
        }
        if ($score!==3) {
            $this->db->where('score', $score);
            
        }
        $this->db->where('treatment_om', $om);
        return $this->db->count_all_results();

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
 
    public function findField($filter)
    {
        $this->db->from($this->table);
        if ($filter!=="all") {
            $this->db->where('trial_code', $filter);
            
        }
        $this->db->select('habitat_type');
        $this->db->distinct('habitat_type');
        return $this->db->get()->result_array();
        
    }

    public function findOM($filter)
    {
        $this->db->from($this->table);
        if ($filter!=="all") {
            $this->db->where('trial_code', $filter);
            
        }
        $this->db->select('treatment_om');
        $this->db->distinct('treatment_om');
        return $this->db->get()->result_array();
        
    }

    

    

}
