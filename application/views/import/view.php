<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Import</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('import/form', '<button  class="btn-lg btn-success fa fa-upload"> Import</button>');     
				
            ?><p></p>
            <br>

              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
				 <tr class="bg-blue">
                   <th >User</th>
						<th  >Description</th>
						<th  >File Name</th>
                </thead>
				
				<tbody>
                 <?php
                  $no = 0;
                  foreach ($trials->result_array() as $t) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td width="15%"> 
					   <b><?php echo $t['log_user']; ?></b><br>
                      <?php echo format_indo($t['log_time']); ?> <br>
					   <?php echo format_indo_jam($t['log_time']); ?> 
					  </td>
					   <td width="15%"> 
					  <?php echo $t['log_desc']; ?> <br> </td>
					   <td>  
            <b> <?php echo $t['log_file']; ?> </b>
			
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