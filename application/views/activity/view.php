<section class="content">
    <div class="row">
        <div class="col-xs-12	">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Log Activity</h3><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            

              <table id="example" class="table table-striped table-bordered table-hover 	"  >
                <thead>
                    <tr class="bg-blue">
                        <th width="1%">No</th>
                        <th >Date</th>
						<th  >Time</th>
						<th  >Activity</th>                   
                        <th  >Menu</th>
						 <th  >User</th>
                       
                       
                    </tr>
                </thead>
				
				<tbody>
                  <?php
                  $no = 0;
                  foreach ($trials->result_array() as $t) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo format_indo($t['log_time']); ?></td>
					   <td><?php echo format_indo_jam($t['log_time']); ?></td>
					 
					   
					  <td><?php echo $t['log_desc']; ?></td>
					   
            <td><?php echo $t['log_location']; ?></td>
			<td><?php echo $t['log_user']; ?></td>
            
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