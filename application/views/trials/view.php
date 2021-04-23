<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">All Trials</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('trials/add', '<button class="btn-lg btn-success fa fa-plus"> Add Trial</button>');     
				
            ?>

              <table id="example" class="table table-striped table-bordered table-hover table-full-width dataTable"  >
                <thead>
                    <tr class="bg-blue">
                        <th width="1%">No</th>
                        <th width="7%">Code</th>
                        <th width="26%">Title</th>
						            <th width="26%">Description</th>
                        <th width="5%">Location</th>
                        <th width="5%">Region</th>
                        <th width="4%">PSM</th>
                       
                        <th width="4%">Start </th>
                        <th width="4%">Finish</th>
                        <th width="3%">Progress</th>
                         
                        <th >Action</th>
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
                      <td><?php echo $t['trial_code']; ?></td>
					  <td><?php echo $t['title']; ?></td>
					  <td><?php echo $t['description']; ?></td>
					  <td><?php echo $t['location']; ?></td>
            <td><?php echo $t['region']; ?></td>
            <td><?php echo $t['psm']; ?></td>
					  
					  <td><?php echo  $t['start'];  ?></td>	
					  <td><?php echo $t['finish'];  ?></td>	
					  
					  <td><?php 
					  
					  $tgl_sekarang=date("Y");//tanggal sekarang
						$tgl_mulai=$t['finish'];// tanggal launching aplikasi   </td>	
					  
						
						if ($tgl_sekarang >=$tgl_mulai )
							{
               
                echo "CLOSED";
               
                 	}
							else
						{
              echo '
              <button class="btn btn-xs btn-primary">ON GOING</button>
              ';
							
						}?>  </td>	
					  
					  
					 					
					  
					<td>
                                       
                    <a href="<?php echo base_url(); ?>trials/edit/<?php echo $t['kode'] ?>" class="btn btn-xs btn-warning" title="EDIT"data-placement="top"><i class="fa fa-edit"></i></a>                   
                   <a href="<?php echo base_url(); ?>trials/delete/<?php echo $t['kode'] ?>"class="btn btn-xs btn-danger" title="DELETE"><i onClick="return confirm('Yakin ingin menghapus Trial <?php echo $t['trial_code']; ?> ?')"> <i class="fa fa-trash fa-fw"></i></i></a>					
                    
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
        "scrollY": 550,
        "scrollX": true,
        paging : false,
        
        
    } );
} );
    </script>