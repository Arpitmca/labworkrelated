<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Font Awesome -->

<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<u><h1 align="center">Post Method Submit Form</h1></u><br>
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
	<form action="ps.php" method="post">
		
		<input type="text" name="n" class="form-control" placeholder="Enter your name" required=""><br>
		<input type="text" name="add" required="" class="form-control" placeholder="Address"><br>
		<div class="form-row mb-4">
			<div class="col">
			<input type="text" class="form-control" placeholder="City" required="" name="city">
		</div>
		<div class="col">
			<input type="text" class="form-control" placeholder="State" required="" name="state">
		</div>
		<div class="col">
			<input type="text" class="form-control" placeholder="Pincode" required="" name="pin">
		</div>
		</div>
		<div class="form-row mb-6">
			<div class="col">
				<input type="number" pattern="[0-9]{10}" required="" name="mobile" placeholder="Your Phone no." class="form-control">
			</div>
			<div class="col">
				<input type="email" placeholder="Your Email" required="" name="email" class="form-control">
			</div>
		</div><br>
		<div class="form-row mb-12">
			<div class="col">
				<input type="text" placeholder="Your Qualification" class="form-control" name="quali" required="">
			</div>
		</div>
		<div class="form-row mb-12">
			<div class="col">
				<input type="submit" value="Submit" name="submit" class="btn btn-info my-4 btn-block">
			</div>
		</div>
	</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
</body>
</html>