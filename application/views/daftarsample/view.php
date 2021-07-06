 

<section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box box-success ">
      <div class="nav-tabs-custom">

      <div class="box-header  with-border">
              <h3 class="box-title">Daftar Sample</h3>
              </div> 
             
             <div class="box-body">
             <br><br> 
              
             <div class="col-lg-12 ">
                 <button onclick="window.location.href='/sampletrace/registrasi'" class="btn btn-success   btn-social  " type="button"> <i class="fa fa-envelope"></i> Registrasi Masuk <span class="badge"><?php echo $suratmasuk['hasil']; ?></span>
                 </button>  
                 <button onclick="window.location.href='/sampletrace/registrasiditerima'" class="btn btn-primary btn-social " type="button"><i class="fa fa-check"></i> Registrasi Diterima <span class="badge"><?php echo $suratditerima['hasil']; ?></span>
                 </button>  
                 <button onclick="window.location.href='/sampletrace/daftarsample'" class="btn btn-warning btn-social " type="button"><i class="fa fa-list"></i> Surat Sample Masuk <span class="badge"><?php echo $suratdisample['hasil']; ?></span>
                 </button>  
                 <button onclick="window.location.href='/sampletrace/daftarantrian'" class="btn btn-danger bg-purple btn-social " type="button"> <i class="fa fa-list"></i>Sample Masuk <span class="badge"><?php echo $samplemasuk['hasil']; ?></span>
                 </button>   
                 <button onclick="window.location.href='/sampletrace/daftarsample/delete'" class="btn btn-danger btn-social " type="button"> <i class="fa fa-trash"></i>DELETE <span class="badge"><?php echo $samplemasuk['hasil']; ?></span>
                 </button>  <br>  
             </div> 
             </div>
             </div>  </div>    
             <div class="row">
            <div class="col-xs-12">
            <div class="box box-success">
            <div class="box-header ">
          
        <ul class="nav nav-tabs box-teal bg-white">
        
        <li class="active"><a data-toggle="tab" href="#tab1" > <b>Daftar Surat Sample Masuk</b> </a></li>
        <li><a data-toggle="tab" href="#tab2"><b>Daftar Sample</b></a></li>   
        </ul>
         <br><br> 
        <div class="tab-content">
			<div id="tab1" class="tab-pane fade in active">
             
     
              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable   dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
		          <tr class="bg-orange">               
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
                    
              <!-- <th class="bg-teal">Action</th> -->
              </tr>
                </thead>
				
				<tbody>
                <?php 
                    $no = 0;
				            foreach($surat->result_array() as $i):
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
                      <td><?php echo $urgensi; ?></td>
                      <!-- <td> <a class="btn btn-xs bg-fuchsia" data-toggle="modal" data-target="#modal_urgen<?php echo $id_reg; ?>"><?php echo $urgensi; ?> </a>                     
                    </td> -->
                      <td><?php echo $jumlah;  ?></td>	                    
                      <td><?php echo $jenis; ?></td>
                      <td><?php echo $lokasi; ?></td>
                      <td><?php echo format_indo($tgl_kirim);  ?></td>	
                      <td>
                        <a class="btn btn-xs bg-fuchsia" data-toggle="modal" data-target="#modal_edit<?php echo $id_reg; ?>"><?php echo $status; ?> </a>                     
                      </td>                      
				  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
  

            <div id="tab2" class="tab-pane fade">
            <table id="example2" class="table table-striped table-bordered    " cellspacing="0" width="100%">
     <thead>
                 <tr class="bg-red">               
                         <th class="bg-green" data-sortable="true" width="1%">No</th>
             <th class="bg-green  ">ID Registrasi</th>
             <th class="bg-green">ID Labor</th>
             <th class="bg-green">Pengirim</th>
             <th>No. Permintaan</th>
             <th>Tanggal Surat</th>
             <th>Kategori</th>
             <th >Urgensi</th>          
             <th>Jenis Analisa</th>
             <th >Lokasi</th>
             <th >Tanggal Kirim</th>
             <th >Division</th> 
             <th >Complex</th> 
             <th >Block</th> 
             <th >Topography</th> 
             <th >Fert. Planning</th> 
             <th >Soil Type</th> 
             <th >Leader LSU</th> 
             <th >Group LSU</th> 
             <th >Sample Code</th> 
             <th >LAB Code</th> 
             <th >Sample Date</th> 
             <th >Frond No</th> 
             <th >N (%)</th> 
             <th >P (%)</th> 
             <th >K (%)</th> 
             <th >Mg (%)</th>
             <th >Ca (%)</th> 
             <th >Mn (ppm)</th> 
             <th >B (ppm)</th> 
             <th >Zn (ppm)</th> 
             <th >Cu (ppm)</th> 
             <th >Ci (%)</th> 
             <th >Fe (ppm)</th> 
             <th >Na (ppm)</th> 
             <th >Ref Surt RFC</th> 
             <th >Ref Surat LAB</th> 
             <th class="bg-teal" >Status</th> 
             
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
                       <td><?php echo $t['id_labor'];?></td>
                       <td><a class="btn btn-xl" data-toggle="modal" data-target="#modal_detail<?php echo $t['id_reg']; ?>"><?php echo $t['pengirim']; ?> </a></td>
                       <td><?php echo $t['no_permintaan']; ?></td>
                       <td><?php echo format_indo_nohari($t['tgl_surat']);  ?></td>	
                       <td><?php echo $t['kategori']; ?></td>
                       <td><?php echo $t['urgensi']; ?> </a></td>
                       <td><?php echo $t['jenis']; ?></td>
                       <td><?php echo $t['lokasi']; ?></td>                   
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
                       <td><?php echo $t['ref_rfc']; ?></td>
                       <td><?php echo $t['ref_lab']; ?></td>
                       <td><a class="btn btn-xs bg-fuchsia" data-toggle="modal" data-target="#modal_edit<?php echo $t['id_reg']; ?>"><?php echo  $t['status']; ?> </a></td>
                       
                 </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>          
    </div>  </div> </div> </div> </div>




    <?php
              foreach($surat->result_array() as $i):
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
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/daftarsample/edit'?>">
                 <div class="box box-primary"> 
                 <div class="modal-body bg-primary">
                
               
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
                            <!-- <option value="Menunggu">Menunggu</option> -->
                            <option value="Sample Diterima Admin">Sample Diterima Admin</option>
                            <!-- <option value="Sample Diterima LAB">Sample Diterima LAB</option>
                            <option value="Analisa">Analisa</option>
                            <option value="Selesai">Selesai</option> -->
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
        </div>  </div>     </div>
  
        <?php endforeach;?>

 
        <?php
              foreach($surat->result_array() as $i):
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
            <form class="form-horizontal" method="post" action="<?php echo base_url().'/registration/edit'?>">
                <div class="modal-body">
     
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
                    </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="icon-checkmark-circle2"></i> Simpan</button>
                      </div>
            </form>
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
            leftColumns: 4,
			      rightColumns: 1
        }
    } );
 
} );

$(document).ready(function() {
    var table = $('#example2').DataTable( {
        scrollY:        "550px",
        scrollX:        true,  
        paging:         false,
       
    } );
} );
    </script>