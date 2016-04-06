<?php
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];
$fullname=$_POST["fullname"];
$gen=$_POST["gender"];
$email=$_POST["email"];
$country=$_POST["country"];
$date=$_POST["date"];
$letter=$_POST["letter"];
if($letter=="on")
	$letter=1;
else 
 $letter=0;
 //echo $letter;

 include("db.php");
$str="insert into usertb(Username,Password,Fullname,Gender,Email,Country,DateofBirth,IsNewsLetter) values('$uname','$pwd','$fullname','$gen','$email','$country','$date',$letter)";

$res=mysql_query($str,$con);
if($res > 0)
{   
	header("Location:register.php?errorno=1");
}
else
{
	header("Location:register.php?errorno=2");
}
?>
