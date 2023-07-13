<?php
    $cname = $_POST['cname'];
    $fname = $_POST['fname'];
	$gender = $_POST['gender'];
    $address = $_POST['address'];
    $fnumber = $_POST['fnumber'];
	$cnumber = $_POST['cnumber'];
    $femail = $_POST['femail'];
    $cemail = $_POST['cemail'];
	$class10 = $_POST['class10'];
    $board1 = $_POST['board1'];
    $year1 = $_POST['year1'];
    $marks1 = $_POST['marks1'];
    $class12 = $_POST['class12'];
    $board2 = $_POST['board2'];
    $year2 = $_POST['year2'];
    $marks2 = $_POST['marks2'];
    $graduation = $_POST['graduation'];
    $university = $_POST['university'];
    $year3 = $_POST['year3'];
    $marks3 = $_POST['marks3'];
    $pinterest = $_POST['pinterest'];
    $campus = $_POST['campus'];
	$rollno = $_POST['rollno'];
    $percentile = $_POST['percentile'];
	$advertisement = $_POST['advertisement'];
    $other = $_POST['other'];
		// Database connection
	$conn = new mysqli("localhost","root","","enquiry");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_erromarks3);
	} else {
		$stmt = $conn->prepare("insert into enquiryform(cname,fname,gender,address,fnumber,cnumber,femail,cemail,class10,board1,year1,marks1,class12,board2,year2,marks2,graduation,university,year3,marks3,pinterest,campus,rollno,percentile,advertisement,other) 
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssiissssiissiissiissiiss",$cname,$fname,$gender,$address,$fnumber,$cnumber,$femail,$cemail,$class10,$board1,$year1,$marks1,$class12,$board2,$year2,$marks2,$graduation,$university,$year3,$marks3,$pinterest,$campus,$rollno,$percentile,$advertisement,$other);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        header("Location:confirmation.html");
		$stmt->close();
		$conn->close();
	}
?>
<!-- 
cname fname gender address fnumber cnumber femail cemail a1 a2 a3 a4 a5 a6 a7 a8 a9 a10 a11 a12 pinterest campus rollno percentile advertisement other 
ssssiissssiissiissiissiiss
-->