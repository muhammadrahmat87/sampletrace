<?php

if (!function_exists('format_indo')) {
  function format_indo($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun   ;

    return $result;
  }
  }
  
  if (!function_exists('format_indo_nohari')) {
  function format_indo_nohari($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result =  $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun   ;

    return $result;
  }
  }

if (!function_exists('format_indo_jam')) {
  function format_indo_jam($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result =  $waktu;

    return $result;
  }
  }

	function tanpa_tgl_indonesia($tgl){
  		$nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    
  		$tanggal = substr($tgl,8,2);
  		$bulan = $nama_bulan[(int)substr($tgl,5,2)];
  		$tahun = substr($tgl,0,4);
  
  		return $tahun;     
		}
		
		
		function hitung_mundur($wkt)

    	{

        $waktu=array(   365*24*60*60    => "tahun",
                        30*24*60*60     => "bulan",
                        7*24*60*60      => "minggu",
                        24*60*60        => "hari",
                        60*60           => "jam",
                        60              => "menit",
                        1               => "detik");

        $hitung = strtotime(gmdate ("Y-m-d H:i:s", time () +60 * 60 * 8))-$wkt;
        $hasil = array();

      if($hitung<5)

        {
            $hasil = 'kurang dari 5 detik yang lalu';
        }

        else
        {
            $stop = 0;

            foreach($waktu as $periode => $satuan)
            {
                if($stop>=6 || ($stop>0 && $periode<60)) break;

              $bagi = floor($hitung/$periode);

                if($bagi > 0)

                {
                    $hasil[] = $bagi.' '.$satuan;
                    $hitung -= $bagi*$periode;
                    $stop++;
                }

                else if($stop>0) $stop++;
            }

            $hasil=implode(' ',$hasil).' yang lalu';
        }

        return $hasil;
    }
 

		
		function cmb_dinamis($name, $table, $field, $pk, $selected=null, $extra=null)
	{
		$ci   = get_instance();
		$cmb  = "<select name='$name' class='form-control' $extra>";

		$data = $ci->db->get($table)->result();
		foreach ($data as $row) {
			$cmb .= "<option value='".$row->$pk."'";
			//Apabila $selected bernilai sama dengan nilai $pk maka akan bernilai selected selain itu akan bernilai null
			$cmb .= $selected == $row->$pk ? 'selected' : '';
			$cmb .= ">".$row->$field."</option>";
		}
		$cmb .= "</select>";

		return $cmb;
	}

 
	 

	 

?>