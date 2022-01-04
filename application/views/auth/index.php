<div class="row">
  <div class="col-12">
	<div class="card card-outline card-info">
	  <div class="card-header">
		<h3 class="card-title"><?php echo lang('index_heading');?></h3>

		<!-- <div class="card-tools">
		  <div class="input-group input-group-sm" style="width: 150px;">
			<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

			<div class="input-group-append">
			  <button type="submit" class="btn btn-default">
				<i class="fas fa-search"></i>
			  </button>
			</div>
		  </div>
		</div> -->
	  </div>
	  <!-- /.card-header -->
	  <div class="card-body table-responsive p-0" style="height: 300px;">

		<table class="table table-head-fixed text-nowrap">
		  	<tr>
		  		<th><?php echo lang('index_fname_th');?></th>
		  		<th><?php echo lang('index_lname_th');?></th>
		  		<th><?php echo lang('index_email_th');?></th>
		  		<th><?php echo lang('index_groups_th');?></th>
		  		<th><?php echo lang('index_status_th');?></th>
		  		<th><?php echo lang('index_action_th');?></th>
		  	</tr>
		  	<?php foreach ($users as $user):?>
		  		<tr>
		              <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
		              <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
		              <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
		  			<td>
		  				<?php foreach ($user->groups as $group):?>
		  					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
		                  <?php endforeach?>
		  			</td>
		  			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
		  			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		  		</tr>
		  	<?php endforeach;?>
		</table>
	  </div>
	  <!-- /.card-body -->
	</div>
	<!-- /.card -->
  </div>
</div>
<!-- /.row -->

<!-- <h1><?php echo lang('index_heading');?></h1> -->
<!-- <p><?php echo lang('index_subheading');?></p> -->

<!-- <div id="infoMessage"><?php echo $message;?></div> -->
<?php if ($message != '') { ?>
	<script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/adminlte/plugins/toastr/toastr.min.js"></script>
	<script type="text/javascript">toastr.info("<?php echo $message ?>");</script>
<?php } ?>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
