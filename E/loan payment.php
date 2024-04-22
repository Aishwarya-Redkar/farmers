

<?php
if($_POST)
{
	
	$amt=$_POST['amt'];
	$interest=$_POST['interest'];
	$duration=$_POST['duration'];
	$int=($interest/12/100);
	
$emi=$amt*$int*(pow(1+$int,$duration)) / (pow(1+$int,$duration)-1);
$amtintpay=$emi*$duration;

echo  "emi is " .round($emi);
echo "Amount with interest" .round($amtintpay);



}


?>