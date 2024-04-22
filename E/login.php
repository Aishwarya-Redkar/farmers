<html>
<head>
<script>
function validation1()
{
	user=document.form1.myusername.value;
	pass1=document.form1.mypassword.value;
     
	 var ichars=user;
	var at=ichars.indexOf("_");
		var dot=ichars.lastIndexOf(".");
		if (user=="")
	
			{
				alert("Enter username");
				document.form1.myusername.focus();
				return false;
					 }    
		
		
	  
        
		
		var ichars=pass1;
	var at=ichars.indexOf("@");
		
		if (pass1=="")
	
			{
				alert("Enter password");
				document.form1.mypassword.focus();
				return false;
					 }    
		
		
		
		
		
	}
	</script>
	</head>
<body bgcolor="#3b3b3b" text="white">

<br/><br/><br/>
<center>

<H1>LOG IN</H1></center>


<form name="form1" method="post" action="adminhome.php" onsubmit="return validation1()">
        <label for="textfield"></label><center>Username:-
        <input type="text" name="myusername" id="username" required /></center>
        <br><br>
       <center>Password:-
        <input type="password" name="mypassword" id="password" /></center>
      <br><br><br><br>
	  
	 
   <center>   <input type="submit" name="submit" value="Login"></center>
   

      
      </form>
      



</body>
</html>