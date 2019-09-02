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
        <?php if ($this->session->userdata('logged_in')) :  ?>
        <li class=""><a href="<?php echo base_url() ?>lists">My List</a></li>
        <?php endif ?>

      </ul>
      <?php if ($this->session->userdata('logged_in')) : ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url() ?>/user/register"><span class="glyphicon glyphicon-user"></span> Welcome , <?php echo $this->session->userdata('username'); ?></a></li>
           <li><a href="<?php echo base_url() ?>/user/logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
        </ul>
      <?php else : ?>
      	<ul class="nav navbar-nav navbar-right">
      		<li><a href="<?php echo base_url() ?>user/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      	</ul>
      <?php endif ?>
    </div>
  </div>
</nav>
<?php if(!$this->session->userdata('logged_in')) :?> 
<div class="container">
    <div class="row" style="margin-top: 70px;">
      <div class="col-md-2"></div>
    	<div class="col-md-8">
    		<div class="panel panel-default">
    			<div class="panel-heading">Sign In</div>
    			<div class="panel-body">
    				<?php $this->load->view($main_content) ?>
    			</div>
    		</div>
      </div>
      <div class="col-md-2"></div>

  	</div>
</div>
 <?php else :?> 
<div class="container">

  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8">
        <?php $this->load->view($main_content); ?>
      </div>
    <div class="col-md-2"></div>
  </div>
</div>

<?php endif ?>



<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>