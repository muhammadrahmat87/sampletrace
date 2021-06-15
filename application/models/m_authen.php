<?php
 
	class M_authen extends CI_Model
	{

		public $table = "user_balamina";
		
		// mengambil data $username & $password dari hasil parsing controller Auth function check_login() dan mencocokanya dengan data yang ada di database
		function login($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$user = $this->db->get('user_balamina')->row_array();
			return $user;
		}

	 
	}

?>