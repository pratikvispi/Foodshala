<?php 
	require 'files/connection.php';
	session_start();

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
	<style type="text/css">
	body{
		color:white;
		font-size:15px;
		font-weight:900;
		padding-bottom:40px;
	}
		.preview-area{
			width: 180px;
			height: 150px;
			display: none;
		}
		.preview-area img{
			width: 100%;
			height: 100%;
		}
	</style>
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
	
	<div class="container">
	<h1 style="color:white;font-weight:900;text-decoration:underline;">Add Food Item: </h1>
	    <div class="content col-md-8 col-md-offset-2"><br>
	        <form action="files/add-item.php" method="post" enctype="multipart/form-data">
	        	<div class="form-group">
				    <label for="item_name">Item Name<b>*</b></label>
				    <input type="text" class="form-control" id="item_name" name="item_name" required/>
				</div>
				<br>
				<div class="form-group">
					<label for="item_name">Item Image<b>*</b></label>
					<input type="file" name="item_image" class="uploader" onchange="readURL(this);" required />
					<div class="preview-area">
						<img id="profileImg" src="" />
					</div>
				</div>
				<br>
				<div class="form-group">
				    <label for="item_desc">Item Description<b>*</b></label>
				    <input type="text" class="form-control" id="item_desc" name="item_desc" required/>
				</div>
				<br>
				<div class="form-group">
				    <label for="item_type">Item Type<b>*</b>&nbsp;</label>
				    <input type="radio" name="item_type" value="non-veg" required> Non-Veg &nbsp;
		  			<input type="radio" name="item_type" value="veg" required> Veg
				</div>
				<br>
				<div class="form-group">
				    <label for="item_price">Item Price<b>*</b></label>
				    <input type="text" class="form-control" id="item_price" name="item_price" required/>
				</div>
				<br>
				<div class="form-group">
				    <button type="submit" name="addItemBtn" class="btn btn-success" style="font-size:15px;font-weight:900;height:40px">Add Item</button>
				</div>
			</form>
	    </div>
	</div>
	</div>
	<script type="text/javascript">
		$('.uploader').on('click', function(){
			$('.preview-area').css({
				'display': 'block'
			});
		});

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profileImg')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>

</body>
</html>
<?php } ?>