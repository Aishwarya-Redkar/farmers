<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery-3.2.1.min.js"></script>

	
	<style>
		body
		{
			background:#ddd;
		}
		
	</style>
</head>
<body>
<?php
include "connectdb.php";
$name="";
	$adhar="";
	$emi="";
	$balance="";
if($_POST)
{

	if(!$con)
	{
		mysqli_connect_error();
	}
	
	else
	{
	$sql1="SELECT name,adhar,EMI,dedamount FROM cust WHERE  id=".$_GET['id']."";
$result=mysqli_query($con,$sql1);

while ($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$adhar=$row['adhar'];
	
	$emi=$row['EMI'];
	$balance=$row['dedamount'];
	
						 
			}
		
	}
	
	
}
?>



<div class="container">
	<div class="row">
	<div class="col-md-3">
	
	</div>
	
	<div class="col-md-5">
		<form action="" method="get">
			<h4> Customer Details</h4> 
			Cust_Id:<input type="text" name="id"  /><br/><br/>
			Cust_Name:<input type="text" name="cname" value=' <?php echo $name; ?> ' /><br/><br/>
			AdharNo:<input type="text" name="adhar" value=' <?php echo $adhar; ?> ' /><br/><br/>
			EMI:	<input type="text" name="emi" value=' <?php echo $emi; ?>' />
			Remain Balance:	<input type="text" name="balance"  value=' <?php echo $balance; ?>' /><br/><br/>
		
			
		<button class="btn btn-success" >Search</button>

		
			
			
			
			
			
			
		
		</form>
	</div>
		<div class="col-md-3">
	
	</div>
</div>

</div>
</body>

</html>