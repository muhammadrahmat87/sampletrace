<?php

	class Model_daftarantrian extends CI_Model
	{

		public $table ="tabel_data";
		
		function tampil_daftarantrian(){
        $hasil = $this->db->query("select * from tabel_data where status = 'Sample Diterima LAB' ");
        return $hasil;
		}

		 
		 

	}
	
?>