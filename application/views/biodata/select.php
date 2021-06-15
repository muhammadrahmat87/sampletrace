<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Import</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('import/select', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Trial Code</label>
                      <div class="col-sm-2">
                        <input type="text" value="<?php echo $import['trial_code']; ?>" readonly="true" name="trial_code" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Title</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $import['title']; ?>" name="title" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $import['description']; ?>" name="description" class="form-control"  >
                      </div>
                  </div>  

                  <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-4">
                  <?php
                    echo anchor('import/form', 'Import', array('class'=>'btn btn-success'));
                    ?>
				            <?php
                    echo anchor('import', 'Back', array('class'=>'btn btn-default'));
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