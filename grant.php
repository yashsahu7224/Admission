<?php
// Create connection
$conn = new mysqli("localhost","root","","enquiry");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT cname , cemail, marks2 FROM enquiryform WHERE marks2>=90";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "cname: " . $row["cname"] . ", cemail: " . $row["cemail"] . "<br>";
    }
} else {
    echo "No results found.";
}
$conn->close();