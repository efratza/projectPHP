<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="css.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <?php include '../views/headerlogin.php';?>
        <div class = "containerlogin">
            <div class="wrapper">
                <form action='api.php' method="post" name="Login_Form" class="form-signin">       
                    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                    <hr class="colorgraph"><br>
                    <div class="error-message"><?php if(isset($_SESSION["massege"])){ echo $_SESSION["massege"];} ?></div>
                    <input type="email" class="form-control" value="donald@gmail.com" name="email" placeholder="Username" required="" autofocus="" />
                    <input type="password" class="form-control" value="100" name="password" placeholder="Password" required=""/>     		  
                    <input class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">  			
                </form>	
            </div>
        </div>
    </body>
</html>

<!--<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
		</form>			
	</div>
</div>-->
