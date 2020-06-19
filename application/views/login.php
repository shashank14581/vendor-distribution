<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Login Page </title>
<style> 
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: white;
}
button { 
       background-color: blue;
       width: 45%;
       height: ;
        color: white; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 1px solid black; 
        width : 50%;
        height : 350px;
        width: 500px;
        margin: 0 auto;
    } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 1px solid black; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 15px; 
        background-color: white;
        width: 50%;
        margin: 0 auto;
    } 
</style> 
</head>  
<body>  
    <center> <h1> Login Form </h1> </center>
    

    <form class= "form-signin" action = " <?php echo base_url()?>registration/login" name= "frm" id="frm" method = "post">
        <div class="container">
        <?php
		          $msg = $this->session->flashdata('msg');
		            if($msg !=""){
    ?>
			              <div class = 'alert alert-danger'>
                    <?php echo $msg?>
                    </div>
         <?php
	                          	}
         ?>  

            <label for ="email" class ="sr-only">Email Address : </label> 
            <input type="text" id ="email" class = "form-control" value="<?php echo set_value('email');?>" name="email" |autofocus></br>
            <p class ="invalid-feedback"><?php echo strip_tags(form_error('email'));?></p>
            <label for ="password" class ="sr-only">Password : </label> 
            <input type="password" id="password" class ="form-control" placeholder="" name="password">
            <p class ="invalid-feedback"><?php echo strip_tags(form_error('password'));?></p>
            <button type="submit">Log in</button></br> 
            <input type="checkbox" checked="checked"> Remember me 
            <button type="button" class="cancelbtn"> Cancel</button> 
            Forgot <a href="#"> password? </a> 
        </div> 
    </form>   
</body>   
</html>

 
