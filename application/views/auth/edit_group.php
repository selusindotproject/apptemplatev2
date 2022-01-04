<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">

            <div class="card-header">
                <h3 class="card-title"><?php echo lang('edit_group_heading');?></h3>
            </div>
            <!-- /.card-header -->

            <?php echo form_open(current_url());?>

            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_group_name_label', 'group_name');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($group_name, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_group_desc_label', 'description');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($group_description, '', 'class="form-control"');?>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-primary"');?>
            </div>

            <?php echo form_close();?>

        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->
