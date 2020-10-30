<!DOCTYPE html>
<html>
<head>
	<title>Login to your Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="device-width , initial-scale=1">
	<link href="https://fonts.googlepis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>

  <div  class="sigin-form">
  	    <form action="null"  method="post">
  	    	<div class="form-header">
  	    		<h2> Sign in</h2>
  	    		<p>Login to MyChat</p>
  	    		
  	    	</div>
  	    	<div class="form-group">
  	    		<label>Email</label>
  	    		<input type="email" class="form-control" name="email" placeholder="someone@site.com"
  	    		autocomplete="off" required="">
  	    	</div>

  	    	<div class="form-group">
  	    		<label>Password</label>
  	    		<input type="password" class="form-control" name="pass" placeholder="password"
  	    		autocomplete="off" required="">
  	    	</div>
  	    	<div class="small">Forgot password ? <a href="forgot_pass.php">click here </a> </div><br>
  	    	
  	    	<div class="form-group">
  	    		<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
  	    	</div>
  	    	<!--<<?php include("signin_user.php"); ?> -->

  	    </form>
  	    <div class="text-center small " style="color: #67428B;"> Dont have an Account ? <a href="
  	    	signup.php">create one </a></div>
  	
  </div>
</body>
</html>