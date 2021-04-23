<?php

	class Model_activity extends CI_Model
	{

		public $table ="trials";
		
		
		function tampil_trials(){
        $hasil = $this->db->query("select * from tabel_log order by log_id desc");
        return $hasil;
		}


	}
?>