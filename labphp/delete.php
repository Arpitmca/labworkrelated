<?php
session_start();
include 'dbconfig.php';
$id=$_REQUEST['e_no'];
$q="DELETE FROM `mark_list` where `e_no`='$id'";
$conn->query($q) or die(mysqli_error($conn));
header("location:http://localhost/labphp/w9q2.php");

?>
