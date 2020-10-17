<!DOCTYPE html>
<html lang="en">
<head>
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forms.css">
</head>
<body>

	
<header class="bg-image">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
		
	    <div class="collapse navbar-collapse" id="myNavbar" style="margin-right:40px">
		<a class="navbar-brand active" href="index.php" style="font-size: 18px; margin-left:10px">FoodShala</a>

	      <ul class="nav navbar-nav navbar-right" >
	      	<li><a href="restaurant-signup.php">Restaurant login</a></li>
	        <li><a href="user-signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="user-login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<br>
	<br><br>


	
	
		<div class="container col-md-6 col-md-offset-3">
			<form action="files/authenticate.php" method="post">	
			<div class="form-group">
				<label for="email">Email<b>*</b></label>
				<input type="email" class="form-control" id="email" name="email" required/>
			</div>
			<div class="form-group">
				<label for="password">Password<b>*</b></label>
				<input type="password" class="form-control" id="password" name="password" required/>
			</div> <br>
			<button type="submit" name="userSigninBtn" class="btn btn-success">Log in</button>
			<br><br><span>Don't have account? <a class="text-danger" href="user-signup.php" style="color:blue;font-weight:bold;">Sign up</a></span>
			</form>
		</div>	
	
</body>
</html>