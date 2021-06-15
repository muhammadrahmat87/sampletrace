<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Trials</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('registration/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">


                <div class="form-group">
                      
                      <div class="col-sm-2">
                        <input type="hidden" value="<?php echo $trials['kode']; ?>" readonly="true" name="kode" class="form-control"  >
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Trial Code</label>
                      <div class="col-sm-2">
                        <input type="text" value="<?php echo $trials['trial_code']; ?>" readonly="true" name="trial_code" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Title</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['title']; ?>" name="title" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['description']; ?>" name="description" class="form-control"  >
                      </div>
                  </div>
				  
				          <div class="form-group">
                      <label class="col-sm-2 control-label">Location</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['location']; ?>" name="location" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Region</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['region']; ?>" name="region" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">PSM</label></label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['psm']; ?>" name="psm" class="form-control"  >
                      </div>
                  </div>
				  
				         

				          <div class="form-group">
                      <label class="col-sm-2 control-label">Start</label>
                      <div class="col-sm-2">
                        <input type="text" value="<?php echo $trials['start']; ?>" name="start" class="form-control"  >
                      </div>
                  </div>
				  
				          <div class="form-group">
                      <label class="col-sm-2 control-label">Finish</label>
                      <div class="col-sm-2">
                        <input type="text" value="<?php echo $trials['finish']; ?>" name="finish" class="form-control"  >
                      </div>
                  </div>
				  
				          

                  <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-4">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
				            <?php
                    echo anchor('trials', 'Back', array('class'=>'btn btn-default'));
                    ?>
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