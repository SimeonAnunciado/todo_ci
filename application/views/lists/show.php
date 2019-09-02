
<a href="<?php echo base_url()?>lists/add/" class="btn btn-default"> Add Task </a>
<br><br>
<div class="panel panel-default">
  <div class="panel-heading"><?php echo $list->list_name; ?></div>
  <div class="panel-body"><?php echo $list->list_body; ?></div>
   <div class="panel-footer">
   	<a href="<?php echo base_url() . 'lists/edit_list/'. $list->id ?>" class="btn btn-success">Edit</a>
   	<a onclick="return confirm('You want to delete ? ') " href="<?php echo base_url() . 'lists/delete/'. $list->id  ?>" class="btn btn-danger">Delete</a>
   	<p class="pull-right"><?php echo date('n-j-Y', strtotime($list->create_date));  ?></p>
   </div>
</div>