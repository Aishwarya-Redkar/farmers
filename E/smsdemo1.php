<?php

if(isset($_POST["submit"]))
{
$mno =$_POST["mno"];
$message= $_POST["message"];

$ch = curl_init();
$user="shankar974362@gmail.com:shankard";
$receipientno="9743620780"; 
$senderID="TEST SMS"; 
$msgtxt="this is test message , test"; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer;
 
curl_close($ch);
}

{
echo 'API key not provided';
}
}

?>

<html>
<head>
<title> </title>
</head>

<body align="center">
<form action ="" method ="post">
Enter Mobile number:<br>
<input type="text" name="mno"><br>
Message <br>
<textarea type="text" cols="20" rows="6" name="message" >Dear Customer,Your Selp Help Group loan payment due date is on 10-Aug-2017</textarea>
<br>
<br>
<input type ="submit" name="submit" value="Send"/>
</form>
 
 
<a href="home.php">Click Here Redirect HomePage</a>
 </body>
 </html>
 