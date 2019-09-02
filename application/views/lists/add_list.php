<?php 

echo validation_errors('<div class="alert alert-danger">','</div>');

$form_attr = array('id' => 'form_login');
echo form_open('lists/add',$form_attr); ?>
	

	<div class="form-group">
	<?php echo form_label('List name');
	$data_input = array(
					'name' => 'list_name',
					'placeholder' => 'Please Enter List name',
					'class' => 'form-control',
					'value' => set_value('first_name')
				);
	echo form_input($data_input);
	 ?>
	</div>

		<div class="form-group">
	<?php echo form_label('List Body');
	$data_input = array(
					'name' => 'list_body',
					'placeholder' => 'Please Enter list body',
					'class' => 'form-control',
					'value' => set_value('last_name')
				);
	echo form_input($data_input);
	 ?>
	</div>



	<?php
	$data_input = array(
		'class' => 'btn btn-default',
		'value' => 'Create Task !'
	);
	echo form_submit($data_input);

	?>


<?php echo form_close(); ?>


