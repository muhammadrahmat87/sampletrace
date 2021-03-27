<!DOCTYPE html>
<html>

<head>

</head>
<br>
<div class="col-md-4" >
		  <div class="box ">
      <div class="box-header with-border" style="background-color:#169143">


<div class="form-group">
  <label class="col-sm-4 control-label"><h4 style="color: aquamarine" ><b>Trial Code</b></h4></label>
  <div class="col-sm-4">
    <select class="form-control" name="trial_code" onchange="getValue()" id="trial_code">
    </select>
  </div>
</div>
</div></div></div>

<section class="content">
<br>
 <div class="row">
   <div class="col-lg-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs box-success" style="background-color:#5cf29b"> 
        <li class="active"><a data-toggle="tab" href="#home"><b>Home</b></a></li>
        <li><a data-toggle="tab" href="#habitat"><b>Habitat Type</b></a></li>
        <li><a data-toggle="tab" href="#om"><b>Organic Material</b></a></li>
        <li><a data-toggle="tab" href="#freq"><b>Frequency</b></a></li>
        <li><a data-toggle="tab" href="#slopes"><b>Slopes</b></a></li>
        <li><a data-toggle="tab" href="#mp"><b>Manajemen Practices</b></a></li>
        <li><a data-toggle="tab" href="#direction"><b>Direction</b></a></li>
        <li><a data-toggle="tab" href="#distance"><b>Distance</b></a></li>
        <li><a data-toggle="tab" href="#position"><b>Position</b></a></li>

        <li><a data-toggle="tab" href="#n"><b>N</b></a></li>
        <li><a data-toggle="tab" href="#p"><b>P</b></a></li>
        <li><a data-toggle="tab" href="#k"><b>K</b></a></li>
      </ul>

  <div class="tab-content">

  <div id="home" class="tab-pane fade in active">
  
  </div>
			<div id="habitat" class="tab-pane fade in active">
     
          <!-- /.box-header -->
         
     

        
      
        <div class="row">
          <div class="col-xs-5">

            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#31d6d3">
                <h3 class="box-title"><b>Habitat Type</b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <!-- button add -->

                <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
                  cellspacing="0" width="100%">
                  <thead>
                    <tr class="bg-success">
                      <th width="12%">No</th>
                      <th width="57%">Habitat Type</th>

                      <th width="29%">Feeding Activity (%)</th>

                    </tr>
                  </thead>

                  <tbody class="table-habitat">
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- BAR CHART -->
          <div class="col-md-7">
            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#31d6d3">
                <h3 class="box-title"><b>Habitat Type</b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div class="chart-habitat">
                  
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
  </div>

  
			<div id="om" class="tab-pane fade in active">

        <div class="row">
          <div class="col-xs-5">

            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#31d6d3">
                <h3 class="box-title"><b>Treatment (Organic Material)</b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <!-- button add -->

                <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
                  cellspacing="0" width="100%">
                  <thead>
                    <tr class="bg-success">
                      <th width="12%">No</th>
                      <th width="57%">Treatment Organic Material</th>

                      <th width="29%">Feeding Activity (%)</th>

                    </tr>
                  </thead>

                  <tbody class="table-om">
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- BAR CHART -->
          <div class="col-md-7">
            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#31d6d3">
                <h3 class="box-title"><b>Treatment (Organic Material)</b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">

                <div class="chart-om">   
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </div>


  <div id="freq" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Frequency)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment Frequency</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-freq">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Frequency)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-freq">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>
      
			<div id="slopes" class="tab-pane fade in active">

        <div class="row">
          <div class="col-xs-5">

            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#31d6d3">
                <h3 class="box-title"><b>Treatment (Slopes)</b></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <!-- button add -->

                <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
                  cellspacing="0" width="100%">
                  <thead>
                    <tr class="bg-success">
                      <th width="12%">No</th>
                      <th width="57%">Treatment Slopes</th>

                      <th width="29%">Feeding Activity (%)</th>

                    </tr>
                  </thead>

                  <tbody class="table-slopes">
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- BAR CHART -->
          <div class="col-md-7">
            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#31d6d3">
                <h3 class="box-title"><b>Treatment (Slopes)</b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">

                <div class="chart-slopes">   
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </div>

      <div id="mp" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Manajemen Practices)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment Manajemen Practices</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-mp">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Manajemen Practices)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-mp">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>

<div id="direction" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Direction)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment Direction</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-direction">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Direction)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-direction">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>

<div id="distance" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Distance)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment Distance</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-distance">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Distance)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-distance">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>

<div id="position" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Position)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment Position</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-position">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (Position)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-position">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>


<div id="n" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (N)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment N</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-n">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (N)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-n">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>


<div id="p" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (P)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment P</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-p">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (P)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-p">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>



<div id="k" class="tab-pane fade in active">

<div class="row">
  <div class="col-xs-5">

    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (K)</b></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <!-- button add -->

        <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
          cellspacing="0" width="100%">
          <thead>
            <tr class="bg-success">
              <th width="12%">No</th>
              <th width="57%">Treatment K</th>

              <th width="29%">Feeding Activity (%)</th>

            </tr>
          </thead>

          <tbody class="table-k">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- BAR CHART -->
  <div class="col-md-7">
    <div class="box box-success">
      <div class="box-header with-border" style="background-color:#31d6d3">
        <h3 class="box-title"><b>Treatment (K)</b></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i
              class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <div class="chart-k">   
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</div>

    </div>



        

  </section>
  <!-- Modal -->
  <div class="col-md-12">
  <div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Loading</h5>
        </div>
        <div class="modal-body">
        
<link rel="stylesheet" href="<?=base_url()?>assets/css/loading.css">
<div class="x_content loading">
    <div class="loader">Loading...</div>
</div>

        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div></div>
  <!-- /.content -->
 

   
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- ChartJS -->
  <script src="../../bower_components/chart.js/Chart.js"></script>
  <!-- FastClick -->
  <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    let url = "<?=base_url();?>"
    $(document).ready(function () {
      getFilter();

    });

    function getFilter() {
      $.ajax({
        type: "POSt",
        url: url + "Chart/filterSelect",
        data: "data",
        dataType: "JSON",
        success: function (response) {
          let html = "";
          response.data.trial_code.forEach(element => {
            html += `<option value="` + element.trial_code + `">` + element.trial_code + `</option>`;
          });
          $("#trial_code").html(`<option value="all">All</option>` + html);
          getValue();

        }
      });
    }

    function getValue() {
      
      $(".chart-habitat").html(``);
      $(".chart-om").html(``);
      $(".chart-freq").html(``);
      $(".chart-slopes").html(``);
      $(".chart-mp").html(``);
      $(".chart-direction").html(``);
      $(".chart-distance").html(``);
      $(".chart-position").html(``);
      $(".chart-n").html(``);
      $(".chart-p").html(``);
      $(".chart-k").html(``);
      $("#loading").modal("show");
      let value = $("#trial_code").children("option:selected").val();
      $.ajax({
        type: "POST",
        url: url + "Chart/index",
        data: {
          value: value
        },
        dataType: "JSON",
        success: function (response) {
          $(".chart-habitat").html(`<canvas id="barChart" style="height:200px"></canvas>`);
          $(".chart-om").html(`<canvas id="barChartom" style="height:200px"></canvas>`);
          $(".chart-freq").html(`<canvas id="barChartfreq" style="height:200px"></canvas>`);
          $(".chart-slopes").html(`<canvas id="barChartslopes" style="height:200px"></canvas>`);
          $(".chart-mp").html(`<canvas id="barChartmp" style="height:200px"></canvas>`);
          $(".chart-direction").html(`<canvas id="barChartdirection" style="height:200px"></canvas>`);
          $(".chart-distance").html(`<canvas id="barChartdistance" style="height:200px"></canvas>`);
          $(".chart-position").html(`<canvas id="barChartposition" style="height:200px"></canvas>`);
          $(".chart-n").html(`<canvas id="barChartn" style="height:200px"></canvas>`);
          $(".chart-p").html(`<canvas id="barChartp" style="height:200px"></canvas>`);
          $(".chart-k").html(`<canvas id="barChartk" style="height:200px"></canvas>`);
          chart(response);
          showTableHabitat(response)
          showTableOM(response)
          showTableFREQ(response)
          showTableSLOPES(response)
          showTableMP(response)
          showTableDIRECTION(response)
          showTableDISTANCE(response)
          showTablePOSITION(response)
          showTableN(response)
          showTableP(response)
          showTableK(response)
          $("#loading").modal("hide");
        }
      });
    }


    function showTableOM(response) { 
      let html="";
      
      let number=1;
      response.om.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.om+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-om").html(html);
     }

     function showTableFREQ(response) { 
      let html="";
      
      let number=1;
      response.freq.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.freq+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-freq").html(html);
     }

     function showTableSLOPES(response) { 
      let html="";
      
      let number=1;
      response.slopes.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.slopes+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-slopes").html(html);
     }

     function showTableMP(response) { 
      let html="";
      
      let number=1;
      response.mp.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.mp+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-mp").html(html);
     }

     function showTableDIRECTION(response) { 
      let html="";
      
      let number=1;
      response.direction.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.direction+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-direction").html(html);
     }

     function showTableDISTANCE(response) { 
      let html="";
      
      let number=1;
      response.distance.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.distance+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-distance").html(html);
     }

     function showTablePOSITION(response) { 
      let html="";
      
      let number=1;
      response.position.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.position+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-position").html(html);
     }

     function showTableN(response) { 
      let html="";
      
      let number=1;
      response.n.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.n+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-n").html(html);
     }

     function showTableP(response) { 
      let html="";
      
      let number=1;
      response.p.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.p+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-p").html(html);
     }

     function showTableK(response) { 
      let html="";
      
      let number=1;
      response.k.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.k+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-k").html(html);
     }

     function showTableHabitat(response) { 
      let html="";
      
      let number=1;
      response.habitat.detail.forEach(element => {
        html+=` <tr>
                      <td>`+number++ +`</td>
                      <td>`+element.habitat+`</td>
                      <td>`+element.percentage+`</td>
                    </tr>`;
      });
      $(".table-habitat").html(html);
     }
  </script>
  <script>
    function chart(data) {
      $("#barChart").html("");
      $("#barChartfreq").html("");
      $("#barChartslopes").html("");
      $("#barChartmp").html("");
      $("#barChartdirection").html("");
      $("#barChartdistance").html("");
      $("#barChartposition").html("");
      $("#barChartn").html("");
      $("#barChartp").html("");
      $("#barChartk").html("");
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- BAR CHART -
      //--------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.habitat.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#057c82',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#057c82',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.habitat.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 30,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 300,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)
    

      var barChartCanvas = $('#barChartom').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.om.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#943009',
              strokeColor: '#943009',
              pointColor: '#248f24',
              pointStrokeColor: '#943009',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.om.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 90,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 10,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)


      var barChartCanvas = $('#barChartfreq').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.freq.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#057c82',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#057c82',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.freq.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 30,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 300,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartslopes').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.slopes.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#943009',
              strokeColor: '#943009',
              pointColor: '#248f24',
              pointStrokeColor: '#943009',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.slopes.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 90,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 10,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }


      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartmp').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.mp.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#057c82',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#057c82',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.mp.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 30,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 300,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }
      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartdirection').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.direction.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#943009',
              strokeColor: '#943009',
              pointColor: '#248f24',
              pointStrokeColor: '#943009',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.direction.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 90,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 10,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }


      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartdistance').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.distance.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#057c82',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#057c82',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.distance.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 30,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 300,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartposition').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.position.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#943009',
              strokeColor: '#943009',
              pointColor: '#248f24',
              pointStrokeColor: '#943009',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.position.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 90,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 10,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }


      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartn').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.n.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#057c82',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#057c82',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.n.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 30,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 300,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartp').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.p.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#943009',
              strokeColor: '#943009',
              pointColor: '#248f24',
              pointStrokeColor: '#943009',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.p.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 90,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 10,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      var barChartCanvas = $('#barChartk').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.k.label,
          datasets: [

            {
              label: 'Score 1',
              fillColor: '#057c82',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#057c82',
              pointHighlightFill: '#fff',
              pointHighlightStroke: '#248f24',
              data: data.k.data
            }
          ]
        }



      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: '#d8e2e3',
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 30,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 300,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

    }
  </script>
  </body>

</html>