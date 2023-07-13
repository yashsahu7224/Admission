<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conn = new mysqli("localhost","root","","signup");
	if($conn->connect_error){
		die("Connection Failed : ".$conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from signupform where email=?");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt_result=$stmt->get_result();
		if($stmt_result->num_rows>0){
			$data=$stmt_result->fetch_assoc();
			if($data['password']===$password){
				echo "<h2>Login Successfully</h2>";
				header("Location:option.html");
			} else{
				echo"<h2>Invalid Email or Password</h2>";
			}
		} else {
			echo"<h2>Invalid Email or Password</h2>";
		}
	}
		

 ?> 

