<div class="row">

    <div class="col-md-12">

        <div class="card card-outline card-info">

            <div class="card-header">
                <h3 class="card-title">
                    <?php echo lang('create_user_heading');?>
                </h3>
            </div>
            <!-- /.card-header -->

            <?php echo form_open("auth/create_user", 'class="form-horizontal"');?>

            <div class="card-body">

                <?php if ($message != '') { ?>
                	<script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
                	<script src="<?php echo base_url() ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>
                	<script type="text/javascript">toastr.info("<?php echo $message ?>");</script>
                <?php } ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($first_name, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_lname_label', 'last_name');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($last_name, '', 'class="form-control"');?>
                    </div>
                </div>

                <?php
                if($identity_column!=='email') {
                ?>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_identity_label', 'identity');?></label>
                    <div class="col-sm-10">
                      <?php echo form_error('identity'); ?>
                      <?php echo form_input($identity, '', 'class="form-control"');?>
                    </div>
                  </div>
                <?php
                }
                ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_company_label', 'company');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($company, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_email_label', 'email');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($email, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_phone_label', 'phone');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($phone, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_password_label', 'password');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($password, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                    <div class="col-sm-10">
                        <?php echo form_input($password_confirm, '', 'class="form-control"');?>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
                <!-- Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin. -->
            </div>

            <?php echo form_close();?>

        </div>

    </div>
    <!-- /.col-->

</div>
<!-- ./row -->
