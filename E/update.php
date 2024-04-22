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
if($_POST)
{

	if(!$con)
	{
		mysqli_connect_error();
	}
	
	else
	{
	$sql="UPDATE  cust SET
		name='".$_POST['name']."',
		contact='".$_POST['contact']."',
		address='".$_POST['address']."',
		email='".$_POST['email']."',
		amount='".$_POST['amount']."'
		
			
	WHERE id=".$_GET['id']."
		";
	}
	
	if(mysqli_query($con,$sql))
	{
			echo "<h3>Updated Successfully</h3>";
			header("location:display.php");
	}
		else{
			mysqli_error();
		}
		
		

}


$name="";
$contact="";
$address="";
$email="";
$amount="";

	//$sql1="SELECT name,contact,address,email,amount FROM cust WHERE id='$_POST["id"]'";
	$sql1="SELECT cust.* FROM cust WHERE  cust.id=".$_GET['id']."";
$result=mysqli_query($con,$sql1);
while ($row=mysqli_fetch_array($result))
{
	$name=$row['name'];
	$contact=$row['contact'];
	
	$address=$row['address'];
	$email=$row['email'];
	$amount=$row['amount'];
	
}
			
		
?>

<div class="col-md-3">
</div>
<div class="col-md-5">
		<form action="" method="post">
			<h4> Customer Details</h4> 
			Name:<input type="text" name="name" value="<?php echo $name;?>" /><br/>
			Contact:<input type="text" name="contact" value="<?php echo $contact;?>" /><br/>
			Address:<input type="text" name="address" value="<?php echo $address;?>" /><br/>
			Email:<input type="text" name="email" value="<?php echo $email;?>" /><br/>
			Amount:<input type="text" name="amount" value="<?php echo $amount;?>" /><br/>
			
			
			
		<button class="btn btn-success" >Register</button>

		
			
			
			
			
			
			
		
		</form>
		
		</div>
<div class="col-md-3">
</div>
</body>

</html>


</html>