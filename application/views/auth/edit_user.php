<div class="row">

    <div class="col-md-12">

        <div class="card card-outline card-info">

            <div class="card-header">
                <h3 class="card-title">
                    <?php echo lang('edit_user_heading');?>
                </h3>
            </div>
            <!-- /.card-header -->

            <?php echo form_open(uri_string(), 'class="form-horzontal"');?>

            <div class="card-body">

                <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                <?php if ($message != '') { ?>
                	<script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
                	<script src="<?php echo base_url() ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>
                	<script type="text/javascript">toastr.info("<?php echo $message ?>");</script>
                <?php } ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_fname_label', 'first_name');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($first_name, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_lname_label', 'last_name');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($last_name, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_company_label', 'company');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($company, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_phone_label', 'phone');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($phone, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_password_label', 'password');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($password, '', 'class="form-control"');?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($password_confirm, '', 'class="form-control"');?>
                    </div>
                </div>

                <?php if ($this->ion_auth->is_admin()): ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">
                        <?php echo lang('edit_user_groups_heading');?>
                    </label>
                    <div class="col-sm-10">
                        <?php foreach ($groups as $group):?>
                        <label class="checkbox">
                        <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>
                        <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                        </label><br>
                        <?php endforeach?>
                    </div>
                </div>
                <?php endif ?>

                <?php echo form_hidden('id', $user->id);?>
                <?php echo form_hidden($csrf); ?>

            </div>

            <div class="card-footer">
                <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-primary"');?>
                <!-- Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin. -->
            </div>

            <?php echo form_close();?>

        </div>

    </div>
    <!-- /.col-->

</div>
<!-- ./row -->
