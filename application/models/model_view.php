<?php

class Model_view extends CI_Model
{

    public $table = "treatment";
    public $colum_order = [null, "id", "trial_code", "treatment", "time_squence", "days_after", "replicate", "habitat_type","baits","hole","score","success"];
    public $column_search = ["id","trial_code", "treatment", "time_squence", "days_after", "replicate", "habitat_type","baits","hole","score","success"];
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

    public function get_datatables($post)
    {
        if ($post['length'] != -1) {
            $this->db->limit($post['length'], $post['start']);
        }
        if ($post['trial_code']!=null) {
            $this->db->where('trial_code', $post['trial_code']);
        }
        if ($post['squence']!=null) {
            $this->db->where('time_squence', $post['squence']);
        }
        if ($post['replicate']!=null) {
            $this->db->where('replicate', $post['replicate']);
        }
        $this->get_datatables_query($post);
       
        return $this->db->get()->result();
    }

    public function count_filtered($post)
    {
        if ($post['trial_code']!=null) {
            $this->db->where('trial_code', $post['trial_code']);
        }
        if ($post['squence']!=null) {
            $this->db->where('time_squence', $post['squence']);
        }
        if ($post['replicate']!=null) {
            $this->db->where('replicate', $post['replicate']);
        }
        $this->get_datatables_query($post);
        
        return $this->db->get()->num_rows();
    }

    public function count_all($post)
    {
        $this->db->from($this->table);
        if ($post['trial_code']!=null) {
            $this->db->where('trial_code', $post['trial_code']);
        }
        if ($post['squence']!=null) {
            $this->db->where('time_squence', $post['squence']);
        }
        if ($post['replicate']!=null) {
            $this->db->where('replicate', $post['replicate']);
        }
        return $this->db->count_all_results();
    }
    public function tampil_view()
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

    public function filterTimesquence($object)
    {
        $this->db->select($object);
        $this->db->from($this->table);
      
        $this->db->distinct($object);
        return $this->db->get()->result_array();
        
    }
    
    function Trialcode()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('treatment')
          ->get()
          ->result();
    }

    function Time($id_kendaraan)
    {
        $this->db->where('trial_code', $id_kendaraan);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('treatment')
            ->get()
            ->result();
    }
    

}