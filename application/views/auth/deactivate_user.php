<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">

            <div class="card-header">
                <h3 class="card-title"><?php echo lang('deactivate_heading');?></h3>
            </div>
            <!-- /.card-header -->

            <?php echo form_open("auth/deactivate/".$user->id);?>

            <div class="card-body">

                <p>
                	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                    <input type="radio" name="confirm" value="yes" checked="checked" />
                    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                    <input type="radio" name="confirm" value="no" />
                </p>

                <?php echo form_hidden($csrf); ?>
                <?php echo form_hidden(['id' => $user->id]); ?>

            </div>

            <div class="card-footer">
                <?php echo form_submit('submit', lang('deactivate_submit_btn'), 'class="btn btn-primary"');?>
            </div>

            <?php echo form_close();?>

        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->
