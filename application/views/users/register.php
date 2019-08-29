<?php 

echo validation_errors('<div class="alert alert-danger">','</div>');

$form_attr = array('id' => 'form_login');
echo form_open('user/register',$form_attr); ?>
	

	<div class="form-group">
	<?php echo form_label('First name');
	$data_input = array(
					'name' => 'first_name',
					'placeholder' => 'Please Enter first name',
					'class' => 'form-control',
					'value' => set_value('first_name')
				);
	echo form_input($data_input);
	 ?>
	</div>

		<div class="form-group">
	<?php echo form_label('Last name');
	$data_input = array(
					'name' => 'last_name',
					'placeholder' => 'Please Enter last name',
					'class' => 'form-control',
					'value' => set_value('last_name')
				);
	echo form_input($data_input);
	 ?>
	</div>

			<div class="form-group">
	<?php echo form_label('Email');
	$data_input = array(
					'name' => 'email',
					'placeholder' => 'Please Enter Email',
					'class' => 'form-control',
					'value' => set_value('email')
				);
	echo form_input($data_input);
	 ?>
	</div>
	
	<div class="form-group">
		<?php echo form_label('Username');
		$data_input = array(
			'name' => 'username',
			'placeholder' => 'Please Enter user name',
			'class' => 'form-control'
		);
		echo form_input($data_input);
		?>
	</div>


	<div class="form-group">

	<?php
	echo form_label('Password');
	$data_input = array(
		'name' => 'password',
		'placeholder' => 'Please Enter Password',
		'class' => 'form-control',
		'value' => set_value('password')
	);
	echo form_password($data_input);
	?>
	</div>


	<div class="form-group">

		<?php
		echo form_label('Confirm Password ');
		$data_input = array(
			'name' => 'password2',
			'placeholder' => 'Please Enter Password',
			'class' => 'form-control',
			'value' => set_value('password2')
		);
		echo form_password($data_input);
		?>
	</div>





	<?php
	$data_input = array(
		'class' => 'btn btn-default',
		'value' => 'Register'
	);
	echo form_submit($data_input);

	?>


<?php echo form_close(); ?>


