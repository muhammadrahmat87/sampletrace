<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header  with-border">
                <h3 class="box-title">Daftar Registrasi Diterima</h3>
                </div> 
             
            <div class="box-body">
            <br><br> 
             
            <div class="col-lg-12 ">
                <button onclick="window.location.href='/sampletrace/registrasi'" class="btn btn-success  btn-social  " type="button"> <i class="fa fa-envelope"></i> Registrasi Masuk <span class="badge"><?php echo $suratmasuk['hasil']; ?></span>
                </button>  
                <button onclick="window.location.href='/sampletrace/registrasiditerima'" class="btn  btn-primary btn-social " type="button"><i class="fa fa-check"></i> Registrasi Diterima <span class="badge"><?php echo $suratditerima['hasil']; ?></span>
                </button>  
                <button onclick="window.location.href='/sampletrace/daftarsample'" class="btn btn-warning btn-social " type="button"><i class="fa fa-list"></i> Surat Sample Masuk <span class="badge"><?php echo $suratdisample['hasil']; ?></span>
                </button>  
                <button onclick="window.location.href='/sampletrace/daftarsample'" class="btn btn-danger btn-social " type="button"> <i class="fa fa-list"></i>Sample Masuk <span class="badge"><?php echo $samplemasuk['hasil']; ?></span>
                </button>  <br>   
            </div> 
            </div>
            </div>      
          
            <div class="row">
            <div class="col-xs-12">
            <div class="box box-success">
            <div class="box-header  with-border">
            <br>  <br>   <br>  
              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable"  >
                <thead>
                    <tr class="bg-primary">
						 
                    <th width="1%">No</th> 
                    <th width="2%">ID Reg</th>
                    <th width="1%">Pengirim</th>
                    <th width="1%">No. Permintaan</th>
                    <th width="1%">Tanggal Surat</th>
                    <th width="1%">Kategori</th>
                    <th width="1%">Urgensi</th>
                    <th width="1%"> Sample</th>
                    <th width="1%">Jenis Analisa</th>
                    <th width="1%">Lokasi</th>   
                    <th width="1%">Tanggal Kirim</th>
                    <th width="1%">Status</th>
                    <th width="1%">Berkas</th>
                    <th width="1%">Import</th>
                        <!-- <th >Upload Berkas</th> -->
                    </tr>
                </thead>
				
				<tbody>
        <?php 
                    $no = 0;
				            foreach($data->result_array() as $i):
					          $kode=$i['kode'];
                    $id_reg=$i['id_reg'];
                    $pengirim=$i['pengirim'];
                    $no_permintaan=$i['no_permintaan'];
                    $tgl_surat=$i['tgl_surat'];
                    $kategori=$i['kategori'];
                    $urgensi=$i['urgensi'];
                    $jumlah=$i['jumlah'];
                    $lokasi=$i['lokasi'];
                    $status=$i['status'];
                    $berkas=$i['berkas'];                  
					          $jenis=$i['jenis'];
                    $tgl_kirim=$i['tgl_kirim'];
                    $no++;
			  ?>
               
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $id_reg; ?></td>
                      <td><a class="btn btn-xs" data-toggle="modal" data-target="#modal_detail<?php echo $id_reg; ?>"><b><?php echo $pengirim; ?> </b></a>                     
                      </td>
                      <td><?php echo $no_permintaan; ?></td>
                      <td><?php echo format_indo($tgl_surat);  ?></td>	
                      <td><?php echo $kategori; ?></td>
                      <td> <a class="btn btn-xs bg-fuchsia" data-toggle="modal" data-target="#modal_urgen<?php echo $id_reg; ?>"><?php echo $urgensi; ?> </a>                     
                    </td>
                      <td><?php echo $jumlah;  ?></td>	                    
                      <td><?php echo $jenis; ?></td>
                      <td><?php echo $lokasi; ?></td>
                      <td><?php echo format_indo($tgl_kirim);  ?></td>	
                      <td>
                        <a class="btn btn-xs bg-fuchsia" data-toggle="modal" data-target="#modal_edit<?php echo $id_reg; ?>"><?php echo $status; ?> </a>                     
                      </td>  
                      <td><?php echo $berkas; ?></td>    
                      <td>
                      <a onClick="return confirm('Yakin ingin mengimport Data ini?')" href="<?php echo base_url(); ?>registrasiditerima/import/<?php echo $kode; ?>"class="btn btn-xs btn-primary" title="IMPORT"><i > <i class="fa fa-upload fa-fw"></i></i></a>					       
                       </td>  
					<!-- <td>
                      <a href="<?php echo base_url(); ?>registrasiditerima/delete/<?php echo $kode; ?>"class="btn btn-xs btn-danger" title="DELETE"><i onClick="return confirm('Yakin ingin menghapus Trial?')"> <i class="fa fa-trash fa-fw"></i></i></a>					       
                       </td> -->
				            </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
            </div>
            </div>
            </div>
            
        
       
            <?php
              foreach($data->result_array() as $i):
                $kode=$i['kode'];
                $id_reg=$i['id_reg'];
                $pengirim=$i['pengirim'];
                $no_permintaan=$i['no_permintaan'];
                $tgl_surat=$i['tgl_surat'];
                $kategori=$i['kategori'];
                $urgensi=$i['urgensi'];
                $jumlah=$i['jumlah'];
                $lokasi=$i['lokasi'];
                $status=$i['status'];
                $jenis=$i['jenis'];
                $tgl_kirim=$i['tgl_kirim'];           
        ?>

<div class="modal fade" id="modal_edit<?php echo $id_reg;?>" tabindex="-5" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
       <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="modal-title" >Edit Status</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/registrasi/edit'?>">
                 <div class="box box-primary"> 
                 <div class="modal-body  ">
                
               
                            <input name="kode" value="<?php echo $kode;?>" class="form-control" type="hidden" placeholder="Kode Barang..." readonly>
                         
                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Reg</label>
                        <div class="col-xs-8">
                            <input name="id_reg" value="<?php echo $id_reg;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-8">
                            <select name="status" class="form-control" type="text">                   
                            <option value="Menunggu">Menunggu</option>
                            <option value="Sample Diterima Admin">Sample Diterima Admin</option>
                            <option value="Sample Diterima LAB">Sample Diterima LAB</option>
                            <option value="Analisa">Analisa</option>
                            <option value="Selesai">Selesai</option>
                            </select>
                        </div>
                        </div></div> <div class="box box-primary">
                        
                        <div class="modal-footer ">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                      </div>
            </form>
            </div>
            </div>
        </div>   </div>    </div>
  
        <?php endforeach;?>

        <?php
              foreach($data->result_array() as $i):
                $kode=$i['kode'];
                $id_reg=$i['id_reg'];
                $pengirim=$i['pengirim'];
                $no_permintaan=$i['no_permintaan'];
                $tgl_surat=$i['tgl_surat'];
                $kategori=$i['kategori'];
                $urgensi=$i['urgensi'];
                $jumlah=$i['jumlah'];
                $lokasi=$i['lokasi'];
                $status=$i['status'];
                $jenis=$i['jenis'];
                $tgl_kirim=$i['tgl_kirim'];           
        ?>

       <div class="modal fade" id="modal_urgen<?php echo $id_reg;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
       <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" >Edit Urgensi</h4>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/registrasi/editurgensi'?>">
            <div class="box box-primary"> 
                 <div class="modal-body  ">

                            <input name="kode" value="<?php echo $kode;?>" class="form-control" type="hidden" placeholder="Kode Barang..." readonly>
                         
                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Reg</label>
                        <div class="col-xs-8">
                            <input name="id_reg" value="<?php echo $id_reg;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-8">
                            <select name="urgensi" class="form-control" type="text">                   
                            <option value="Normal">Normal</option>
                            <option value="High Priority">High Priority</option>
                            </select>
                        
                        </div>
                        </div></div> <div class="box box-primary">
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                      </div>
            </form>
            </div>
            </div>
        </div>   </div>    </div>
        <?php endforeach;?>


        <?php
              foreach($data->result_array() as $i):
                $kode=$i['kode'];
                $id_reg=$i['id_reg'];
                $nik=$i['nik'];
                $nama=$i['nama'];
                $section=$i['section'];
                $hp =$i['hp'];
                $urgensi=$i['urgensi'];
                $jumlah=$i['jumlah'];
                $lokasi=$i['lokasi'];
                $status=$i['status'];
                $jenis=$i['jenis'];
                $tgl_kirim=$i['tgl_kirim'];           
        ?>

<div class="modal fade" id="modal_detail<?php echo $id_reg;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
       <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" >Biodata</h4>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/registrasi/edit'?>">
            <div class="box box-primary"> 
                 <div class="modal-body  ">
                    <div class="form-group">
                        <label class="control-label col-xs-5" >Nama : </label>
                        <div class="col-xs-5"><b><?php echo $nama;?></b>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-5" >NIK : </label>
                        <div class="col-xs-5"><?php echo $nik;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-5" >Section : </label>
                        <div class="col-xs-5"><?php echo $section;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-5" >No. Hp : </label>
                        <div class="col-xs-5"><?php echo $hp;?>
                        </div>
                   
                    </div></div> <div class="box box-primary">
                         
            </form>
            </div>
            </div>
        </div>   </div>    </div>
        <?php endforeach;?>


 
</section>

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/datatables.min.css">
	<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/FixedColumns-3.3.2/js/dataTables.fixedColumns.min.js"></script>
	     <script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        scrollY:        "550px",
        scrollX:        true,  
        paging:         false,
        fixedColumns:   {
            leftColumns: 0,
			      rightColumns: 0
        }
    } );
} );
    </script>

    <script>
 

   if (Notification.permission === "granted") {
     
   } else if (Notification.permission !== "denied") {
      Notification.requestPermission().then(permission => {
         // console.log(permission);
      });
   }



   function showNotification() {
   const notification = new Notification("Notifikasi", {
      body: "Data berhasil di import",
       // icon: "yourimageurl.png"
   })
   notification.onclick = (e) => {
      window.location.href = "https://google.com";
   };
}
</script>
<?php
    
    if ($this->session->flashdata('success')) {
      ?>
        <script type="text/javascript">
          showNotification();
        </script>
      <?php
    }

?>

</script>