<?php 
 $u = $f = $l = $p = $c = $g = $e = "";
   $eu = $ef = $el = $ep = $eg = $ec = $ee = "";
extract($_POST);
if(isset($save))
{
  
   if(empty($user))
   {
      $eu = "Username Is Required";
   }
   else{
   	$u = $user;
   }

   if (empty($fname)) {
   	$ef= "First Name is Required";
   	
   }
   elseif (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
   	$ef = "Only letters & white Space Allowed";
   }
   else{
   	$f = $fname;
   }
    if (empty($lname)) {
   	$el= "Last Name is Required";
   	
   }
   elseif (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
   	$el = "Only letters & white Space Allowed";
   }
   else{
   	$l = $lname;
   }
   if (empty($gen)) {
   	$eg = "Please Select Gender";
   }
   else{
   	$g = $gen;
   }
   if (empty($pass)) {
   	$ep = "Password Is Required";
   }
   
   if (empty($cpass)) {
   	$ec = "Confirm Password Is Required";
   }
   elseif ($pass!==$cpass)
   {
   	$ec="Password Not Match";
   }
   else{
      $c = $cpass;
   }
if (empty($email)) {
	$ee = "Email is required";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$ee = "Invalid Email Format";
}
else{
	$e = $email;
}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		.fix {
		width: 400px;
		margin-left: 100px;
		}
		.row {
  display: flex;
}

.column {
  flex: 50%;
  padding: auto;

}

		.btn{
			background: none;
			border:solid 3px #0e83cd ;
			color: #0e83cd ;
			cursor: pointer;
		}
		.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<br>
		<div class="row">
			<div class="col">
				<div class="fix">
			<img src="logo_php.png" alt="" height="40px" width="50px">
			<a href="w6q2.php"><h2 style="display: inline;">PHP Registration</h2></a>
		</div><br>
		<div style="border: 2px solid grey;padding:10px" class="fix">
			<form method="POST">
			<h1>Create Account</h1>
			<label for="">Username:</label><br>
			<input type="text" name="user" value="">
			<span class="error">* <?php echo $eu;?></span><br><br>
			<label for="">First Name</label><br>
			<input type="text" name="fname" value=""><span class="error">* <?php echo $ef;?></span><br><br>
			<label for="">Last Name</label><br>
			<input type="text" name="lname" value=""><span class="error">* <?php echo $el;?></span><br><br>
			<label for="">Select Gender</label>
			<select name="gen" id="">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select><span class="error">* <?php echo $eg;?></span><br><br>
			<label for="">Email:</label><br>
			<input type="text" name="email" value=""><span class="error">* <?php echo $ee;?></span><br><br>
			<label for="">Password</label><br>
			<input type="Password" name="pass" value=""><span class="error">* <?php echo $ep;?></span><br>
			<label for="">Confirm Password</label><br>
			<input type="Password" name="cpass" value=""><span class="error">* <?php echo $ec;?></span>
			<br><br>

		<input type="submit" value="Submit" class="btn" name="save"/>
<input type="reset" value="Reset" class="btn"/>
	</form>
		</div>
		
	</div>
	<div class="col">
		<div class="fix">
		<h1>Here is your submitted data</h1>
		<h3>Username : <?php echo $u; ?> </h3>
		<h3>Name : <?php echo $f;echo " "; echo $l; ?> </h3>
		<h3>Gender : <?php echo $g ?> </h3>
		<h3>Email : <?php echo $e; ?> </h3>
		<h3>Password : <?php echo $c ?> </h3>
	</div>
	</div>
</body>
</html>