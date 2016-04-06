<?php
$email=$_GET["email"];

 include("db.php");
$str="SELECT Email FROM usertb WHERE Email='$email'";

$res=mysql_query($str,$con);
if(mysql_num_rows($res) > 0)
{   
	echo "Invalid Email!";
}
else
{
	echo "";
}
?>
