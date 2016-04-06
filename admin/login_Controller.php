<?php
session_start();
$username=$_POST["uname"];
$pwd=$_POST["pwd"];
if($username=="admin" && $pwd=="admin")
{
	$_SESSION["uid"]=1;
	echo '<script>alert("Login Success!");window.location.href="index.php";</script>';
}
else
{
	header("Location:index.php?error=1");
}
?>