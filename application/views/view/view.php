<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
          <h3 class="box-title">View All Data</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form id="form-filter" class="form-horizontal" method="POST">
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Trial Code</label>
            <div class="col-sm-2">
              <select class="form-control" name="trial_code" id="trial_code">
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Time Squence</label>
            <div class="col-sm-2">

              <select class="form-control" name="squence" id="squence">
               
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Replicate</label>
            <div class="col-sm-2">
              <select class="form-control" name="replicate" id="replicate">
                
              </select>

            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Location</label>
            <div class="col-sm-2">
              <select class="form-control" name="location" id="location">
                
              </select>

            </div>
          </div>


  




          <div class="form-group">
            <label for="LastName" class="col-sm-2 control-label"></label>
            <div class="col-sm-5">
              <button type="button" onclick="processFilter()" class="btn btn-success"">Filter</button>
              <button type="button" id="btn-reset"  onclick="return confirm('Reset Filter?')" class="btn btn-success"">Reset</button>
              <button type="button"   class="btn btn-success"">Export Excel</button>
              <button type="button" onClick="deleteFilter()" class="btn btn-danger">Delete</button>

            </div>
          </div>

          <div class="form-group">
             
            <div class="col-sm-2">
              
             
            </div>
          </div>


          <!-- /.box-header -->
           
          <div class="table-responsive">
            <table id="table-viewdata"
            class="table table-striped table-bordered table-hover table-full-width dataTable   dt-responsive nowrap"
              cellspacing="0" width="100%">

              <thead>
              <tr class="bg-blue">
                  <th rowspan="2" width="3%"> <center>No</th>
                  <th rowspan="2" width="8%"> <center>Trial Code</th>
                  <th rowspan="2" width="29%"> <center>Title</th>
                  <th rowspan="2" width="11%"> <center>Location</th>
                  <th rowspan="2" width="5%"> <center>Block</th>
                  <th rowspan="2" width="6%"><center>Palm Age</th>
                  <th rowspan="2" width="6%"><center>Start</th>
                  <th rowspan="2" width="6%"><center>Finish</th>
                 
                  <th colspan="12" ><center>Treatment</center></th>
                  
                  
                  <th rowspan="2" width="6%"><center>Treatment GPS</th>

                  <th rowspan="2" width="5%"><center>Time Squence</th>
                  <th rowspan="2" width="5%"><center>Days After Aplication</th>
                  <th rowspan="2" width="6%"><center>Replicate</th>
                  <th rowspan="2" width="5%"><center>Degree</th>
                  <th rowspan="2" width="5%"><center>Palm Number</th>
                  <th rowspan="2" width="5%"><center>Habitat Type</th>
                  <th rowspan="2" width="5%"><center>Bait ID</th>
                  <th rowspan="2" width="5%"><center>Hole</th>
                  <th rowspan="2" width="6%"><center>Bait Score</th>
                  <th rowspan="2" width="6%"><center>Soil Humidity</th>
                  <th rowspan="2" width="6%"><center>Temperature</th>
                  <th rowspan="2" width="6%"><center>Rainfall During Installation</th>
                  <th rowspan="2" width="6%"><center>Rainfall 3 Days Before Installation</th>
                  <th rowspan="2" width="6%"><center>Rainfall 6 Days Before Installation</th>
                  <th rowspan="2" width="5%"><center>Porosity</th>
                  <th rowspan="2" width="5%"><center>Agregate Stability</th>
                  <th rowspan="2" width="5%"><center>Field Capacity</th>
                  <th rowspan="2" width="5%"><center>Wilting Point</th>

                  <th rowspan="2" width="5%"><center>pH_0-5</th>
                  <th rowspan="2" width="5%"><center>C-Org_0-5</th>
                  <th rowspan="2" width="5%"><center>N-Total_0-5</th>
                  <th rowspan="2" width="5%"><center>C/N_0-5</th>
                  <th rowspan="2" width="5%"><center>P total_0-5</th>
                  <th rowspan="2" width="5%"><center>K total_0-5</th>
                  <th rowspan="2" width="5%"><center>KTK_0-5</th>
                  <th rowspan="2" width="5%"><center>Mg_0-5</th>
                  <th rowspan="2" width="5%"><center>Ca_0-5</th>
                  <th rowspan="2" width="5%"><center>P Bray_0-5</th>
                  <th rowspan="2" width="5%"><center>K_0-5</th>
                  <th rowspan="2" width="5%"><center>Na_0-5</th>
                  <th rowspan="2" width="5%"><center>H-Tkr_0-5</th>
                  <th rowspan="2" width="5%"><center>Al-Tkr_0-5</th>
                  <th rowspan="2" width="5%"><center>pH_5-10</th>
                  <th rowspan="2" width="5%"><center>C-Org_5-10</th>
                  <th rowspan="2" width="5%"><center>N-Total_5-10</th>
                  <th rowspan="2" width="5%"><center>C/N_5-10</th>
                  <th rowspan="2" width="5%"><center>P total_5-10</th>
                  <th rowspan="2" width="5%"><center>K total_5-10</th>
                  <th rowspan="2" width="5%"><center>KTK_5-10</th>
                  <th rowspan="2" width="5%"><center>Mg_5-10</th>
                  <th rowspan="2" width="5%"><center>Ca_0-10</th>
                  <th rowspan="2" width="5%"><center>P Bray_0-10</th>
                  <th rowspan="2" width="5%"><center>K_0-10</th>
                  <th rowspan="2" width="5%"><center>Na_0-10</th>
                  <th rowspan="2" width="5%"><center>H-Tkr_0-10</th>
                  <th rowspan="2" width="5%"><center>Al-Tkr_0-10</th>
                  <th rowspan="2" width="5%"><center>Edit</th>

                </tr>
                <tr class="bg-olive">
                                        <th>
                                            <center>Organic Material                                                 
                                            </center>
                                        </th>
                                        <th>
                                            <center>Rate            
                                            </center>
                                        </th>
                                        <th>
                                            <center>Frequency
                                            </center>
                                        </th>
                                        <th>
                                            <center> Slopes  </center>
                                        </th>
										                   <th>
                                            <center>Management Practices </center>
                                        </th>
										 
										 <th>
                                            <center> Direction </center>
                                        </th>
										 <th>
                                            <center> Distance </center>
                                        </th>
										 <th>
                                            <center> Position </center>
                                        </th>
										 <th>
                                            <center> N  </center>
                                        </th>
										 <th>
                                            <center>P </center>
                                        </th>
										 <th>
                                            <center> K </center>
                                        </th>
										 <th>
                                            <center> Mg  </center>
                                        </th>
                                    </tr>
              </thead>




            </table>




          </div>
          <!-- /.box-body -->
        </div>
        </form>
      </div>

    </div>
    <!-- /.box-body -->
    </form>
  </div>
  <!-- /.box -->
   
  <!-- /.col -->
  
  <!-- /.row -->
</section>

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
<link rel="stylesheet"
  href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script type="text/javascript">
  
  $(document).ready(function () {
    showData();
    makeFilter();
   
  });
  let url = "<?=base_url()?>";


  function showData(data) {
    table = $('#table-viewdata').DataTable({
      scrollY: 500,
      scrollX: true,
      pageLength: 200,  
      ordering: false,  
      searching: false,
      processing: true,
      serverSide: true,
      destroy: true,
      order: [],
      
      ajax: {
        "url": "<?=base_url();?>viewdata/getViewdata",
        "type": "POST",
        "data":data
      },
      "columnDefs": [{
        "aTargets": [0],
        "orderable": false, //set not orderable

      }],
    });
  }

  function makeFilter() {
    $.ajax({
      type: "POST",
      url: url + "viewdata/filterSelect",
      data: "data",
      dataType: "JSON",
      success: function (response) {
        let trial_code = ""
        response.trial_code.forEach(element => {
          trial_code += `<option value="` + element.trial_code + `">` + element.trial_code + `</option>`;
        });
        $("#trial_code").html(` <option value="">All</option>` + trial_code);
        // 
        let squence = "";
        response.squence.forEach(element => {
          squence += `<option value="` + element.time_squence + `">` + element.time_squence + `</option>`;
        });
        $("#squence").html(` <option value="">All</option>` + squence);
        // 
        let replicate = "";
        response.replicate.forEach(element => {
          replicate += `<option value="` + element.replicate + `">` + element.replicate + `</option>`;
        });
        $("#replicate").html(` <option value="">All</option>` + replicate);

        let location = "";
        response.location.forEach(element => {
          location += `<option value="` + element.location + `">` + element.location + `</option>`;
        });
        $("#location").html(` <option value="">All</option>` + location);
      }
    });
  }
  function processFilter() { 
    let data={
      trial_code:$("#trial_code").children("option:selected").val(),
      squence:$("#squence").children("option:selected").val(),
      replicate:$("#replicate").children("option:selected").val(),
      location:$("#location").children("option:selected").val(),
    }
    showData(data)
    // console.log('hi');
   }
   $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });

    function deleteFilter() { 
    let data={
      trial_code:$("#trial_code").children("option:selected").val(),
      squence:$("#squence").children("option:selected").val(),
      replicate:$("#replicate").children("option:selected").val(),
    }
    showData(data)
    // console.log('hi');
   }
</script>