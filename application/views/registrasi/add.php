<!DOCTYPE html>
<html>

<head>
    <style>
    .theSelect {
  width: 205px;
  height :30px;
}
h3 {
  margin-left: 10px;
}
</style>
</head>
<section class="content">
    <div class="row">
        <div class="col-xs-9 ">

          <div class="box box-success ">
            <div class="box-header with-border bg-green">
               <center><h3 class="box-title ">Registrasi Surat Sample</h3>
            </div>
            <div class="box box-success ">
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('registrasi/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">
<br><br>
                <div class="form-group">
                  <label class="col-sm-3 control-label">ID Registrasi</label>
                      <div class="col-sm-8">
                      
                      <b><input type="text" class="form-control" name="id_reg" required="" value="<?php echo $kodeunik;?>" readonly /> </b>
                       </div>
                </div>


                <div class="form-group">
                      <label class="col-sm-3 control-label">Pengirim</label>
                      <div class="col-sm-3">
                      <select class="theSelect" name="pengirim"> 
                      <option value="">Pilih Pengirim</option>
                      <?php foreach($data as $cat) : ?>
                        <option value="<?php echo $cat->nama;?>"> <?php echo $cat->nama; ?></option>
                             <?php endforeach; ?>
	                  	</select>
                      </div>
                
                  <label class="col-sm-2 control-label">No. Permintaan</label>
                      <div class="col-sm-3">
                        <input type="text" name="no_permintaan" class="form-control"   a>
                      </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label">Kategori</label>
                      <div class="col-sm-3">
                        <?php
                          echo form_dropdown('kategori', array('Pilih Kategori', 'Trial'=>'Trial', 'Komersial'=>'Komersial', 'Studi Kasus'=>'Studi Kasus'), null, "class='form-control'");
                        ?>
                      </div>
                  
                      <label class="col-sm-2 control-label">Tanggal Surat</label>
                      <div class="col-sm-3">
                       
                        <input type="date" name="tgl_surat" class="form-control"   a>
                  
                      </div>
                </div>				  
				  
				        <div class="form-group ">
                  <label class="col-sm-3 control-label">Urgensi</label>
                      <div class="col-sm-3">
                       <input type="text" class="form-control" name="urgensi" required="" value="Normal" readonly /> </b>
                      
                      </select>
                </div> 
                  <label class="col-sm-2 control-label">Jumlah Sampel</label>
                      <div class="col-sm-3">
                        <input type="text" name="jumlah" class="form-control"   a>
                      </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Analisa</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" name="jenis" required="" value="LSU" readonly />
                </div>
               
                  <label class="col-sm-2 control-label">Lokasi</label>
                      <div class="col-sm-3">
                        <input type="text" name="lokasi" class="form-control"   a>
                      </div>
                </div>

		        <!-- <div class="form-group">
                  <label class="col-sm-3 control-label">Permintaan Analisa</label>
               			 <div class="col-sm-1">
						<input  type="checkbox" onClick="toggle(this)"  /><b>Select All</b><br/>
						 
						<input type="checkbox" name="kursus" value="Web Master"> N</br>
						<input type="checkbox" name="kursus" value="Web Master"> P</br>
						<input type="checkbox" name="kursus" value="Web Master"> K</br>
						<input type="checkbox" name="kursus" value="Web Master"> Mg</br>
						</div><br />
						<div class="col-sm-1">						
						<input type="checkbox" name="kursus" value="Web Master"> Ca</br>
						<input type="checkbox" name="kursus" value="Web Master"> B</br>
						<input type="checkbox" name="kursus" value="Web Master"> Cu</br>
						<input type="checkbox" name="kursus" value="Web Master"> Zn</br>
						</div>  
						<div class="col-sm-1">
						<input type="checkbox" name="kursus" value="Web Master"> Mn</br>
						<input type="checkbox" name="kursus" value="Web Master"> Fe</br>
						<input type="checkbox" name="kursus" value="Web Master"> CL</br>
						<input type="checkbox" name="kursus" value="Web Master"> C-org</br>
                </div></div> -->
				
				   <input type="hidden" name="tgl_kirim" value="<?php echo date("Y-m-d"); ?>" />
							
				  <div class="form-group">
              <label class="col-sm-3 control-label">Upload Berkas (.xlxs)</label>
				      <div class="col-sm-8">
              <input class="form-control" type="file" name="upload" size="20"/>        
              </div> 
          </div>


          <!-- <div class="form-group">
                      <label class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-2">
                      <select type="hidden" class="form-control" name="status" readonly="true">
                      <option value="Menunggu">Menunggu</option>
                      <option value="Sample Diterima Admin">Sample Diterima Admin</option>
                      <option value="Sample Diterima LAB">Sample Diterima LAB</option>
                      <option value="Analisa">Analisa</option>
                      <option value="Selesai">Selesai</option>
	                  	</select>
                      </div>
                </div> -->
				  
                <input type="hidden" name="status" value="Menunggu" />
				  
                <input type="hidden" name="last_update" value="<?php echo date("Y-m-d"); ?>" />

                <div class="form-group">
                
                  <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-2">
                        <button type="submit" name="submit" class="btn bg-green">Kirim</button>
				                  <?php
                          echo anchor('registrasi', 'Back', array('class'=>'btn bg-gray'));
                          ?>
                      </div>
                </div>

                </div>

                <div class="box box-success ">
                <br>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<link rel="stylesheet" href="">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
 
<link href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css "rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.min.js"></script>
<script>
	$(".theSelect").select2();
	 
// function toggle(pilih) {
// checkboxes = document.getElementsByName('kursus');
// for(var i=0, n=checkboxes.length;i<n;i++) {
// checkboxes[i].checked = pilih.checked;
// }
// }
</script>