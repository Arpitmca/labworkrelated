<?php 
$conn=mysqli_connect("localhost","root","","myDB")or die(mysqli_error());
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Table MyGuests created successfully</h1>";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>