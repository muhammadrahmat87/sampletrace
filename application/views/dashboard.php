

<section class="content" >
      <!-- Info boxes -->
      <div class="row" >
        
       
	   
	    <!-- /.col -->
      <div class="col-md-12" >
		  <div class="box ">
      <div class="box-header with-border bg-blue"  >
      <marquee direction="left" scrollamount="8"  ><h3  style="color: white" class="box-title"  ><b style="font-style:inherit">Data Management System for Bait Lamina Project  
</h3> </marquee>
              

      </div></div></div>
     
      <div class="col-md-4 col-sm-12 col-xs-1111">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion-earth"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total PSM</span>
              <span class="info-box-number"><h3>4</h1></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-home"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Region</span>
              <h3><?php echo $ree['hasil']; ?></h3>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box ">
            <span class="info-box-icon bg-green"><i class="ion-location"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Estate</span>
              <span class="info-box-number"><h3>12</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion-leaf"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Trials</span>
              <span class="info-box-number">                  
              <h3><?php echo $alltrials['hasil']; ?></h3>
              <small> </small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
       
	    <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-maroon"><i class="ion ion-checkmark"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Trial Active</span>
              <span class="info-box-number">
			  <h3><?php echo $aktif['hasil']; ?></h3>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="ion-close "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Trial Closed</span>
              <span class="info-box-number">
			  <h3><?php echo $closed['hasil']; ?></h3>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
     
      </div>




    <!-- Main content -->
    <section class="contenter">
      <div class="row">

      
		

            <!-- DONUT CHART -->
            <div class="col-md-4">
            <div class="box box-primary">
      <div class="box-header with-border bg-blue"  >
              <h3  style="color: white" class="box-title" >Trial Status </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" style="background-color: white;" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool"  style="background-color: white;" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              </div>
              <div class="box-body">
                <canvas id="statusChart" style="height:300px; min-height:300px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

               <!-- DONUT CHART -->
               <div class="col-md-4">
               <div class="box box-primary">
      <div class="box-header with-border bg-blue"  >
              <h3  style="color: white" class="box-title" >PSM </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" style="background-color: white;" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" style="background-color: white;" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              </div>
              <div class="box-body">
                <canvas id="psmChart" style="height:300px; min-height:300px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
               </div>

              <!-- DONUT CHART -->
              <div class="col-md-4">
              <div class="box box-primary">
      <div class="box-header with-border bg-blue"  >
              <h3  style="color: white" class="box-title" >Region</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" style="background-color: white;" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool " style="background-color: white;" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              </div>
              <div class="box-body">
                <canvas id="regionChart" style="height:300px; min-height:300px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
               </div>

           

          
          
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="box box-primary  ">
          <div class="box-header with-border bg-blue">
          <h3  style="color: white" class="box-title">Trial Year </h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool"  style="background-color: white;" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool"  style="background-color: white;" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              </div>
              <div class="box-body">  
                <div class="chart">
                  <canvas id="lineChart" style="height:250px; min-height:230px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

            <!-- BAR CHART -->
            <div class="col-md-6">
            <div class="box box-primary  ">
          <div class="box-header with-border bg-blue">
          <h3  style="color: white" class="box-title">Trial Year </h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool"  style="background-color: white;" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool"  style="background-color: white;" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              </div>
              <div class="box-body">  
                <div class="chart">
                  <canvas id="barChart" style="height:250px; min-height:230px"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

            <!-- STACKED BAR CHART 
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Stacked Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="height:230px; min-height:230px"></canvas>
                </div>
              </div>
              --> 
            
            <!-- /.box-body -->
         

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
   
  
  
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../../bower_components/charttt.js/Chart.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>

  $(function () {
   
    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#lineChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['2014 ', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
      datasets: [
       
        {
          label               : 'Closed',
          backgroundColor     : '#00c0ef',
          borderColor         : '#00c0ef',
          pointRadius         : false,
          pointColor          : '#17cfcf',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#17cfcf',
          data                : [0, 0, 0, 1, 6, 7, 15, 15]
        }, {
          label               : 'On Going',
          backgroundColor     : '#cc1078',
          borderColor         : '#cc1078',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : '#cc1078',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#cc1078',
          data                : [0, 1, 4, 6	, 5, 12, 6, 6]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    //-------------
    //- STATUS CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#statusChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'On Going', 
          'Closed',
           
      ],
      datasets: [
        {
          data: [ <?php echo $aktif['hasil']; ?>,
                  <?php echo $closed['hasil']; ?> 
          ],
          backgroundColor : [  '#cc1078', '#00c0ef' ],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })


     //-------------
    //- PSM CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#psmChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'PSM 1', 
          'PSM 2',
          'PSM 5', 
          'PSM 6'
           
      ],
      datasets: [
        {
          data: [ 
            <?php echo $psm1['aaa']; ?>,
            <?php echo $psm2['bbb']; ?>,
            <?php echo $psm5['ccc']; ?>,
            <?php echo $psm6['ddd']; ?>
           ],
          backgroundColor : ['#f39c12', '#00c0ef','#e0e649','#cc1078'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })


     //-------------
    //- PSM CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#regionChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Siak', 
          'Lampung',
          'Kampar', 
          'Kalimantan Tengah',
          'Palembang',
          'Jambi',
          'Belitung',
          'Indragiri'
           
      ],
      datasets: [
        {
          data: [ 
            <?php echo $regions['Siak']; ?>,
            <?php echo $regionl['Lampung']; ?>,
            <?php echo $regionk['Kampar']; ?>,
            <?php echo $regionkt['Kalimantan']; ?>,
            <?php echo $regionp['Palembang']; ?>,
            <?php echo $regionj['Jambi']; ?>,
            <?php echo $regionb['Belitung']; ?>,
            <?php echo $regioni['Indragiri']; ?>,
           ],
          backgroundColor : ['#f39c12', '#00c0ef','#e0e649','#07a6a3','#cc1078','#4df70f','#faf605','#ed0cde'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })

  
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = {
      labels  : ['2014 ', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
      datasets: [
        {
          label               : 'On Going',
          backgroundColor     : '#cc1078',
          borderColor         : '#cc1078',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : '#cc1078',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#cc1078',
          data                : [0, 1, 4, 6	, 5, 12, 6, 6]
        },
        {
          label               : 'Closed',
          backgroundColor     : '#00c0ef',
          borderColor         : '#00c0ef',
          pointRadius         : false,
          pointColor          : '#17cfcf',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: '#17cfcf',
          data                : [0, 0, 0, 1, 6, 7, 15, 15]
        }, 
      ]
    }
    

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
</body>
</html>

 

            <!-- /.box-body -->
        