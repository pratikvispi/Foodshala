<?php 
	require 'connection.php';
    session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['resSigninBtn']) && isset($_POST['res_email']) && isset($_POST['res_password'])){

	        $res_email = $_POST['res_email'];
	        $res_password = $_POST['res_password'];
	        $reshashpassword = md5($res_password);

	        $sql="select * from restaurants where res_email='$res_email' and res_password='$reshashpassword'";
	        $result=$conn->query($sql);
	        $row = $result->fetch_assoc();
			$id = $row['id'];
	        $count = mysqli_num_rows($result);
	        if($count == 1) {
	        	$_SESSION['restid'] = $id;
		        header( "refresh:1; url=../welcome-restaurant.php" );
		    }else {
				$error = "Invalid credentials";
				echo $error;
		    }
    	}
	}
?>