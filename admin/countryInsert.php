<?php
$country=$_POST["country"];

if(($_FILES["ff"]["error"]) > 0)
{
	header("Location:allInsert.php?errorno=1");

}
else
	{
		$imgname=$_FILES["ff"]["name"];
	}
 include("../db.php");
$str="insert into countrytb(Country,Countryimg1) values('$country','$imgname')";

$res=mysql_query($str,$con);
if($res > 0)
{
    move_uploaded_file($_FILES["ff"]["tmp_name"],"../image/".$imgname);
	header("Location:allInsert.php?errorno=2");

}
else
{
	header("Location:allInsert.php?errorno=3");
}
?>
