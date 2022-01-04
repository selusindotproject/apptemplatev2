<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">

            <div class="card-header">
                <h3 class="card-title">[form title]</h3>
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
                        <?php echo lang('create_user_fname_label', 'first_name');?>
                    </label>
                    <div class="col-sm-10">
                        <?php echo form_input($first_name, '', 'class="form-control"');?>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
            </div>

            <?php echo form_close();?>

        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->
