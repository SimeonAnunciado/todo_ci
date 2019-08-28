<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Profile</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url() ?>/user/register"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Sign In</div>
			<div class="panel-body">
				<?php $this->load->view('users/login') ?>
			</div>
		</div>
	</div>
	<div class="col-md-8">

		

		<?php $this->load->view($main_content); ?>
	</div>
</div>

<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>