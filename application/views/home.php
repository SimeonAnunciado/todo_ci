<?php if ($this->session->flashdata('response')) : ?>

	<div class="alert alert-success"><?php echo $this->session->flashdata('response');  ?></div>

<?php endif ?>

<?php if ($this->session->flashdata('noaccess')) : ?>

	<div class="alert alert-danger"><?php echo $this->session->flashdata('noaccess');  ?></div>

<?php endif ?>


<h1>Welcome to Code Igniter</h1>
<p>recusandae saepe ratione ullam nostrum illo voluptate.</p>