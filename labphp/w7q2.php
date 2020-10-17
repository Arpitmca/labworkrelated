<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.btn{
			background: none;
			border:solid 3px #0e83cd ;
			color: #0e83cd ;
			cursor: pointer;
		}
    </style>
</head>
<body>
	<h1>Enter Employee Data</h1>
	<form method="post">
		<label for="">Name: </label>
		<input type="text" name="n" required>
		<label for="">Basic Pay: </label>
		<input type="number" name="bp" required="">
		<label for="">DA : </label>
		<input type="number" name="da" required="">
		<label for="">HRA : </label>
		<input type="number" name="hra" required="">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="submit" value="Save" class="btn">
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$name = "Name:".$_POST['n']."<br> 
";
$bp = "Basic Pay:".$_POST['bp']."<br>
";
$da = "DA:".$_POST['da']."<br>
";
$hra = "HRA:".$_POST['hra']."<br>
";
$file=fopen("saved.txt", "a");
fwrite($file, $name);
fwrite($file, $bp);
fwrite($file, $da);
fwrite($file, $hra);
fclose($file);
$myfile = fopen("saved.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("saved.txt"));
fclose($myfile);

}

?>
