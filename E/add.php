<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery-3.2.1.min.js"></script>

	<script>
		function myfunction()
		{
				
		
		}
	
	</script>
	
	<style>
		body
		{
			background:#ddd;
		}
		hr
		{
		border: 1px solid black;
		}
	</style>
</head>
<body>
<?php
include "connectdb.php";
	

if($_POST)
{

	if(!$con)
	{
		mysqli_connect_error();
	}
	
	else
	{
	$sql="INSERT INTO cust(name,dob,adhar,contact,address,email,amount,fromD,toD)VALUES
	('".$_POST["name"]."',
	'".$_POST["date"]."',
	'".$_POST["adhar"]."',
	'".$_POST["contact"]."',
	'".$_POST["address"]."',
	'".$_POST["email"]."',
	'".$_POST["amt"]."',
	
	'".$_POST["fromD"]."',
	'".$_POST["toD"]."'
	
	)";
	if(mysqli_query($con,$sql))
		{
			$adhar=$_POST["adhar"];
			$amt=$_POST["amt"];
			$duration=$_POST["dur"];
			
			$int=(10.5/12/100);

			$emi=$amt*$int*(pow(1+$int,$duration)) / (pow(1+$int,$duration)-1);
			$amtintpay=$emi*$duration;
			$emi=round($emi);
			$amtintpay=round($amtintpay);
		}
	$sql1="UPDATE cust SET `EMI`='$emi',`amountinterest`='$amtintpay' WHERE `adhar`=$adhar";
	
	
		
				if(mysqli_query($con,$sql1))
				{
					
			echo 'inserted successfully';
			include ("adminhome.php");
  exit();
		}
		else
		{
			mysqli_error();
		}
	}
}
?>
<br/>
<br/>

<div class="container">
	<div class="row">
	<div class="col-md-3">
	
	</div>
	
	<div class="col-md-5">
		<form action="" method="post">
			<h4> Customer Details</h4> 
			Name:		<input type="text" name="name" placeholder="Enter Name" required><br/><br/>
			DOB:		<input type="date" name="date" ><br/><br/>
			AdharNo:	<input type="text" name="adhar" placeholder="Enter Adhar Card Number" required><br/><br/>
			AdharNo:	<input type="text" name="contact" placeholder="Enter Phone Number" required><br/><br/>
			Address:	<input type="text" name="address" placeholder="Enter Address" required><br/><br/>
			Email:			<input type="email" name="email" placeholder="Enter Mail">
			
			<hr></hr>
			<h4>Loan</h4>
			
			Amount	<input type="text" name="amt" placeholder="Enter Amount" required><br/><br/>
			
			Duration Months	<input type="text" name="dur" placeholder="Enter EMI" required><br/><br/>
			From	<input type="date" name="toD" ><br/><br/>
			To	<input type="date" name="fromD" ><br/><br/>
			
		<button class="btn btn-success" >Register</button>

		</div>
			
			
			
			
			
			
		
		</form>
	
		<div class="col-md-3">
	
	</div>
</div>

</div>
</body>

</html>