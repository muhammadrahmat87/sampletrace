<?php

/**
 * 
 */
class AuthLib
{
	
	public $isAuth = false;
	public $CI;

	function __construct(){
		$this->init();
	}

	function init(){
		$this->CI =& get_instance();
		if ($this->CI->session->userdata('isAuth')) {
			$this->isAuth = true;
		}
	}

	function checkAuth(){
		if (!$this->isAuth) {
			$this->CI->session->set_flashdata('message',  '<center> SESSION TELAH HABIS, <p> silahkan login terlebih dahulu!!!'); // Buat session flashdata
					redirect('authen');	
		}
	}
}