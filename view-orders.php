<?php 
	require 'files/connection.php';
	session_start();
	error_reporting(E_ERROR | E_PARSE);

	if(strlen($_SESSION['restid'])==0)
	{
	header('location:restaurant-login.php');
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
	<link rel="stylesheet" type="text/css" href="index.css">
	
</head>
<body>

<header class="bg-image">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
	  <div class="container">
	    <a class="navbar-brand active" href="welcome-restaurant.php" style="font-size: 18px;">FoodShala</a>
        <a href="welcome-restaurant.php" class="navbar-brand active" >Add Food Item</a>
        <a href="view-orders.php"  class="navbar-brand active">All Orders</a>

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
	    	$restid = $_SESSION['restid'];
	    	$sql = "select * from orders where res_id = '$restid'";
	    	$result = $conn->query($sql);
	    ?>


<div class="container">
<h1 style="color:white;font-weight:900;text-decoration:underline;"> Orders Received: </h1>
	    <div class="content"><br>
	        <?php 
	        	while ($row = $result->fetch_assoc()) { ?>
	        		<div class="card"  style="padding:30px;margin:25px">
						    <div class="card-body">
						    	<div class="card-text pull-right" style="margin-top: 5px;padding-right:50px">Address - <?php echo ucwords($row['address']); ?></div>
						        <div class="card-text">Price - <?php echo $row['total']; ?></div>
						        <div class="card-text">Mobile - <?php echo $row['mobile']; ?></div>
						        <div class="card-text pull-right" style="margin-top:-5px;padding-right:50px">Date - <?php echo $row['date']; ?></div>
						    </div>
						</div><hr>
	        <?php } ?>
	    </div>
	</div>
	</div>
</body>
</html>
<?php } ?>