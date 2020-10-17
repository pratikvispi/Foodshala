<?php 
	require 'connection.php';
    session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['userSigninBtn']) && isset($_POST['email']) && isset($_POST['password'])){

	        $email = $_POST['email'];
	        $password = $_POST['password'];
	        $hashpassword = md5($password);

	        $sql="select * from customers where email='$email' and password='$hashpassword'";
			// echo $sql;
			$result=$conn->query($sql);
		
			$row = $result->fetch_assoc();
			// echo $row;
			$id = $row['id'];
			// echo $id;
			$count = mysqli_num_rows($result);
			//  echo $count;
	        if($count == 1) {
	        	$_SESSION['custid'] = $id;
		        header( "refresh:1; url=../welcome-user.php" );
		    }else {
				$error = "Check your credentials!";
				echo $error;
		    }
    	}
	}
?>