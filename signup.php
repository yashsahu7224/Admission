<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
	$email = $_POST['email'];
    $contact = $_POST['contact'];
    $Address = $_POST['Address'];
	$password = $_POST['password'];
	
	// Database connection
	$conn = new mysqli("localhost","root","","signup");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signupform(firstName,lastName,email,contact,Address,password) 
        values(?,?,?,?,?,?)");
		$stmt->bind_param("sssiss",$firstName,$lastName,$email,$contact,$Address,$password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        header("Location:option.html");
		$stmt->close();
		$conn->close();
	}
?>