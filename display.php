<?php
  // CREATE CONNECTION
  $conn = new mysqli("localhost","root","","enquiry");
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  $query = "SELECT * FROM enquiryform;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "rollno: " .$row["rollno"]. " | cname: " .$row["cname"]. " | address: " . $row["address"]. " | fnumber: " . $row["fnumber"]. "<br>";
        }
    }
    else {
        echo "0 results";
    }
  
   $conn->close();
?>