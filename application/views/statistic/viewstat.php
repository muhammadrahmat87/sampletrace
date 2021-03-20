<!DOCTYPE html>
<html>

<head>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box box-primary">
          <div class="box-header  with-border">
            <h3 class="box-title">Statistic & Graph</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-2 control-label">Trial Code</label>
              <div class="col-sm-2">
                <select class="form-control" name="trial_code" onchange="getValue()" id="trial_code">

                </select>
              </div>

              <div class="col-sm-2">
                <button type="button" onclick="processFilter()" class="btn btn-primary">Filter</button>

              </div>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-xs-5">

            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#CCCCCC">
                <h3 class="box-title">Statistic - Habitat Type</h3>
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

                      <th width="19%">Feeding Activity</th>

                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Between EFB Soil</td>
                      <td>0.4</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Control</td>
                      <td>0.9</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- BAR CHART -->
          <div class="col-md-7">
            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#CCCCCC">
                <h3 class="box-title">Bar Chart - Habitat Type</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">



                <div class="chart">
                  <canvas id="barChart" style="height:330px"></canvas>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>




        <div class="row">
          <div class="col-xs-5">

            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#CCCCCC">
                <h3 class="box-title">Statistic - Organic Material</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <!-- button add -->

                <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable"
                  cellspacing="0" width="100%">
                  <thead>
                    <tr class="bg-success">
                      <th width="12%">No</th>
                      <th width="57%">Organic Material</th>

                      <th width="19%">Score</th>

                    </tr>
                  </thead>

                  <tbody>
                    <td>1</td>
                    <td>Control</td>
                    <td>0.4</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>EFB</td>
                      <td>0.9</td>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- BAR CHART -->
          <div class="col-md-7">
            <div class="box box-success">
              <div class="box-header with-border" style="background-color:#CCCCCC">
                <h3 class="box-title">Bar Chart - Organic Material</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                      class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">



                <div class="chart">
                  <canvas id="barChart2" style="height:330px"></canvas>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>


        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
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
      let value = $("#trial_code").children("option:selected").val();
      $.ajax({
        type: "POST",
        url: url + "Chart/index",
        data: {
          value: value
        },
        dataType: "JSON",
        success: function (response) {
          chart(response);
        }
      });
    }
  </script>
  <script>
    function chart(data) {
      $("#barChart").html("");
      $("#barChart2").html("");
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
              fillColor: '#248f24',
              strokeColor: '#248f24',
              pointColor: '#248f24',
              pointStrokeColor: '#248f24',
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
        scaleGridLineColor: 'rgba(0,0,0,.05)',
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
        barValueSpacing: 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 1,
        //String - A legend template
        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      }

      barChartOptions.datasetFill = false
      barChart.Bar(barChartData, barChartOptions)

      //- BAR CHART -
      //--------------
      var barChartCanvas = $('#barChart2').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData =


        {
          labels: data.organic_material.label,
          datasets: [{
            label: 'Score 1',
            fillColor: '#248f24',
            strokeColor: '#248f24',
            pointColor: '#248f24',
            pointStrokeColor: '#248f24',
            pointHighlightFill: '#fff',
            pointHighlightStroke: '#248f24',
            data: data.organic_material.data
          }]
        }

      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: 'rgba(0,0,0,.05)',
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
        barValueSpacing: 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 1,
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