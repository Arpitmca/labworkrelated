<?php 
require('dbconfig.php');
$err="";
extract($_POST);
if(isset($submit))
{
    $query="INSERT INTO `mark_list`(`e_no`, `name`, `english`, `science`, `math`, `hindi`) VALUES ('$en','$name','$eng','$sci','$mat', '$hin')";
mysqli_query($conn,$query) or die(mysqli_error($conn));
$err="Insert Successfully";
}
 ?>
 <html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<u><h1 align="center">Insert, Delete, Select Data From Database</h1><br></u>
		<div class="row">
			<div class="col-md-4">
				<span style="color: green"><?php echo $err; ?></span>
				<form method="post">
					<input type="text" placeholder="Enter your Enrollment No." class="form-control" name="en" required=""><br>
					<input type="text" placeholder="Enter your Name" class="form-control" name="name" required=""><br>
					<div class="form-row mb4">
						<div class="col">
							<input type="number" placeholder="English Marks" name="eng" class="form-control" required=""><br>
							<input type="number" placeholder="Science Marks" name="sci" class="form-control" required=""><br>
							<input type="number" placeholder="Maths Marks" name="mat" class="form-control" required=""><br>
							<input type="number" placeholder="Hindi Marks" name="hin" class="form-control" required="">
						</div>
					</div>
					<input type="submit" value="Submit" name="submit" class="btn btn-info my-4 btn-block">
				</form>
			</div>
			<div class="col-md-8">
				<h2>Details of Student Mark List with their Percentage</h2>
				<table class="table">
					<tr>
						<th>Enroll.No.</th>
						<th>Name</th>
						<th>English Marks</th>
						<th>Science Marks</th>
						<th>Maths Marks</th>
						<th>Hindi Marks</th>
						<th>Percentage</th>
						<th>Delete</th>
					</tr>
					
					<?php 
                  $query="select * from mark_list";
                  $result=mysqli_query($conn,$query) or die("Error fetching data.".mysqli_error($conn));                  
                  while($detail=mysqli_fetch_assoc($result))
                  {
                  	echo "<tr>";
                     echo "<td>".$detail['e_no']."</td>";
                     echo "<td>".$detail['name']."</td>";
                     echo "<td>".$detail['english']."</td>";
                     echo "<td>".$detail['science']."</td>";
                     echo "<td>".$detail['math']."</td>";
                     echo "<td>".$detail['hindi']."</td>";
                     $per = ($detail['english']+$detail['science']+$detail['math']+$detail['hindi'])/4;
                     echo "<td>".$per."%</td>";
                     echo "<td>";
                     ?>
                     <a href="delete.php?e_no=<?php echo $detail['e_no'];?>"><img src="delete.svg" height="8%" width="8%" alt=""></a></td>

                     </td></tr>
                     <?php

                  }
                ?> 
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>