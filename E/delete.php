<?php 

	$server="localhost";
	$username="root";
	$password="";
	$dbname="shg";
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn){
		mysqli_connect_error();
	}
if(!$conn){
		mysqli_connect_error();
	}
	$sql="delete from cust where id='".$_GET['id']."' ";
	mysqli_query($conn,$sql);
	header("location:display.php");
	
?>