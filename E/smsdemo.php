<php>
if(isset($_POST["submit"]))
{
$mno=$_POST["mno"];
$message=$_POST["message"];
if(preg_match( '/^[A-Z0-9](10)$/', $mno) && !empty($message)) {
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
{ echo $buffer; } 
curl_close($ch);
}
else{
echo ' not valid information';
}
}
?>

<html>
<head>
<title> nkhihihhdih</title>
</head>

<body align="center">
<form action ="" method ="post">
enter mo no:<br>
<input type="text" name="mno"<br>
Message <br>
<textarea type="text" name"message"></textarea>
<br>
<br>
<input type ="submit" name="submit" value="Send"/>
</form>
 <h3> total remaining sms</h3>
 
 <h3 style="color:red"> www.tdhskdhkhskd.com<h3>
 </body>
 </html>
 