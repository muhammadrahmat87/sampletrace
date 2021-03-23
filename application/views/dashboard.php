

<section class="content" >
      <!-- Info boxes -->
      <div class="row" >
        
       
	   
	    <!-- /.col -->
      <div class="col-md-12" >
		  <div class="box ">
      <div class="box-header with-border" style="background-color:seagreen">
      <marquee direction="left" scrollamount="8"  ><h3  style="color: white" class="box-title" ><b>Data management system for Bait Lamina Project using desktop application
</h3> </marquee>
              

      </div></div></div>
     
      <div class="col-md-4 col-sm-12 col-xs-1111">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion-earth"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total PSM</span>
              <span class="info-box-number"><h3>3</h1></span>
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
            <span class="info-box-icon bg-yellow"><i class="ion ion-checkmark"></i></span>

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

      <div class="col-md-6">
		  <div class="box ">
      <div class="box-header with-border" style="background-color:slategrey">
              <h3  style="color: white" class="box-title" >Status </h3>
            
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="statusChart" style="height:100px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
        </div> 

        <div class="col-md-6">
		  <div class="box box-success">
      <div class="box-header with-border" style="background-color:slategrey">
              <h3 style="color: white" class="box-title">Region </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="regionChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div></div>


        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-success">
          <div class="box-header with-border" style="background-color:slategrey">
              <h3  style="color: white" class="box-title">Trial Year </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            <center> <i class="fa fa-circle text-gray"></i> On going
                    </span>
                    <span class="mr-2">
                        <i class="fa fa-circle text-blue"></i> Closed
              <div class="chart">
                <canvas id="yearChart" style="height:330px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div></div>
          <!-- /.box -->

          
			  

               
            
         
          
               
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  
  
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

  $(function () {
   
  
    

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    var pieChartCanvas = $('#statusChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [  
      {
        value    : <?php echo $aktif['hasil']; ?>,
        color    : '#00c0ef',
        highlight: '#49116b',
        label    : 'On going'
      },
      {
        value    : <?php echo $closed['hasil']; ?>,
        color    : '#f39c12',
        highlight: '#49116b',
        label    : 'Closed'
      } 
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 0, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)



  


    var pieChartCanvas = $('#regionChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
     
      
      {
        value    : <?php echo $regions['Siak']; ?>,
        color    : '#00a65a',
        highlight: '#49116b',
        label    : 'Siak'
      }, 
      {
        value    : <?php echo $regionl['Lampung']; ?>,
        color    : '#faf605',
        highlight: '#49116b',
        label    : 'Lampung'
      }, 
      {
        value    : <?php echo $regionk['Kampar']; ?>,
        color    : '#ed0cde',
        highlight: '#49116b',
        label    : 'Kampar'
      }, 
      {
        value    : <?php echo $regionkt['Kalimantan']; ?>,
        color    : '#00c0ef',
        highlight: '#49116b',
        label    : 'Kalimantan Tengah'
      }, 
      {
        value    : <?php echo $regionp['Palembang']; ?>,
        color    : '#e0e649',
        highlight: '#49116b',
        label    : 'Palembang'
      }, 
      {
        value    : <?php echo $regionj['Jambi']; ?>,
        color    : '#f39c12',
        highlight: '#49116b',
        label    : 'Jambi'
      }, 
      {
        value    : <?php echo $regionb['Belitung']; ?>,
        color    : '#4df70f',
        highlight: '#49116b',
        label    : 'Belitung'
      }, 
      {
        value    : <?php echo $regioni['Indragiri']; ?>,
        color    : '#d2d6de',
        highlight: '#49116b',
        label    : 'Indragiri'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 0, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)  




 

        //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#yearChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['2014 ', '2015', '2016', '2017', '2018', '2019', '2020'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(0, 192, 239)',
          
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(10, 214, 222, 1)',
          pointStrokeColor    : '#2c2e30',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [1, 3, 4, 4, 6, 7, 10]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba( 243, 156, 18)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [1, 1, 2, 3, 3, 4, 4]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }
    areaChart.Line(areaChartData, areaChartOptions)

   
  })
</script>
</body>
</html>

 

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>  