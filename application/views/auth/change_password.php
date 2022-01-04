<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">

            <div class="card-header">
                <h3 class="card-title"><?php echo lang('change_password_heading');?></h3>
            </div>
            <!-- /.card-header -->

            <?php echo form_open("auth/create_group", 'class="form-horizontal"');?>

            <div class="card-body">

                <?php if ($message != '') { ?>
                	<script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
                	<script src="<?php echo base_url() ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>
                	<script type="text/javascript">toastr.info("<?php echo $message ?>");</script>
                <?php } ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('change_password_old_password_label', 'old_password');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($old_password, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($new_password, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($new_password_confirm, '', 'class="form-control"');?>
                    </div>
                </div>

                <?php echo form_input($user_id);?>

            </div>

            <div class="card-footer">
                <?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
            </div>

            <?php echo form_close();?>

        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->
