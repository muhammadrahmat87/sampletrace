<section class="content">
            <div class="row">
            <div class="col-xs-12">
            <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Import Biodata</h3>
            <?php
                echo form_open_multipart('biodata/form', 'role="form" class="form-horizontal"');
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
  <form method="post" action="<?php echo base_url("biodata/form"); ?>" enctype="multipart/form-data">
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
    
                <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>" />
    <!--
    -- Buat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
                      <div class="form-group">
                      <label class="col-sm-1 control-label"> </label>
                      <div class="col-sm-5">
                        <button type="submit" name="preview"  value="Preview" class="btn btn-success">Preview</button>
				                <?php
                          echo anchor('biodata', 'Back', array('class'=>'btn btn-default'));
                        ?>     
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
    echo "<form method='post' action='".base_url('Biodata/import')."'>";
    
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
				$treatment = $row['B'];
        $replicate = $row['C'];
				$time_squence = $row['D'];
			
		 
			 
      
      // Cek jika semua data tidak diisi
      if(empty($trial_code))
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
      
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah threatment-threatment kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // V alidasi apakah semua data telah diisi
        $trial_code_td = ( ! empty($trial_code))? "" : " style='background: #E07171;'";  
        
         

        // Jika salah satu data ada yang kosong
        if(empty($trial_code)    ){
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
      echo anchor('biodata', 'Cancel', array('class'=>'btn btn-default'));
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