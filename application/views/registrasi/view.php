<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-success">
            <div class="box-header  with-border">
              <h3 class="box-title">Daftar Registrasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<br><br>
            <!-- button add -->
            <?php
                echo anchor('registrasi/add', '<button class="btn-lg btn-success fa fa-plus"> Registrasi</button>');     
				
            ?>
<br><br> 
              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable"  >
                <thead>
                    <tr class="bg-green">
						 
                        <th data-sortable="true">No</th> 
                        <th data-sortable="true">ID Reg</th>
                        <th data-sortable="true">Pengirim</th>
                        <th data-sortable="true">No. Permintaan</th>
                        <th data-sortable="true">Tanggal Surat</th>
					    <th data-sortable="true">Kategori</th>
                        <th data-sortable="true">Urgensi</th>
                        <th >Jumlah Sample</th>
                        <th data-sortable="true">Jenis Analisa</th>
                        <th >Lokasi</th>   
                        <th>Tanggal Kirim</th>
                        <th>Status</th>
                        <th>Berkas</th>
                         
                        <th >Action</th>
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
                      <a href="<?php echo base_url(); ?>registrasi/delete/<?php echo $kode; ?>"class="btn btn-xs btn-danger" title="DELETE"><i onClick="return confirm('Yakin ingin menghapus Trial?')"> <i class="fa fa-trash fa-fw"></i></i></a>					       
                       </td>
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
            <div class="modal-header">
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
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="icon-checkmark-circle2"></i> Simpan</button>
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
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" >Edit Status</h4>
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
                        <button type="submit" class="btn btn-success"><i class="icon-checkmark-circle2"></i> Simpan</button>
                      </div>
            </form>
            </div>
            </div>
        </div> </div>    </div> 
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
            <div class="modal-header">
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
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="icon-checkmark-circle2"></i> Simpan</button>
                      </div>
            </form>
            </div>
            </div>
        </div> 
        </div>   
        <?php endforeach;?>

 
</section>

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/datatables.min.css">

<script>  
     
     $(document).ready(function() {
    var table = $('#example').DataTable( {   
       
    } );
    
} );

</script>