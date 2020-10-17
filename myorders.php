<?php 
	require 'files/connection.php';
	session_start();
	error_reporting(E_ERROR | E_PARSE);

	if(strlen($_SESSION['custid'])==0)
	{
	header('location:user-login.php');
	}
	else {
?>
<!DOCTYPE html> 
<html>
<head>
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	
</head>
<body>

	<header class="bg-image">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
	  <div class="container">
	    <a class="navbar-brand active" href="welcome-user.php" style="font-size: 18px;">FoodShala</a>
        <a href="user-cart.php" class="navbar-brand active" >Basket</a>
        <a href="myorders.php"  class="navbar-brand active">My Orders</a>

        <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<form method="get" action="files/logout.php"> 
		        <li><button name="logout" type="submit" class="btn btn-danger" style="margin-top: 8px;">Logout</button><li>
		    </form>
	      </ul>
	    </div>
	  </div>
	</nav>
	<br><br><br>
	<div class="container">
			<h1  style="font-weight:900;font-size:50px;color:white;text-decoration: underline;">
			Food-Shala
		</h1>
		</div>

	</header>


	    <?php 
	    	require 'files/connection.php';
	    	$user_id = $_SESSION['custid'];
	    	$sql = "select * from orders where user_id = '$user_id'";
	    	$result = $conn->query($sql);
	    ?>
<div class="container">
	    <div class="content"><br>
	    	<h2 style="color:white;font-weight:900;padding-bottom:25px">All Orders:-</h4>
	    	<?php 
	    		while($row = $result->fetch_assoc()){ ?>
            		    <div class="card" style="padding:10px;margin:25px">
						    <div class="card-body">
						    	<div class="card-text pull-right" style="margin-top: 10px;padding-right:50px">Address - <?php echo ucwords($row['address']); ?></div>
						    	<div class="card-text">Status - <?php echo $row['status']; ?></div>
						        <div class="card-text">Price - <?php echo $row['total']; ?></div>
						        <div class="card-text">Mobile - <?php echo $row['mobile']; ?></div>
						        
						        <div class="card-text pull-right" style="margin-top:-5px;padding-right:50px">Date - <?php echo $row['date']; ?></div>
						    </div>
						</div><hr>	
	    	<?php } ?>
		</div>	
	    <?php } ?>		    
	</div>
	</div>
</body>
</html>
