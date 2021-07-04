<html>
<head>
  <title>Form Import</title>
  
  <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</head>
<body>
  <h3>Form Import</h3>
  <hr>
  

  <br>
  <br>
  
  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
  <form method="post" action="<?php echo base_url("Trials/form"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <input type="file" name="file">
    
    <!--
    -- Buat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <input type="submit" name="preview" value="Preview">
  </form>
  
  <?php
  if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
    if(isset($upload_error)){ // Jika proses upload gagal
      echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
      die; // stop skrip
    }
    
    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='".base_url('Trials/import')."'>";
    
    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum terisi semua.
    </div>";
    
    echo "<table border='1' cellpadding='8'>
    <tr>
      <th colspan='23'>Preview Data</th>
    </tr>
    <tr>
	  <th>Trial Code</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Block</th>
                        <th>Palm Age</th>
						<th>Start</th>
						<th>Finish</th>
						 <th>Installation Date</th>
                        <th>Treatment Organic Material</th>
						<th>Treatment Rate</th>
						<th>Treatment Frequency</th>
						<th>Treatment Slopes</th>
						<th>Treatment Management Practices</th>
						<th>Treatment Direction</th>
						<th>Treatment Distance</th>
						<th>Treatment Position</th>
						<th>Treatment N</th>
						<th>Treatment P</th> 
						<th>Treatment K</th> 
						<th>Treatment Mg</th> 
						<th>Treatment GPS</th> 
						 
                        <th>Time Squence</th>
						<th>Days After Aplication</th>
                        <th>Replicate</th>
						<th>Degree</th>
						<th>Palm Number</th>
                        <th>Habitat Type</th>
                        <th >Bait ID</th>
                        <th >Hole</th>
                        <th >Bait Score</th>
                        <th >Soil Humidity</th>
                        <th >Temperature</th>
                        <th >Rainfall During Installation</th>
                        <th >Rainfall 3 Days Before Installation</th>
                        <th >Rainfall 6 Days Before Installation</th>
						<th >Porosity</th>
						<th >Agregate Stability</th>
						<th >Field Capacity</th>
						<th >Wilting Point</th>
						 
                        <th >pH_0-5</th>
                        <th >C-Org_0-5</th>
                        <th >N-Total_0-5</th>
                        <th >C/N_0-5</th>
                        <th >P total_0-5</th>
                        <th >K total_0-5</th>
                        <th >KTK_0-5</th>
                        <th >Mg_0-5</th>
						<th >Ca_0-5</th>
						<th >P Bray_0-5</th>
						<th >K_0-5</th>
						<th >Na_0-5</th>
						<th >H-Tkr_0-5</th>
						<th >Al-Tkr_0-5</th>
                        <th >pH_5-10</th>
                        <th >C-Org_5-10</th>
                        <th >N-Total_5-10</th>
                        <th >C/N_5-10</th>
                        <th >P total_5-10</th>
                        <th >K total_5-10</th>
                        <th >KTK_5-10</th>
                        <th >Mg_5-10</th>
						<th >Ca_0-10</th>
						<th >P Bray_0-10</th>
						<th >K_0-10</th>
						<th >Na_0-10</th>
						<th >H-Tkr_0-10</th>
						<th >Al-Tkr_0-10</th>

    </tr>";
    
    $numrow = 1;
    $kosong = 0;
    
    // Lakukan perulangan dari data yang ada di csv
    // $sheet adalah variabel yang dikirim dari controller
    foreach($sheet as $row){ 
   
      
      // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
      			$trial_code = $row['A'];
				$title = $row['B'];
				$palm_age = $row['C'];
				$location = $row['D'];
				$block = $row['E'];
				$start = $row['F'];
				$finish = $row['G'];
				
				$installation_date = $row['H'];
				$treatment_om = $row['I'];
				$treatment_rate = $row['J'];
				$treatment_freq = $row['K'];
				$treatment_slopes = $row['L'];
				$treatment_mp = $row['M'];
				$treatment_direction = $row['N'];
				$treatment_distance = $row['O'];
				$treatment_position = $row['P'];
				$treatment_n = $row['Q'];
				$treatment_p = $row['R'];
				$treatment_k = $row['S'];
				$treatment_mg = $row['T'];
				$gps = $row['U'];
				 				
		        $time_squence = $row['V'];  
				$days_after = $row['W']; 
				$replicate = $row['X']; 
				$degree = $row['Y'];
				$palm_number = $row['Z']; 	
				$habitat_type = $row['AA']; 
				$baits = $row['AB'];  
				$hole = $row['AC'];
				$hole = $row['AC'];  
      
      // Cek jika semua data tidak diisi
      if(empty($trial_code)  && empty($time_squence) && empty($replicate) && empty($habitat_type) && empty($baits) && empty($hole))
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
      
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah threatment-threatment kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Validasi apakah semua data telah diisi
        $trial_code_td = ( ! empty($trial_code))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
        $title_td = ( ! empty($title))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$location_td = ( ! empty($location))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$block_td = ( ! empty($block))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$palm_age_td = ( ! empty($palm_age))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$start_td = ( ! empty($start))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$finish_td = ( ! empty($finish))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$installation_date_td = ( ! empty($installation_date))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$treatment_om_td = ( ! empty($treatment_om))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$treatment_rate_td = ( ! empty($treatment_rate))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$treatment_freq_td = ( ! empty($treatment_freq))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$treatment_slopes_td = ( ! empty($treatment_slopes))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah$treatment_td = ( ! empty($treatment))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$treatment_mp_td = ( ! empty($treatment_mp))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_direction_td = ( ! empty($treatment_direction))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_distance_td = ( ! empty($treatment_distance))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_position_td = ( ! empty($treatment_position))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_n_td = ( ! empty($treatment_n))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_p_td = ( ! empty($treatment_p))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_k_td = ( ! empty($treatment_k))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $treatment_mg_td = ( ! empty($treatment_mg))? "" : " style='background: #E07171;'";
		
        $gps_td = ( ! empty($gps))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
		$time_squence_td = ( ! empty($time_squence))? "" : " style='background: #E07171;'"; // Jika Tanggal Lahir kosong, beri warna merah
		$days_after_td = ( ! empty($days_after))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
        $replicate_td = ( ! empty($replicate))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		$degree_td = ( ! empty($degree))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
        $palm_number_td = ( ! empty($palm_number))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		
		$habitat_type_td = ( ! empty($habitat_type))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		$baits_td = ( ! empty($baits))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		$hole_td = ( ! empty($hole))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
        $score_td = ( ! empty($score))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		
        // Jika salah satu data ada yang kosong
        if(empty($trial_code)   or empty($time_squence) or empty($days_after)){
          $kosong++; // Tambah 1 variabel $kosong
        }
        
         echo "<tr>";
         echo "<td".$trial_code_td.">".$trial_code."</td>";
		 echo "<td".$title_td.">".$title."</td>";
		 echo "<td".$location_td.">".$location."</td>";
		 echo "<td".$block_td.">".$block."</td>";
         echo "<td".$palm_age_td.">".$palm_age."</td>";
		 echo "<td".$start_td.">".$start."</td>";
		 echo "<td".$finish_td.">".$finish."</td>";
		 echo "<td".$installation_date_td.">".$installation_date."</td>";
		 echo "<td".$gps_td.">".$gps."</td>";
		 echo "<td".$time_squence_td.">".$time_squence."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_rate_td.">".$treatment_rate."</td>";
		 echo "<td".$treatment_freq_td.">".$treatment_freq."</td>";
		 echo "<td".$treatment_slopes_td.">".$treatment_slopes."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$treatment_om_td.">".$treatment_om."</td>";
		 echo "<td".$days_after_td.">".$days_after."</td>";
		 echo "<td".$degree_td.">".$degree."</td>";
		 echo "<td".$palm_number_td.">".$palm_number."</td>";
         echo "<td".$replicate_td.">".$replicate."</td>";
		 echo "<td".$habitat_type_td.">".$habitat_type."</td>";
		 echo "<td".$baits_td.">".$baits."</td>"; 
		 echo "<td".$hole_td.">".$hole."</td>";
         echo "</tr>";
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }
    
    echo "</table>";
    
    // Cek apakah variabel kosong lebih dari 1
    // Jika lebih dari 1, berarti ada data yang masih kosong
    if($kosong > 1){
    ?>  
      <script>
      $(document).ready(function(){
        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
        $("#jumlah_kosong").html('<?php echo $kosong; ?>');
        
        $("#kosong").show(); // Munculkan alert validasi kosong
      });
      </script>
    <?php
    }else{ // Jika semua data sudah diisi
      echo "<hr>";
      
      // Buat sebuah tombol untuk mengimport data ke database
      echo "<button type='submit' name='import'>Import</button> ";
      echo "<a href='".base_url("Trials")."'>Cancel</a>";
    }
    
    echo "</form>";
  }
  ?>
</body>
</html>