<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
form { 
        border: 1px solid black; 
        width : 50%;
        margin: 0 auto;
		padding: 20px;
    } 
</style>
</head>
<body>
<center>
<h1>Sign Up form!</h1>
<div class="container">
  <?php
		$msg = $this->session->flashdata('msg');
		if($msg !=""){
			echo " <div class = 'alert alert-success'>.$msg.</div>";
		}
  ?>
  <div class="col-md-2"></div>
     <div class="col-md-8" style="margin-top:20px">
		<form action = " <?php echo base_url()?>registration/index" name= "registrationForm" id="registrationForm" method = "post">
		<div class="form-group">
			<label for="first_name">First Name:</label></br>
			<input type="text" id="first_name" name="first_name" value="" />
			<p class ="invalid-feedback"><?php echo strip_tags(form_error('first_name'));?></p>
		</div>
		<div class="form-group">
			<label for="last_name">Last Name:</label></br>
			<input type="text" id="last_name" name="last_name" value="" />
			<p class ="invalid-feedback"><?php echo form_error('last_name');?></p>
		</div>
		<div class="form-group">
			<label for="email">Email:</label></br>
			<input type="text" id="email" name="email" value="" />
			<p class ="invalid-feedback"><?php echo form_error('email');?></p>
		</div>
		<div class="form-group">
			<label for="password">Password:</label></br>
			<input type="password" id="password" name="password" />
			<p class ="invalid-feedback"><?php echo form_error('password');?></p>
		</div>
		<div class="form-group">
			<label for="phone">Contact Number:</label></br>
			<input type="text" id="phone" name="phone" value="" />
			<p class ="invalid-feedback"><?php echo form_error('phone');?></p>
		</div>
		<button type="submit" class="btn btn-primary">Sign Up</button></br>
		<?php 
		echo form_close(); 
		?>
		</div>
		</form>
	 <div class="col-md-2"></div></center>
	</body>
</html>