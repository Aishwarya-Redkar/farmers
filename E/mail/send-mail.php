<?php
  require_once('class.phpmailer.php');

	$mailid=new PHPMailer(); // defaults to using php "mail()"
	$body=file_get_contents('main.php');
	$mailid->SetFrom('surajbadmanji22@gmail.com', 'www.2my4edge.com');
	$mailadd=$_POST['emailid'];
	$mailid->AddAddress($mailadd, "Guest");
	$mailid->Subject= "Arunkumar maha for 2my4edge.com sent you a Mail";
	$mailid->AltBody= "View the mail"; // Alt
	$mailid->MsgHTML($body);
	$mailid->AddAttachment("");      // attachment
	if(!$mailid->Send()) {
	  echo "Mailer Error: ".$mailid->ErrorInfo;
	} else {
	  echo "<div style='width:500px; margin:0 auto; min-height:80px; padding:10px; border:#006 solid 2px; text-align:center;'>
	  <span style='font-family:Tahoma, Geneva, sans-serif; font-size:18px; text-transform:uppercase; color:#006;'>Your mail is sent to</span> ' 
	  <span style='font-family:Tahoma, Geneva, sans-serif; font-size:16px; text-transform:lowercase; color:#F00;'>".$_POST['emailid']."</span> ' 
	  <span style='font-family:Tahoma, Geneva, sans-serif; font-size:18px; text-transform:uppercase; color:#006;'>Check Email in Spam too</span></div>";
	}
?>

<style media="all" type="text/css">

a { text-decoration:none; font-family:Tahoma, Geneva, sans-serif; }

</style>
<br/>
<center>

<h2 align="center"> <a href="http://www.2my4edge.com/2014/05/send-email-by-using-phpmailer.html">  </a> &nbsp; &nbsp;  &nbsp; &nbsp;  <a href="http://www.2my4edge.com"></a> </h2> 

<h2 align="center"> <a href="http://demos.2my4edge.com/mail/"> </a> </h2>