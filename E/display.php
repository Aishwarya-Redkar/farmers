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
		<th>DOB</th>
		<th>AdharNo</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Email</th>
		
	
		<th>action</th></tr>";
		
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr><td>".$row["id"]."</td>
				          <td>".$row["name"]."</td>
						  <td>".$row["dob"]."</td>
						  <td>".$row["adhar"]."</td>
						  <td>".$row["contact"]."</td>
						  <td>".$row["address"]."</td>
						  <td>".$row["email"]."</td>
						  
						  <td><a href='delete.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>
						  <a href='update.php?id=".$row["id"]."' class='btn btn-primary'>Update</a>
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