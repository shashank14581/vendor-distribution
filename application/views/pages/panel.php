<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">Customer's feed</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Search for services</a>
    </li>

  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</ul>
<ul class="navbar-nav ml-auto">
        <li><a href="<?php echo base_url();?>registration/logout "><span class="glyphicon glyphicon-user"></span> Log out</a></li>
</ul>
</nav>
<div class = "row">
  <div class="col-sm-3">
      <div class="card">
              <img class="card-img-top" src="<?php echo base_url()  ;?>assets/img/b.png" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title"><?php echo $user['first_name'].' '.$user['last_name'];?></h5>
               </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Home</li>
                  <li class="list-group-item">Mesages</li>
                  <li class="list-group-item">Profile</li>
               </ul>
           <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
           </div>

        </div>
  </div>
  <div class="col-sm-5">
    <div class="card" style ="height: 100rem";><div class="card-header">Header</div>
        <div class="card-body"> 
            <h3 class ="card-text"></h3>
            <h3 class="card-text">HOME</h3><hr>
            <?php echo validation_errors();?>
            <!-- <form action = " <?php echo base_url()?>registration/status" name= "registrationForm1" id="registrationForm1" method = "POST"> -->
            <form action = " <?php echo base_url()?>pages/test.php" name= "registrationForm1" id="registrationForm1" method = "POST">
            
              <label class ="" for="post">Post Something</label></br>
              <input style =" width:100%" class="form-control" rows="3" id="post" placeholder="Your message..."></input>
			        <p class ="invalid-feedback"><?php echo form_error('posts');?></p></br>
              <button type="submit" class="btn btn-primary btn-block">Post</button>
            </form>
            <?php 
		          echo form_close(); 
		        ?>
            <hr>
            <div class="overflow-auto">
            <h5 class="card-title"></h5>
            </div>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
  </div>
  <div class= "col-md-3">
  <div class="card text-white bg-info mb-3" style="height: 35rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Services in your area</h5><hr>
    <p class="card-text">These are some of the services in your area. </p>
    <div class="overflow-auto">...</div>
  </div>
</div>
  </div>
  
</div>
  
</body>
</html>


