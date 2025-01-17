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
</header>
	
	<div class="container col-md-6 col-md-offset-3">
		<form action="files/save.php" method="post">
		  <div class="form-group">
		    <label for="first_name">First Name<b>*</b></label>
		    <input type="text" class="form-control" id="first_name" name="first_name" required />
		  </div>
		  <div class="form-group">
		    <label for="last_name">Last Name<b>*</b></label>
		    <input type="text" class="form-control" id="last_name" name="last_name" required />
		  </div>	
		  <div class="form-group">
		    <label for="email">Email<b>*</b></label>
		    <input type="email" class="form-control" id="email" name="email" required/>
		  </div>
		  <div class="form-group">
		    <label for="preference">Your Preference<b>*</b>&nbsp;</label>
		    <input type="radio" name="preference" value="non-veg" required> Non-Veg &nbsp;
  			<input type="radio" name="preference" value="veg" required> Veg
		  </div>
		  <div class="form-group">
		    <label for="contact_number">Contact Number<b>*</b></label>
		    <input type="text" class="form-control" id="contact_number" name="contact_number" required />
		  </div>
		  <div class="form-group">
		    <label for="password">Password<b>*</b></label>
		    <input type="password" class="form-control" id="password" name="password" required/>
		  </div> <br>
		  <button type="submit" name="userSignupBtn" class=" btn btn-success">Sign up</button>
		   <br> <br><span>Already have an account? <a class="text-danger" href="user-login.php"  style="color:blue;font-weight:bold;">Login</a></span>
		</form>
	</div>	


</body>
</html>