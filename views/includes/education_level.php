
<?php $this->load->view('settings/modals/education_level_type_modal') ?>
				<?php if (has_permission('hr', '', 'create')){ ?><a href="#" class="btn btn-info pull-left" data-toggle="modal" data-target="#add_education_level_type"><?php echo _l('add_education_level_type'); ?></a>
<?php } ?>
				<div class="clearfix"></div>
				<hr class="hr-panel-heading" />
				<div class="clearfix"></div>
       			 <?php render_datatable(array(
			    _l('option'),
			    _l('control'),
			    ),'education_level'); ?>
        	

				<div class="clearfix"></div>
				<hr class="hr-panel-heading" />
				<div class="clearfix"></div>

<div class="row">
	<div class="col-md-4">
		<a href="?group=education_level" class="btn btn-info pull-left"><?php echo _l('ducation_level_type'); ?></a>
	</div>
	<div class="col-md-4">
		<a href="?group=education" class="btn btn-success pull-left"><?php echo _l('education_type'); ?></a>
	</div>
	<div class="col-md-4">
		<a href="?group=skill" class="btn btn-info pull-left"><?php echo _l('skill type'); ?></a>
	</div>
</div>