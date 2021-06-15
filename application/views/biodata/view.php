<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-success">
            <div class="box-header  with-border">
              <h3 class="box-title">Biodata</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('biodata/form', '<button  class="btn-lg btn-success fa fa-upload"> Import Biodata</button>');     
            ?><p></p>
            <br>

              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                <tr class="bg-olive">
                  
						      <th>Nama</th>
                  <th>NIK</th>
					      	<th>Section</th>
                  <th>No. HP</th>
                </thead>
				
				<tbody>
                  <?php
                  $no = 0;
                  foreach ($biodata->result_array() as $t) :
                    $no++;  
                    ?>   
                  <tr>
                  <td width="15%"> 
					            <?php echo $t['nama']; ?> <br> 
                  </td>
                  <td width="15%"> 
					            <?php echo $t['nik']; ?> <br> 
                  </td>
                  <td width="15%"> 
					            <?php echo $t['section']; ?> <br> 
                  </td>
					        <td width="15%"> 
					            <?php echo $t['hp']; ?> <br> 
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
       "ordering": false,
        pageLength: 5,  
        paging : true,
        
        
    } );
} );
    </script>

 