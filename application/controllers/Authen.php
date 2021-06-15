<?php

	class Authen extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			
			$this->load->model('m_login');
			 
		}
		
		function index()
		{

			if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      		redirect('page/welcome'); // Redirect ke page welcome

			$this->load->view('authen/login');
		}

		function check_login()
		{
			if (isset($_POST['submit'])) 
			{
				
				$username	= $this->input->post('username');
				$password 	= $this->input->post('password');
				
				$loginUser		= $this->m_login->login($username, $password);

				
				
				// $loginUser-> mengambil nilai dari $user yang ada di function login pada model_user, apabila data salah maka user tidak berisi dan $loginUser menjadi kosong
				// apablia $loginUser tidak kosong (memiliki data) maka akan membuat session dan redirect ke tampilan_utama
				if (!empty($loginUser)) {
				 
					// $this->session->set_userdata($loginUser); -> maksudnya mengset userdata yang mana datanya diambil dari $loginUser
					// $this->session->set_userdata($loginUser);
					// redirect('tampilan_utama');
						// $this->session->set_userdata($loginUser); -> maksudnya mengset userdata yang mana datanya diambil dari $loginUser
						$this->session->set_userdata($loginUser);
						$this->session->set_userdata('login_data',$loginUser);
						$this->session->set_userdata('isAuth',1);
	
						helper_log("login", "Login Aplikasi ", "Login");
						redirect('home');

				} 
				
				
				  else {
					$this->session->set_flashdata('message', '<center>Username / Password Salah!!!'); // Buat session flashdata
					redirect('authen');		
				}
			} else {
				redirect('authen');
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('authen');
		}

	}

?>