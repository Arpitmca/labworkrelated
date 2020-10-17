<?php  
if(isset($_POST['submit'])){
echo "<h1>";
 echo "Name: ".$_POST['n']."<br>";
 echo "Address: ".$_POST['add']."<br>";
 echo "City: ".$_POST['city']."<br>";
 echo "State: ".$_POST['state']."<br>";
 echo "Pincode: ".$_POST['pin']."<br>";
 echo "Mobile: ".$_POST['mobile']."<br>";
 echo "Email: ".$_POST['email']."<br>";
 echo "Qualificatiobn: ".$_POST['quali']."<br>";
 echo "</h1>";

}
?>
