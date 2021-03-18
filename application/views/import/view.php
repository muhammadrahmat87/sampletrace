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
                echo anchor('import/select', '<button  class="btn btn-success margin fa fa-upload"> Import</button>');     
				
            ?>

              <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-success">
                        <th width="2%">No</th>
                        <th width="15%">Trial Code</th>
                        <th width="30%">Title</th>
						            <th width="49%">Description</th>
                       
                       
                         
                        <th width="4%">Import</th>
                    </tr>
                </thead>
				
				<tbody>
                  <?php
                  $no = 0;
                  foreach ($import->result_array() as $t) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $t['trial_code']; ?></td>
					  <td><?php echo $t['title']; ?></td>
					  <td><?php echo $t['description']; ?></td>
				 
					  
					  
					  
					  
					 					
					  
					<td>
                                       
                    <a href="<?php echo base_url(); ?>import/select/<?php echo $t['trial_code'] ?>" class="btn btn-xs btn-success" title="IMPORT"data-placement="top"><i class="fa fa-upload"></i></a>                   
                   
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