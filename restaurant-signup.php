<!DOCTYPE html>
<html>
<head>
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="signup.css">
</head>
<body>

	


	<header class="bg-image">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
		
	    <div class="collapse navbar-collapse" id="myNavbar" style="margin-right:40px">
		<a class="navbar-brand active" href="index.php" style="font-size: 18px; margin-left:10px; font-weight:900">FoodShala</a>

	      <ul class="nav navbar-nav navbar-right" >
		  <li style="font-weight:900"><a href="restaurant-signup.php">Restaurant-SignUp</a></li>
	        <li style="font-weight:900"><a href="restaurant-login.php"><span class="glyphicon glyphicon-log-in"></span> Log in(Restaurant)</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<br>
	<br><br>
</header>
	







	
	<div class="container col-md-6 col-md-offset-3">
		<form action="files/res-save.php" method="post">
		  <div class="form-group">
		    <label for="res_name">Restaurant Name<b>*</b></label>
		    <input type="text" class="form-control" id="res_name" name="res_name" required />
		  </div>	
		  <div class="form-group">
		    <label for="res_email">Restaurant Email<b>*</b></label>
		    <input type="email" class="form-control" id="res_email" name="res_email" required/>
		  </div>
		  <div class="form-group">
		    <label for="res_number">Restaurant Number<b>*</b></label>
		    <input type="text" class="form-control" id="res_number" name="res_number" required />
		  </div>
		  <div class="form-group">
		    <label for="res_city">Restaurant City<b>*</b></label>
		    <input type="text" class="form-control" id="res_city" name="res_city" required />
		  </div>
		  <div class="form-group">
		    <label for="password">Password<b>*</b></label>
		    <input type="password" class="form-control" id="res_password" name="res_password" required/>
		  </div>
		  <button type="submit" name="resSignupBtn" class="btn btn-success">Sign up</button>
		   <span>Already have an account? <a class="text-danger" href="restaurant-login.php">Log in</a></span>
		</form>
	</div>	


</body>
</html>