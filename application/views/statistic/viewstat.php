<!DOCTYPE html>
<html>
<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
          <h3 class="box-title">Statistic & Graph - Feeding Activity</h3>
         
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <br> <br>
        <div class="box-body">

          <div class="form-group">
          <label class="col-sm-1 control-label">Trial Code</label>
            <div class="col-sm-2">
              <select class="form-control" name="trial_code" onChange="getDataByTrial()" id="trial_code">         
              </select>
            </div>   
          </div>

 
  <br> <br>
  <div class="row">
    <div class="col-lg-12">
    <div class="box box-primary">
      <div class="nav-tabs-custom nav-tabs-custom-primary">
        <ul class="nav nav-tabs box-blue bg-aqua">
          <li class="active bg-aqua"><a data-toggle="tab" href="#habitat" onClick="showChart(1)"><b>Habitat Type</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(2)"> <b  > Organic Material</b> </a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(3)"><b>Frequency</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(4)"><b>Slopes</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(5)"><b>Manajemen Practices</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(6)"><b>Direction</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(7)"><b>Distance</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(8)"><b>Position</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(9)"><b>N</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(10)"><b>P</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(11)"><b>K</b></a></li>
          <li><a data-toggle="tab" href="#habitat" onClick="showChart(12)"><b>Days After Aplication</b></a></li>
        </ul>

        <div class="tab-content">


            <div class="row">
              <div class="col-xs-5">

                <div class="box box-primary">
                  <div class="box-header with-border bg-blue">
                    <h3 class="box-title name"><b> </b></h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                    <!-- button add -->

                    <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
                      cellspacing="0" width="100%">
                      <thead>
                        <tr class="bg-success">
                          <th width="12%">No</th>
                          <th width="57%" class="table_title">Habitat Type</th>

                          <th width="29%">Feeding Activity (%)</th>

                        </tr>
                      </thead>

                      <tbody class="table-stat">

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <!-- BAR CHART -->
              <div class="col-md-7">
                <div class="box box-primary">
                  <div class="box-header   with-border bg-blue">
                    <h3 class="box-title name"><b> </b></h3>

                    
                  </div>
                  <div class="box-body">
                    <div class="chart-habitat"  >
                     
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>


                </div>
          </div>



        </div>


    </div>   </div>
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
            <div class="loader">loading</div>
          </div>

        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>
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
<script src="../../bower_components/charttt.js/Chart.js"></script>
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
        showChart(1);
      }
    });
  }
  function getDataByTrial() {  
    let params=localStorage.getItem('params');
    showChart(params);
  }
  function showChart(params) {
    localStorage.setItem('params',params);
    let value = $("#trial_code").children("option:selected").val();
    let name = "";
    let dataName = '';
    let field = '';
    let table_title = '';
    if (params == 1) {
      name = "Habitat Type";
      field = 'habitat_type';
      table_title = 'Habitat Type'
    } else if (params == 2) {
      name = "Treatment (Organic Material)";
      field = 'treatment_om';
      table_title = 'Treatment (Organic Material)'
    } else if (params == 3) {
      name = "Treatment (Frequency)";
      field = 'treatment_freq';
      table_title = 'Treatment Frequency'
    } else if (params == 4) {
      name = "Treatment (Slopes)";
      field = 'treatment_slopes';
      table_title = 'Treatment Slopes'
    } else if (params == 5) {
      name = "Treatment (Manajemen Practices)";
      field = 'treatment_mp';
      table_title = 'Treatment Manajemen Practices'
    } else if (params == 6) {
      name = "Treatment (Distance)";
      field = 'treatment_distance';
      table_title = 'Treatment Distance'
    } else if (params == 7) {
      name = "Treatment (Direction)";
      field = 'treatment_direction';
      table_title = 'Treatment Direction'
    } else if (params == 8) {
      name = "Treatment (Position)";
      field = 'treatment_position';
      table_title = 'Treatment Position'
    } else if (params == 9) {
      name = "Treatment (N)";
      field = 'treatment_n';
      table_title = 'Treatment N'
    } else if (params == 10) {
      name = "Treatment (P)";
      field = 'treatment_p';
      table_title = 'Treatment P'
    } else if (params == 11) {
      name = "Treatment (K)";
      field = 'treatment_k';
      table_title = 'Treatment K'
    }
    else if (params == 12) {
      name = "Days After";
      field = 'days_after';
      table_title = 'Days After Aplication'
    }
    $(".name").text(name);
    $(".table_title").text(table_title);
    getValue(value, field);
  }

  function getValue(value, field) {

    $(".chart-habitat").html(``);
      
    $("#loading").modal("show");
    $.ajax({
      type: "POST",
      url: url + "Chart/index",
      data: {
        value: value,
        field: field,
      },
      dataType: "JSON",
      success: function (response) {
        $(".chart-habitat").html(`<canvas id="barChart" style="height:2050px"></canvas>`);
        chart(response);
        showTableHabitat(response);
        $("#loading").modal("hide");
      }
    });
  }

  function showTableHabitat(response) {
    let html = "";

    let number = 1;
    response.data_chart.detail.forEach(element => {
      html += ` <tr>
                      <td>` + number++ + `</td>
                      <td>` + element.label + `</td>
                      <td>` + element.percentage + `</td>
                    </tr>`;
    });
    $(".table-stat").html(html);
  }
</script>
<script>
  function chart(data) {
    $("#barChart").html("");
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
        labels: data.data_chart.label,
        datasets: [
          {
            label: 'Feeding Activity',     
            data: data.data_chart.data,
            backgroundColor     : '#046982',
          } 
        ]
      }

      var barChartOptions = {
        
      responsive              : true,
      maintainAspectRatio     : true,
      datasetFill             : false
    }


    barChartOptions.datasetFill = false
    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

  }
</script>
</body>

</html>