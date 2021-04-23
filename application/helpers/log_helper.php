<?php

 
 



function helper_log($tipe = "", $str = "", $loc = "", $file = ""){
    $CI =& get_instance();
 
    if (strtolower($tipe) == "login"){
        $log_tipe   = 0;
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = 1;
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = 2;
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe  = 3;
		}
	elseif(strtolower($tipe) == "import"){
        $log_tipe  = 4;
    }
    else{
        $log_tipe  = 5;
    }
 
    // paramter
    $param['log_user']      = $CI->session->userdata('nama_lengkap');
    $param['log_tipe']      = $log_tipe;
    $param['log_desc']      = $str;
    $param['log_location']      = $loc;
    $param['log_file']      = $file;
 
    //load model log
    $CI->load->model('m_log');
 
    //save to database
    $CI->m_log->save_log($param);
 
}
?>