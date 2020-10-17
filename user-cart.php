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

<header class="bg-image" >
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
	    	$sql = "select * from user_cart where user_id = '$user_id'";
	    	$result = $conn->query($sql);
	    ?>
<div class="container" style="padding-bottom:80px">
	    <div class="content"><br>
	    	<?php 
	    		$sum = 0;
	    		while($row = $result->fetch_assoc()){ ?>
            		    <div class="card">
						    <div class="card-body">
						    	<div class="card-text pull-right" style="margin-top: 10px;"><?php echo '₹'.$row['total_price']; ?></div>
						        <h4 class="card-title"><?php echo ucwords($row['item_name']); ?></h4>

						    </div>
						</div><hr>	
	    	<?php 
	    		$sum = $sum+$row['total_price'];
	    		$res_id = $row['res_id'];
	    	} ?>

	    	<?php 
	    		if($sum > 0){ ?>
	    			<div class="total-cart-price pull-right" style="color:white;font-weight:900">Total Price = ₹<?php echo $sum; ?></div>
	    	<?php }else{ ?>
	    		<p class="text-center">Your cart is empty...why...!!</p>;
	    	<?php } ?>
	    	<br><br>
	    		
	    	<form action="place-order.php" method="post">
	    		<input type="hidden" name="cart_price" value="<?php echo $sum; ?>">
	    		<input type="hidden" name="res_id" value="<?php echo $res_id; ?>">
	    		<button class="btn btn-success pull-right" style="font-size:15px;font-weight:900;height:50px">Place order <i class="fas fa-arrow-right"></i></button>
	    	</form>
	    	

		</div>	
			</div>
	    		    
	</div>
	<?php } ?>

</body>
</html>
