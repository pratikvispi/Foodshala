<?php 
	require 'files/connection.php';
	session_start();


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


								<form class="cart-form" action="files/add-cart.php" method="post">
						        	<input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
						        	<input type="hidden" name="res_id" value="<?php echo $row['res_id']; ?>">
						        	<input type="hidden" name="item_name" value="<?php echo $row['item_name']; ?>">
						        	<input type="hidden" name="item_price" value="<?php echo $row['item_price']; ?>">
						        	<input type="text" id="item_quantity" name="item_quantity" value="1" required style="padding-top:5px;padding-left:8px;"/>
						        	<span class="pull-right"> - </span>
						        	<button name="addCartBtn" id="addCartBtnid" class="btn btn-sm btn-danger pull-right" style="width:70px;height:30px;">Add</button>
						        </form>	


								<div class="card-text" style="margin-top: 8px;font-size:15px"><?php echo '₹'.$row['item_price']; ?></div>
						    </div>
						</div>
        			</div>
				<?php } ?>
		</div>			
		<?php } ?>
	</div>

	<script type="text/javascript">
		$('#addCartBtnid').on('click', function(){
			alert("Your item added successfully!!");
		});	
	</script>

<footer class="footer">
	<h4 style="font-weight : 900;">Made by Pratik Vispute</h4>
</footer>

</body>
</html>






