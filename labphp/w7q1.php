<?php 
$i=$lh=$bht=$btt=$gt=$amount=$err="";
extract($_POST);
if(isset($save))
{
	$i=$ppr-$pr;
	if($i<0)
	{
		$err="*Present Reading should be greater than previous reading.";
		$lh=0;
		$i=0;
	}
	elseif ($i<100) {
		$lh=$i;
	}
	else{
		$lh=100;
	}
    
    if ($i<=100) {
    	$bht=0;
    }
	elseif($i>100 && $i<=200)
	{
		$bht=$i-100;
	}
	else{
		$bht=100;
	}
	 if ($i<=200) {
    	$btt=0;
    }
	elseif($i>200 && $i<=300)
	{
		$btt=$i-200;
	}
	else{
		$btt=100;
	}
	if ($i<=300) {
    	$gt=0;
    }
	else{
		$gt=$i-300;
	}


}
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php if (empty($i)) {
		echo "Electricity Bill";
	}
	else{
		echo "Total Unit : ";
		echo $i;
		echo " Bill";
	} ?> </title>
</head>
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
		border-radius: 5px;
        
		}
		.btn{
			background: none;
			border:solid 3px #0e83cd ;
			color: #0e83cd ;
			cursor: pointer;
			
			
		}

		input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
		
		body{
			background: #eceffc;
		}
		td{
			text-align: center;
		}

</style>
<body>
	<h1 style="background-color: lightgrey;text-align: center;"><img src="logo.png" alt=""></h1>
	<div class="row">
		<div class="column">
			<div class="fix">
				<form method="post">
				<label for="">Enter Your Previous Reading</label>
				<input type="number" autocomplete="off" name="pr" oninput="this.value=(parseInt(this.value)||0)" required />
				<label for="">Enter Your Present Reading</label>
				<input type="number" autocomplete="off" name="ppr" oninput="this.value=(parseInt(this.value)||0)"required />
				<br><br>
				<input type="submit" name="save" value="CALCULATE" class="btn" />
			</form>
			<span style="color: red;"><?php echo $err; ?> </span>
			</div>
		</div>
		<div class="column">
			<div class="fix">
				<h2>Your Electricity Bill For <?php echo $i; ?> Unit :</h2>
				<table border="2px" width="100%">
					<tr>
						<th>Unit</th>
						<th>Rate/-</th>
						<th>Amount</th>
					</tr>
					<tr>
						<td><?php echo $lh; ?></td>
						<td>&#x20B9;3</td>
						<td>&#x20B9;<?php echo $lh*3; ?></td>
					</tr>
					<tr>
						<td><?php echo $bht; ?></td>
						<td>&#x20B9;4</td>
						<td>&#x20B9;<?php echo $bht*4; ?></td>
					</tr>
					<tr>
						<td><?php echo $btt; ?></td>
						<td>&#x20B9;5</td>
						<td>&#x20B9;<?php echo $btt*5; ?></td>
					</tr>
					<tr>
						<td><?php echo $gt; ?></td>
						<td>&#x20B9;6</td>
						<td>&#x20B9;<?php echo $gt*6; ?></td>
					</tr>
					<tr>
						<td colspan="2">Total Amount</td>
						<td>&#x20B9;<?php $amount =$lh*3+$bht*4+$btt*5+$gt*6;
						echo $amount; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	
		<br><br><h1 align="center">Total Amount To Be Paid is: &#x20B9;<?php echo $amount; ?> <br><span style="color: blue"> HAVE A NICE DAY</span></h1>
	
</body>
</html>