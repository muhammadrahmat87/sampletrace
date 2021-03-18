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
                echo anchor('trials/add', '<button class="btn btn-success margin">Add Trial</button>');     
				
            ?>

              <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-success">
                        <th width="5%">No</th>
                        <th width="8%">Trial Code</th>
                        <th width="17%">Title</th>
						            <th width="33%">Description</th>
                        <th width="6%">Location</th>
                       
                        <th width="11%">Start</th>
                        <th width="10%">Finish</th>
                        <th width="5%">Status</th>
                         
                        <th width="5%">Action</th>
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
					  
					  <td><?php echo tgl_indonesia($t['start']);  ?></td>	
					  <td><?php echo tgl_indonesia($t['finish']);  ?></td>	
					  
					  <td><?php 
					  
					  $tgl_sekarang=date("Y-m-d");//tanggal sekarang
						$tgl_mulai=$t['finish'];// tanggal launching aplikasi   </td>	
					  
						
						if ($tgl_sekarang >=$tgl_mulai )
							{
						    echo "Closed"; 
						}
							else
						{
							 echo "On Going";
						}?>  </td>	
					  
					  
					 					
					  
					<td>
                                       
                    <a href="<?php echo base_url(); ?>trials/edit/<?php echo $t['trial_code'] ?>" class="btn btn-xs btn-success" title="EDIT"data-placement="top"><i class="fa fa-edit"></i></a>                   
                   <a href="<?php echo base_url(); ?>trials/delete/<?php echo $t['trial_code'] ?>"class="btn btn-xs btn-danger" title="DELETE"><i onClick="return confirm('Yakin ingin menghapus data Trial <?php echo $t['trial_code']; ?> ?')"> <i class="fa fa-trash fa-fw"></i></i></a>					
                    
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

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->

 <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script>
      $(function() {
         $('#exampl').DataTable();
	    function filterData () {
		    $('#tabelData').DataTable().search(
		        $('.jenis_kelamin').val()
		    	).draw();
		}
		$('.jenis_kelamin').on('change', function () {
	        filterData();
	    });
	});
    </script>