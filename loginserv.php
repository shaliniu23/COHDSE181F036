<?php
$error="";
if(isset($_POST['submit']))
{
	if(empty($_POST['user']) || empty($_POST['pass']))
	{
		$error = "Username or Password is Invalid";
	}
	else
	{
		$username=$_POST['user'];
		$password=$_POST['pass'];
		
		$conn = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn, "logintest");
		$query = mysqli_query($conn, "SELECT * FROM data WHERE pass='$password' AND user='$username'");
		$rows = mysqli_num_rows($query);
		
		if($rows == 1)
		{	
			$_SESSION["user"]=$un;
	 		setcookie("user","$un",time()+85600,"/","",0);
			header("Location: welcome.php");
		}
		else
		{
			$error = "Username or Password is Inavalid";
		}
		mysqli_close($conn);
	}
}
?>
