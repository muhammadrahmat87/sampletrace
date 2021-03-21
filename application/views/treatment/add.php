<section class="content">
  <div class="row">
    <div class="col-xs-128">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Treatment</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <!-- <?php
                echo form_open_multipart('treatment/filter', 'role="form" class="form-horizontal"');
            ?> -->
            <form action="#"  class="form-horizontal filterData" method="post">
        <div class="box-body">

          <div class="form-group">
            <label class="col-sm-2 control-label">Trial Code</label>

            <div class="col-sm-2">
              <select name="trial_code" id="trial_code" class="form-control" onclick="search_data()">
              <option value=""></option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Replicate</label>
            <div class="col-sm-1">

              <select class="form-control " name="sreplicate" id="sreplicate">
                </select>
            </div>
          </div>

   <div class="form-group">
            <label class="col-sm-2 control-label">Select Time Squence</label>
            <div class="col-sm-1">

              <select class="form-control" name="stime" id="stime">
                
              </select>
            </div>
          </div>

          

          <div class="form-group">
            <label for="LastName" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
              <button type="button" onclick="filter()" id="btn-filter" class="btn btn-primary">Filter</button>
              <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Observation Date</label>
            <div class="col-sm-2">


              <input type="date" name="trial_code" class="form-control" placeholder="Trial Code">
            </div>

          </div>
          </form>

        </div>
        <!-- /.box-header -->
        <div class="tbl-header">
          <table id="table-treatment" class="table table-striped table-bordered table-hover table-full-width dataTable"
            cellspacing="0" width="100%">
            <thead>
              <tr>
                <th width="3%">No</th>
                <th width="24%">Trial Code</th>
                
                <th width="12%">Time Squence</th>
                <th width="11%">Replicate</th>
                <th width="11%">Habitat Type</th>
                <th width="12%">Baits</th>
                <th width="3%">Hole</th>
                <th width="12%">Score</th>
				<th width="12%">Treatment</th>

              </tr>
            </thead>

            <tbody>
              <!-- <?php
                  $no = 0;
                  foreach ($treatment->result_array() as $t) :
                    $no++;
                    ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $t['trial_code']; ?></td>
                
                <td><?php echo $t['time_squence']; ?></td>
                <td><?php echo $t['replicate']; ?></td>
                <td><?php echo $t['habitat_type']; ?>
                <td><?php echo $t['baits']; ?>
                <td><?php echo $t['hole']; ?>
                <td><i style="color: white;"><?=$t['score']?></i><input type="number" name="score" id="<?=$t['id']?>"
                    onchange="saveData(<?=$t['id']?>)" value="<?=$t['score']?>" min="0" max="1"></td>
              </tr>
              <?php endforeach; ?> -->

            </tbody>


          </table>

          <div class="col-sm-12" align="right">
            <button type="submit" name="submit" class="btn btn-success"> Save </button>
          </div>


        </div>
        <!-- /.box-body -->
      </div>
    </div>

  </div>
  <!-- /.box-body -->
  </form>
  </div>
  <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

<!-- Modal -->
<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" align="center" style="background-color:#66FFCC"><b
            style="font:Arial, Helvetica, sans-serif">PERINGATAN!!!</b></h5>
      </div>
      <div class="modal-body" align="center">
        Maaf, Score Yang Diinput Bukan 0 dan 1!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
<link rel="stylesheet"
  href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script type="text/javascript">
  $(document).ready(function () {
    getTrials();
    showData("");
    $('.treatment').on('change', function () {
      console.log($('.treatment').val());
    });
  });
  let url = "<?=base_url()?>";

  function saveData(id) {
    const score = $("#" + id).val();
    const data = {
      id: id,
      score: score
    }
    if (score > 1) {
      $("#modal-alert").modal("show");
    } else {
      // console.log(data);
      $.ajax({
        type: "POST",
        url: url + "treatment/saveScore",
        data: data,
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  }

  function showData(data) {
    table = $('#table-treatment').DataTable({

      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [],

      "ajax": {
        "url": "<?=base_url();?>treatment/getTreatment",
        "type": "POST",
        "data":{"filter":data}
      },
      "aoColumnDefs": [{
        "aTargets": [8],
        "mRender": function (data, type, row) {
          return `<i style="color: white;">` + row[8] + `</i><input type="number" name="score" id="` + row[
            9] + `"
                    onchange="saveData(` + row[9] + `)" value="` + row[8] + `" min="0" max="1">`
        }
      }],
    });
  }
  function getTrials() { 
    $.ajax({
      type: "POST",
      url: url+"treatment/getTrials",
      data: "data",
      dataType: "JSON",
      success: function (response) {
        if (response.status=='success') {
          let html='';
          response.data.forEach(element => {
            html+=`<option value="`+element.trial_code+`">`+element.trial_code+`</option>`;
          });
          $("#trial_code").html(html);
        }
      }
    });
   }
   function search_data() {
     $.ajax({
       type: "POST",
       url: url+"treatment/findTrials",
       data: {id:$("#trial_code").children("option:selected").val()},
       dataType: "JSON",
       success: function (response) {
         if (response.status=='success') {
           let sreplicate="";
           response.data.tot_replicate.forEach(element => {
             sreplicate+=`<option value="`+element+`">`+element+`</option>`;
           });
           $("#sreplicate").html(sreplicate);

           let stime="";
           response.data.tot_time_squence.forEach(element => {
            stime+=`<option value="`+element+`">`+element+`</option>`;
           });
           $("#stime").html(stime);
         }
       }
     });
     }
     function filter() {
       let trial_code=$("#trial_code").children("option:selected").val();
       let data=$(".filterData").serialize()+trial_code;
       showData(data);
       }
</script>