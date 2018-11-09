<html>
<head>
<title>Login</title>
</head>
<body>
<form name="frmLogin" method="post" action="#">
User Name:- <input type="text" name="txtName" /><br /><br />
Password:- <input type="text" name="txtPw" /><br /><br />
<input type="submit" name="btnLog" value="Login" />
<input type="reset" name="btnCls" value="Clear" />
	
</form>
</body>
</html>

<?php
if(isset($_POST["txtName"]))
{
	$un=$_POST["txtName"];
	$pw=$_POST["txtPw"];
}
	$flag=0;
	$r=mysqli_fetch_array($result);
	while ($r)
	{
		if($un=="admin" && $pw==1234)
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
		session_start();
		$_SESSION["Uname"]=$un;
		$_SESSION["LAT"]=time();
		header("Location:welcome.php");
	}
	else
	{
		echo "Invalid Username or Password";
	}
	mysqli_close();
	
