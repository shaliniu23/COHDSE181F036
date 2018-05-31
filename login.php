<?php
	include("loginserv.php");
?>

<?php
if(isset($_POST["submit"]))
{
	if(empty($_POST['user']) || empty($_POST['pass']))
	{
		setcookie("user", $_POST["user"], time()+60);
		setcookie("pwd", $_POST["pass"], time()+60);
	}
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<h1 align="center">Login Form</h1>
<form action="" method="post" style="text-align: center">
	Username <input type="text" placeholder="Username" id="user" name="user" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" /><br /><br />
	Password <input type="password" placeholder="Password" id="pass" name="pass" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" /><br /><br />
	<input type="submit" value="Login" name="submit"><br /><br />
    
    <a href="remove.php"> Remove Username & Password </a><br /><br />
<span><?php echo $error ?></span>
</body>
</html>