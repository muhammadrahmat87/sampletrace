<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-success">
            <div class="box-header  with-border">
              <h3 class="box-title">Data Monitoring</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('registration/add', '<button class="btn-lg btn-success fa fa-plus"> Registration</button>');     
				
            ?>
<br><br> 
              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable"  >
                <thead>
                    <tr class="bg-olive">
						 
                        <th data-sortable="true" width="1%">No</th>
                        <th data-sortable="true" width="12%">Pengirim</th>
                        <th data-sortable="true" width="13%">No. Permintaan</th>
                        <th data-sortable="true" width="13%">Tanggal Surat</th>
					            	<th data-sortable="true" width="10%">Kategori</th>
                        <th data-sortable="true" width="`10%">Urgensi</th>
                        <th width="5%">Jumlah Sample</th>
                        <th data-sortable="true" width="10%">Jenis Analisa</th>
                        <th width="5%">Lokasi</th>
                        <th width="14%">Permintaan Analisa</th>
                        <th width="10%">Tanggal Kirim</th>
                        <th width="10%">Berkas</th>
                        <th >Action</th>
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
                      <td><?php echo $t['pengirim']; ?></td>
                      <td><?php echo $t['no_permintaan']; ?></td>
                      <td><?php echo format_indo($t['tgl_surat']);  ?></td>	
                      <td><?php echo $t['kategori']; ?></td>
                      <td><?php echo $t['urgensi']; ?></td>
                      <td><?php echo $t['jumlah'];  ?></td>	
                     
                      <td><?php echo $t['jenis']; ?></td>
                      <td><?php echo $t['lokasi']; ?></td>
                     
                      <td><?php echo $t['permintaan'];  ?></td>	
                      <td><?php echo format_indo($t['tgl_kirim']);  ?></td>	
                      <td><?php echo $t['berkas']; ?></td>
			  
					<td>                       
                      <a href="<?php echo base_url(); ?>registration/edit/<?php echo $t['kode'] ?>" class="btn btn-xs btn-warning" title="EDIT"data-placement="top"><i class="fa fa-edit"></i></a>                   
                      <a href="<?php echo base_url(); ?>registration/delete/<?php echo $t['kode'] ?>"class="btn btn-xs btn-danger" title="DELETE"><i onClick="return confirm('Yakin ingin menghapus Trial <?php echo $t['kode']; ?> ?')"> <i class="fa fa-trash fa-fw"></i></i></a>					
                      
             </td>
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
</section>

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.bootstrap.min.js">

</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/datatables.min.css">
 
  
    <script>
   $(document).ready(function() {
    $('#example').DataTable( {
        
        paging : true,
        
        
    } );
} );
    </script>