<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 echo "<h1>";
 echo "Name: ".$_REQUEST['n']."<br>";
 echo "Address: ".$_REQUEST['add']."<br>";
 echo "City: ".$_REQUEST['city']."<br>";
 echo "State: ".$_REQUEST['state']."<br>";
 echo "Pincode: ".$_REQUEST['pin']."<br>";
 echo "Mobile: ".$_REQUEST['mobile']."<br>";
 echo "Email: ".$_REQUEST['email']."<br>";
 echo "Qualificatiobn: ".$_REQUEST['quali']."<br>";
 echo "</h1>";

}
?>
