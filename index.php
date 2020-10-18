
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FoodShala</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="index.css">
</head>

	<body>
	<header class="bg-image" >
	<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 16px;">
		
	    <div class="collapse navbar-collapse" id="myNavbar" style="margin-right:40px">
		<a class="navbar-brand active" href="index.php" style="font-size: 25px; margin-left:10px; font-weight:900">FoodShala</a>

	      <ul class="nav navbar-nav navbar-right" >
	      	<li><a href="restaurant-login.php" style="font-size:20px;font-weight:900;padding-top:18px">Restaurant login</a></li>
	        <li><a href="user-signup.php" style="font-size:20px;font-weight:900"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="user-login.php" style="font-size:20px;font-weight:900;"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
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


		<div class ="menu">
		<h1 >We're always in the mood for food.</h1>

		</div>

	<div class="container">

	    <?php 
	    	require 'files/connection.php';
	    	$sql = "select menu_items.*, restaurants.res_name from menu_items, restaurants where menu_items.res_id=restaurants.id";
	    	$result = $conn->query($sql);
	    ?>

	    <div class="content"><br>
	    	<?php 
	    		
	    		while($row = $result->fetch_assoc()){ ?>
	    			<div class="col-sm-3">
            		    <div class="card" style="width:24rem;">
						    <img class="card-img-top" src="<?php echo $row['item_imagepath']; ?>" alt="Card image" style="width:100%; height: 160px; margin:3px;">
						    <div class="card-body">
						        <h4 class="card-title"><?php echo ucwords($row['item_name']); ?></h4>
						        <p class="card-text pull-right"><?php echo ucfirst($row['item_type']); ?></p>
						        <p class="card-text"><?php echo ucfirst($row['item_desc']); ?></p>
						        <div class="card-text res-info">Restaurant- <?php echo ucwords($row['res_name']) ?></div>
								<br>
								<a href="javascript:void(0);" class="btn btn-sm btn-info pull-right btn-danger order" style="font-weight:900">Order</a>
						        <div class="card-text" style="margin-top: 8px;font-size:15px"><?php echo '₹'.$row['item_price']; ?></div>
						    </div>
						</div>
        			</div>
				<?php } ?>
		</div>		
	    		    
	</div>

	<script type="text/javascript">
		$('.order').on('click', function(){
			alert('You have not login yet!!!!');
		});
	</script>

<footer class="footer">
	<h4 style="font-weight : 900;">Made by Pratik Vispute</h4>
</footer>
</body>
</html>
