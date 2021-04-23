<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Trial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('trials/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Trial Code</label>
                      <div class="col-sm-2">
                        <input type="text" name="trial_code" class="form-control"   required>
                      </div>
                </div>  
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>
                      <div class="col-sm-6">
                        <input type="text" name="title" class="form-control"   required>
                      </div>
                </div>
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-6">
                        <input type="text" name="description" class="form-control"   required>
                      </div>
                </div>				  
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Location</label>
                      <div class="col-sm-2">
                        <input type="text" name="location" class="form-control"  required>
                      </div>
                </div>
				        
                <div class="form-group">
                  <label class="col-sm-2 control-label">Region</label>
                      <div class="col-sm-2">
                        <input type="text" name="region" class="form-control"   required>
                      </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">PSM</label>
                      <div class="col-sm-2">
                        <input type="text" name="psm" class="form-control"   required>
                      </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Starting Year</label>
                      <div class="col-sm-2">
                        <input type="text" name="start" class="form-control"   required>
                      </div>
                </div>
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Target Finish</label>
                      <div class="col-sm-2">
                        <input type="text" name="finish" class="form-control"   required>
                      </div>
                </div>
				  
				         
				  
                <input type="hidden" name="last_update" value="<?php echo date("Y-m-d"); ?>" />

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