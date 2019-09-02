 <div class="list-group">

 	<?php if ($msg = $this->session->flashdata('list_created')) : ?>
	<div class="alert alert-success"><?php echo $msg; ?></div>
				
 	<?php endif ?>

 	<a href="<?php echo base_url().'lists/add' ?>" class="btn btn-default"> Add Task </a>
 	<br><br>

<!-- 	<a href="<?php  echo base_url().'lists/add'; ?>" class="list-group-item active">
      <h4 class="list-group-item-heading">Create List</h4>
    </a> -->


<?php foreach($list as $l )  : ?>

    <a href="<?php echo base_url() . 'lists/show/' . $l->id; ?>" class="list-group-item ">
      <h4 class="list-group-item-heading"><?php echo $l->list_name; ?></h4>
      <p class="list-group-item-text"><?php echo $l->list_body; ?></p>
    </a>

<?php endforeach ?>
 </div>

