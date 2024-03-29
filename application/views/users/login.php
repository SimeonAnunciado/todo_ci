<?php if ($this->session->userdata('logged_in')) : ?>
	<?php if ($msg = $this->session->flashdata('response')) : ?>
	<div class="alert alert-success"><?php echo $msg; ?></div>
	
	<table class="table table-bordred">
		<thead>
			<tr>
				<th>Task Name</th>
				<th>Task Body</th>
				<th>Task Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($my_list as $list ) : ?>

			 <tr>
				<td><?php echo $list->list_name ?></td>
				<td><?php echo $list->list_body ?></td>
				<td><?php echo $list->create_date ?></td>
				<td><a href="#" class="btn btn-success">View</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
			</tr> 

			<?php endforeach ?>
		
		</tbody>
		
	</table>


	<?php endif ?>

	<?php else: ?>

	<?php 

	echo validation_errors('<div class="alert alert-danger">','</div>');

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



<?php endif ?>





