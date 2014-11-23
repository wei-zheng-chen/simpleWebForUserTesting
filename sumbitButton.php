<?php

// Create connection
$con=mysqli_connect("localhost","root","bitnami","user_testing");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql = "INSERT INTO suggestions (suggestion) 
		VALUES (".$_GET['suggestion'].")";


if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

mysqli_close($con);

?>