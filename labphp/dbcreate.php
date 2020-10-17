<?php 
$conn=mysqli_connect("localhost","root","")or die(mysqli_error());
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "<h1>Database created successfully</h1>";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

?>