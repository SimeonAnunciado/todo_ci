<?php 
$form_attr = array('id' => 'form_login');
echo form_open('user/login',$form_attr); ?>
	

	<div class="form-group">
	<?php echo form_label('Username');
	$data_input = array(
					'name' => 'username',
					'placeholder' => 'Please Enter Username',
					'class' => 'form-control',
					'value' => set_value('username')
				);
	echo form_input($data_input);
	 ?>
	</div>

	<div class="form-group">

	<?php
	echo form_label('Password');
	$data_input = array(
		'name' => 'password',
		'placeholder' => 'Please Enter Username',
		'class' => 'form-control',
		'value' => set_value('username')
	);
	echo form_password($data_input);
	?>
	</div>



	<?php
	$data_input = array(
		'placeholder' => 'Please Enter Username',
		'class' => 'btn btn-default',
		'value' => 'SignIn'
	);
	echo form_submit($data_input);

	?>


<?php echo form_close(); ?>


