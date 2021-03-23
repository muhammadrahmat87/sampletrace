<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Import</h3>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('import/form', 'role="form" class="form-horizontal"');
            ?>

            
  
  <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
 
  

  <br>
  <br>
  
  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
  <form method="post" action="<?php echo base_url("Import/form"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-1 control-label">Select Data</label>
                      <div class="col-sm-4">
                        <input type="file" name="file" class="form-control" placeholder="Trial Code" required>
                      </div>
                </div>  
    
    
    <!--
    -- Buat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <div class="form-group">
    <label class="col-sm-1 control-label"> </label>
    <div class="col-sm-5">
                        <button type="submit" name="preview"  value="Preview" class="btn btn-primary">Preview</button>
				                
                      </div>
                      </div> 
  </form>
  
  <?php
  if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
    if(isset($upload_error)){ // Jika proses upload gagal
      echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
      die; // stop skrip
    }
    
    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='".base_url('Import/import')."'>";
    
    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum terisi semua.
    </div>";
    
     
     
    
    
    $numrow = 1;
    $kosong = 0;
    
    // Lakukan perulangan dari data yang ada di csv
    // $sheet adalah variabel yang dikirim dari controller
    foreach($sheet as $row){ 
   
      
      // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
      			$trial_code = $row['A'];
				$title = $row['B'];
        $location = $row['C'];
				$palm_age = $row['D'];
			
				$block = $row['E'];
				$start = $row['F'];
				$finish = $row['G'];
				

				$treatment_om = $row['H'];
				$treatment_rate = $row['I'];
				$treatment_freq = $row['J'];
				$treatment_slopes = $row['K'];
				$treatment_mp = $row['L'];
				$treatment_direction = $row['M'];
				$treatment_distance = $row['N'];
				$treatment_position = $row['O'];
				$treatment_n = $row['P'];
				$treatment_p = $row['Q'];
				$treatment_k = $row['R'];
				$treatment_mg = $row['S'];
				$gps = $row['T'];
				 				
		        $time_squence = $row['U'];  
				$days_after = $row['V']; 
				$replicate = $row['W']; 
				$degree = $row['X'];
				$palm_number = $row['Y']; 	
				$habitat_type = $row['Z']; 
				$baits = $row['AA'];  
				$hole = $row['AB'];
				$score = $row['AC'];  
        
        $soil_humidity = $row['AD']; 
        $temperature = $row['AE']; 
        $rainfall_during = $row['AF']; 
        $rainfall_beforethree = $row['AG']; 
        $rainfall_beforesix = $row['AH']; 
        $bulk_density = $row['AI']; 
       
        $porosity = $row['AJ']; 
        $agregate = $row['AK']; 
        $field_capacity = $row['AL']; 
        $wilting_point = $row['AM']; 

        $ph5 = $row['AN'];  
        $c5 = $row['AO']; 
        $n_tot5 = $row['AP']; 
        $cn5 = $row['AQ']; 
        $p_tot5 = $row['AR']; 
        $k_tot5 = $row['AS']; 
        $ktk5 = $row['AT']; 
        $mg5 = $row['AU']; 
        $ca5 = $row['AV']; 
        $pbray5 = $row['AW']; 
        $k5 = $row['AX']; 
        $na5 = $row['AY'];  
        $htkr5 = $row['AZ']; 
        $altkr5 = $row['BA']; 
       
        $ph10 = $row['BB']; 
        $c10 = $row['BC']; 
        $n_tot10 = $row['BD']; 
        $cn10 = $row['BE']; 
        $p_tot10 = $row['BF']; 
        $k_tot10 = $row['BG']; 
        $ktk10 = $row['BH']; 
        $mg10 = $row['BI']; 
        $ca10 = $row['BJ']; 
        $pbray10 = $row['BK']; 
        $k10 = $row['BL']; 
        $na10 = $row['BM'];  
        $htkr10 = $row['BN']; 
        $altkr10 = $row['BO']; 
      
      // Cek jika semua data tidak diisi
      if(empty($trial_code)  && empty($time_squence) && empty($habitat_type)   && empty($hole))
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
      
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah threatment-threatment kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // V alidasi apakah semua data telah diisi
        $trial_code_td = ( ! empty($trial_code))? "" : " style='background: #E07171;'";  
        $title_td = ( ! empty($title))? "" : " style='background: #E07171;'";   
        $location_td = ( ! empty($location))? "" : " style='background: #E07171;'";   
        $block_td = ( ! empty($block))? "" : " style='background: #E07171;'";   
        $palm_age_td = ( ! empty($palm_age))? "" : " style='background: #E07171;'";   
        $start_td = ( ! empty($start))? "" : " style='background: #E07171;'";   
        $finish_td = ( ! empty($finish))? "" : " style='background: #E07171;'";   
        $installation_date_td = ( ! empty($installation_date))? "" : " style='background: #E07171;'";   
       
        $treatment_om_td = ( ! empty($treatment_om))? "" : " style='background: #E07171;'";   
        $treatment_rate_td = ( ! empty($treatment_rate))? "" : " style='background: #E07171;'";   
        $treatment_freq_td = ( ! empty($treatment_freq))? "" : " style='background: #E07171;'";   
        $treatment_slopes_td = ( ! empty($treatment_slopes))? "" : " style='background: #E07171;'";   
      
        $treatment_mp_td = ( ! empty($treatment_mp))? "" : " style='background: #E07171;'";   
        $treatment_direction_td = ( ! empty($treatment_direction))? "" : " style='background: #E07171;'";   
        $treatment_distance_td = ( ! empty($treatment_distance))? "" : " style='background: #E07171;'";   
        $treatment_position_td = ( ! empty($treatment_position))? "" : " style='background: #E07171;'";   
        $treatment_n_td = ( ! empty($treatment_n))? "" : " style='background: #E07171;'";   
        $treatment_p_td = ( ! empty($treatment_p))? "" : " style='background: #E07171;'";   
        $treatment_k_td = ( ! empty($treatment_k))? "" : " style='background: #E07171;'";   
        $treatment_mg_td = ( ! empty($treatment_mg))? "" : " style='background: #E07171;'";
		
        $gps_td = ( ! empty($gps))? "" : " style='background: #E07171;'";  
		    $time_squence_td = ( ! empty($time_squence))? "" : " style='background: #E07171;'";  
		    $days_after_td = ( ! empty($days_after))? "" : " style='background: #E07171;'";  
        $replicate_td = ( ! empty($replicate))? "" : " style='background: #E07171;'";  
		    $degree_td = ( ! empty($degree))? "" : " style='background: #E07171;'";  
        $palm_number_td = ( ! empty($palm_number))? "" : " style='background: #E07171;'";  
		    $habitat_type_td = ( ! empty($habitat_type))? "" : " style='background: #E07171;'";  
		    $baits_td = ( ! empty($baits))? "" : " style='background: #E07171;'";  
		    $hole_td = ( ! empty($hole))? "" : " style='background: #E07171;'"; 
        $score_td = ( ! empty($score))? "" : " style='background: #E07171;'";  

        $soil_humidity_td = ( ! empty($soil_humidity))? "" : " style='background: #E07171;'"; 
        $temperature_td = ( ! empty($temperature))? "" : " style='background: #E07171;'"; 
        $rainfall_during_td = ( ! empty($rainfall_during))? "" : " style='background: #E07171;'"; 
        $rainfall_beforethree_td = ( ! empty($rainfall_beforethree))? "" : " style='background: #E07171;'"; 
        $rainfall_beforesix_td = ( ! empty($rainfall_beforesix))? "" : " style='background: #E07171;'"; 
        $bulk_density_td = ( ! empty($bulk_density))? "" : " style='background: #E07171;'"; 
        $porosity_td = ( ! empty($porosity))? "" : " style='background: #E07171;'"; 
        $agregate_td = ( ! empty($agregate))? "" : " style='background: #E07171;'"; 
        $field_capacity_td = ( ! empty($field_capacity))? "" : " style='background: #E07171;'"; 
        $wilting_point_td = ( ! empty($wilting_point))? "" : " style='background: #E07171;'"; 
       
       
        $ph5_td = ( ! empty($ph5))? "" : " style='background: #E07171;'"; 
        $c5_td = ( ! empty($c5))? "" : " style='background: #E07171;'"; 
        $n_tot5_td = ( ! empty($n_tot5))? "" : " style='background: #E07171;'"; 
        $cn5_td = ( ! empty($cn5))? "" : " style='background: #E07171;'"; 
        $p_tot5_td = ( ! empty($p_tot5))? "" : " style='background: #E07171;'"; 
        $k_tot5_td = ( ! empty($k_tot5))? "" : " style='background: #E07171;'"; 
        $ktk5_td = ( ! empty($ktk5))? "" : " style='background: #E07171;'"; 
        $mg5_td = ( ! empty($mg5))? "" : " style='background: #E07171;'"; 
        $ca5_td = ( ! empty($ca5))? "" : " style='background: #E07171;'"; 
        $pbray5_td = ( ! empty($pbray5))? "" : " style='background: #E07171;'"; 
        $k5_td = ( ! empty($k5))? "" : " style='background: #E07171;'"; 
        $na5_td = ( ! empty($na5))? "" : " style='background: #E07171;'"; 
        $htkr5_td = ( ! empty($htkr5))? "" : " style='background: #E07171;'"; 
        $altkr5_td = ( ! empty($altkr5))? "" : " style='background: #E07171;'"; 

        $ph10_td = ( ! empty($ph10))? "" : " style='background: #E07171;'"; 
        $c10_td = ( ! empty($c10))? "" : " style='background: #E07171;'"; 
        $n_tot10_td = ( ! empty($n_tot10))? "" : " style='background: #E07171;'"; 
        $cn10_td = ( ! empty($cn10))? "" : " style='background: #E07171;'"; 
        $p_tot10_td = ( ! empty($p_tot10))? "" : " style='background: #E07171;'"; 
        $k_tot10_td = ( ! empty($k_tot10))? "" : " style='background: #E07171;'"; 
        $ktk10_td = ( ! empty($ktk10))? "" : " style='background: #E07171;'"; 
        $mg10_td = ( ! empty($mg10))? "" : " style='background: #E07171;'"; 
        $ca10_td = ( ! empty($ca10))? "" : " style='background: #E07171;'"; 
        $pbray10_td = ( ! empty($pbray10))? "" : " style='background: #E07171;'"; 
        $k10_td = ( ! empty($k10))? "" : " style='background: #E07171;'"; 
        $na10_td = ( ! empty($na10))? "" : " style='background: #E07171;'"; 
        $htkr10_td = ( ! empty($htkr10))? "" : " style='background: #E07171;'"; 
        $altkr10_td = ( ! empty($altkr10))? "" : " style='background: #E07171;'"; 
       

		




        // Jika salah satu data ada yang kosong
        if(empty($trial_code)   or empty($title)  ){
          $kosong++; // Tambah 1 variabel $kosong
        }
        
       
      }
     
      $numrow++; // Tambah 1 setiap kali looping
    }
    
    
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
      echo "<b>DATA SUDAH LENGKAP. SILAHKAN KLIK TOMBOL IMPORT DIBAWAH!!!</b>";
      echo "<hr>";
      
      
      // Buat sebuah tombol untuk mengimport data ke database
    

      echo "<button type='submit' name='import' class='btn btn-success'>Import</button> ";
      echo anchor('import', 'Cancel', array('class'=>'btn btn-default'));
     }
    
    echo "</form>";
  }
  ?>
</body>
</html>
</div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>