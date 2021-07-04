<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header  with-border">
                <h3 class="box-title">Daftar Batch</h3>
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
 
                  

            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable   dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
		          <tr class="">               
						  <th data-sortable="true" width="1%">No</th>
              <th data-sortable="true" width="12%">ID Registrasi</th>
              <th data-sortable="true" width="12%">Pengirim</th>

              <th data-sortable="true" width="12%">No Sample</th>
              <th data-sortable="true" width="12%">No Urut</th>
              <th data-sortable="true" width="12%">Batch</th>
              <th data-sortable="true" width="12%">No. LAB</th>
              <th data-sortable="true" width="12%">No. Pos</th>
              <th data-sortable="true" width="12%">Date Sampling</th>
              <th>Location</th>
              <th data-sortable="true" width="12%">Frond No</th>
              <th data-sortable="true" width="12%">Plot</th>
              <th data-sortable="true" width="`10%">N</th> 
              <th data-sortable="true" width="`10%">P</th> 
              <th data-sortable="true" width="`10%">K</th> 
              <th data-sortable="true" width="`10%">Mg</th>
              <th data-sortable="true" width="`10%">Ca</th> 
              <th data-sortable="true" width="`10%">Mn</th> 
              <th data-sortable="true" width="`10%">B</th> 
              <th data-sortable="true" width="`10%">Zn</th> 
              <th data-sortable="true" width="`10%">Cu</th> 
              <th data-sortable="true" width="`10%">Ci</th> 
              <th data-sortable="true" width="`10%">Fe</th> 
              <th data-sortable="true" width="`10%">Na</th> 
              
              <th data-sortable="true" width="12%">Kode Sample</th>

              
              <th data-sortable="true" width="13%">No. Permintaan</th>
              <th data-sortable="true" width="13%">Tanggal Surat</th>
					    <th data-sortable="true" width="10%">Kategori</th>
              <th data-sortable="true" width="`10%">Urgensi</th>
                       
              <th data-sortable="true" width="10%">Jenis Analisa</th>
             
              <th data-sortable="true" width="`10%">Tanggal Kirim</th>
              <th data-sortable="true" width="`10%">Division</th> 
              <th data-sortable="true" width="`10%">Complex</th> 
              <th data-sortable="true" width="`10%">Block</th> 
              <th data-sortable="true" width="`10%">Topography</th> 
              <th data-sortable="true" width="`10%">Fert. Planning</th> 
              <th data-sortable="true" width="`10%">Soil Type</th> 
              <th data-sortable="true" width="`10%">Leader LSU</th> 
              <th data-sortable="true" width="`10%">Group LSU</th> 
              <th data-sortable="true" width="`10%">Sample Code</th> 
              <th data-sortable="true" width="`10%">LAB Code</th> 
              <th data-sortable="true" width="`10%">Sample Date</th> 
              <th data-sortable="true" width="`10%">Frond No</th> 
             
              
              <th data-sortable="true" width="`10%">Ref Surt RFC</th> 
              <th data-sortable="true" width="`10%">Ref Surat LAB</th> 

               <th data-sortable="true" width="`10%">Permintaan Analisa</th> 

              <th data-sortable="true" width="`10%">Status</th> 
              <!-- <th class="bg-blue">Action</th> -->
              </tr>
                </thead>
				
				<tbody>
                  <?php
                  $no = 0;
                  foreach ($data->result_array() as $t) :
                    $no++;
                    
                    ?>
                    <tr>
             
			 
			          <td><?php echo $no; ?></td>
                <td><?php echo $t['id_reg'];?></td>
                      <td><?php echo $t['pengirim']; ?></td>

                      <td align="center"><?php echo $t['no_sample']; ?></td>
                      <td align="center"><?php echo $t['no_urut']; ?></td>
                      <td align="center"><?php echo $t['batch']; ?></td>
                      <td align="center"><?php echo $t['id_labor']; ?></td>
                      <td align="center"><?php echo $t['no_pos']; ?></td>
                  
                      <td align="center"><?php echo $t['lokasi']; ?></td>    
                      <td><?php echo $t['fn']; ?></td>
                      <td><?php echo $t['plot']; ?></td>
                      <td><?php echo $t['n']; ?></td>
                      <td><?php echo $t['p']; ?></td>
                      <td><?php echo $t['k'];  ?></td>	 
                      <td><?php echo $t['mg']; ?></td>
                      <td><?php echo $t['ca']; ?></td>                   
                      <td><?php echo $t['mn']; ?></td>
					            <td><?php echo $t['b']; ?></td>
                      <td><?php echo $t['zn']; ?></td>
                      <td><?php echo $t['cu']; ?></td>
                      <td><?php echo $t['ci']; ?></td>
                      <td><?php echo $t['fe']; ?></td>
                      <td><?php echo $t['na'];  ?></td>	 
                      <td><?php echo $t['id_labor']; ?></td>
                      <td><?php echo $t['plot']; ?></td>
                      
                      
                      <td><?php echo $t['no_permintaan']; ?></td>
                      <td align="center"><?php echo format_indo_nohari($t['tgl_surat']);  ?></td>	
                      <td><?php echo $t['kategori']; ?></td>
                      <td><?php echo $t['urgensi']; ?></td>
                      
                      <td><?php echo $t['jenis']; ?></td>
                                     
                      <td><?php echo format_indo_nohari($t['tgl_kirim']);  ?></td>	
					            <td><?php echo $t['division']; ?></td>
                      <td><?php echo $t['complex']; ?></td>
                      <td><?php echo $t['block']; ?></td>
                      <td><?php echo $t['topography']; ?></td>
                      <td><?php echo $t['fert']; ?></td>
                      <td><?php echo $t['soil_type'];  ?></td>	 
                      <td><?php echo $t['leader_lsu']; ?></td>
                      <td><?php echo $t['group_lsu']; ?></td>                   
                      <td><?php echo $t['sample_code']; ?></td>
					            <td><?php echo $t['lab_code']; ?></td>
                      <td><?php echo $t['sample_date']; ?></td>
                      <td><?php echo $t['frond_no'];  ?></td>	
                       
                    
                     
                     
                      <td><?php echo $t['ref_rfc']; ?></td>
					            <td><?php echo $t['ref_lab']; ?></td>

                      <td align="center">
                      <?php
                      $n = ($t['n'] == 'x')? "N," : "";
                      $p = ($t['p'] == 'x')? "P," : "";
                      $k = ($t['k'] == 'x')? "K," : "";
                      $mg = ($t['mg'] == 'x')? "Mg," : "";
                      $ca = ($t['ca'] == 'x')? "Ca," : "";
                      $mn = ($t['mn'] == 'x')? "Mn," : "";
                      $b = ($t['b'] == 'x')? "B," : "";
                      $zn = ($t['zn'] == 'x')? "Zn," : "";
                      $cu = ($t['p'] == 'x')? "Cu," : "";
                      $ci = ($t['p'] == 'x')? "Ci," : "";
                      $fe = ($t['fe'] == 'x')? "Fe," : "";
                      $na = ($t['na'] == 'x')? "Na" : "";
                      echo $n.$p.$k.$mg.$ca.$mn.$b.$zn.$cu.$ci.$fe.$na;
                      
?>
                      </td>	
					  <!-- <td>                       
                      <a href="<?php echo base_url(); ?>daftarregistrasi/edit/<?php echo $t['kode'] ?>" class="btn btn-xs btn-warning" title="EDIT"data-placement="top"><i class="fa fa-true"></i></a>                   
                      <a href="<?php echo base_url(); ?>registration/delete/<?php echo $t['kode'] ?>"class="btn btn-xs btn-danger" title="DELETE"><i onClick="return confirm('Yakin ingin menghapus Trial <?php echo $t['kode']; ?> ?')"> <i class="fa fa-trash fa-fw"></i></i></a>					
                      </td> -->
				  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

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
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/daftarregistrasi/edit'?>">
                <div class="modal-body">
                
               
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
                        </div>
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button>
                      </div>
            </form>
            </div>
            </div>
        </div>       
  
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
            leftColumns: 6,
			      rightColumns: 0
        }
    } );
} );
    </script>