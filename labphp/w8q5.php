<?php 

session_start(); 

if(isset($_SESSION['views'])) 
	$_SESSION['views'] = $_SESSION['views']+1; 
else
	$_SESSION['views']=1; 
	
echo"<h1 align='center'>Views = ".$_SESSION['views']. "</h1>"; 

?> 
