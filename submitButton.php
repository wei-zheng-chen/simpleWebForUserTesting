<?php
if(isset($_POST['BtnSubmit']))
// Create connection
$con=mysqli_connect("localhost","root","bitnami","user_testing");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo $_POST['suggestionBox'];

$sql = "INSERT INTO suggestions (suggestion) 
		VALUES ('".nl2br($_POST['suggestionBox'])."')";


if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

mysqli_close($con);
{
?>