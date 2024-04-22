<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	
	
	
</head>
<body>
<?php
include "connectdb.php";




	if(!$con)
	{
		mysqli_connect_error();
	}
	
	else
	{
	$sql="SELECT * FROM cust";
		if($result=mysqli_query($con,$sql))
		{
		echo "<table class='table table-bordered'>";
		
		echo "<tr class='btn-primary'>
		<th>Id</th>
		<th>Name</th>
		<th>Adhar</th>
		<th>Contact</th>
		
		<th>Email</th>
		<th>Amount</th>
		<th>Interest</th>
		<th>EMI</th>
		<th>Deducted Amount</th>
		<th>Amount with Interest</th>
		
		
		<th></th></tr>";
		
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr><td>".$row["id"]."</td>
				          <td>".$row["name"]."</td>
						 
						  <td>".$row["adhar"]."</td>
						  <td>".$row["contact"]."</td>
						 
						  <td>".$row["email"]."</td>
						  <td>".$row["amount"]."</td>
						   <td>".$row["interest"]."</td>
						    <td>".$row["EMI"]."</td>
							 <td>".$row["dedamount"]."</td>
							  <td>".$row["amountinterest"]."</td>
						  <td><a href='addpayment.php?id=".$row["id"]."' class='btn btn-success'>Payment</a>
						  
						  </td>
					  
					  </tr>";
				
				
			}
			echo "</table>";
		}
		else
		{
			mysqli_error();
		}
	}

?>




</body>

</html>