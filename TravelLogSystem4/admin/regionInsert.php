<?php
$region=$_POST["region"];
$countryid=$_POST["countryid"];


if((($_FILES["f1"]["error"]) > 0) || (($_FILES["f2"]["error"]) > 0) || (($_FILES["f3"]["error"]) > 0))
{
	header("Location:allInsert.php?errorno=1");	
}
else
	{
		$img1=$_FILES["f1"]["name"];
		$img2=$_FILES["f2"]["name"];
		$img3=$_FILES["f3"]["name"];
		
		$m1='image/'.$img1;
		$m2='image/'.$img2;
		$m3='image/'.$img3;
		
	
	}
 include("../db.php");

$str="insert into regiontb(Region,Countryid,Regionimg1,Regionimg2,Regionimg3) values('$region',$countryid,'$m1','$m2','$m3')";

$res=mysql_query($str,$con);
if($res > 0)
{
    move_uploaded_file($_FILES["f1"]["tmp_name"],"../image/".$img1);
	move_uploaded_file($_FILES["f2"]["tmp_name"],"../image/".$img2);
	move_uploaded_file($_FILES["f3"]["tmp_name"],"../image/".$img3);
	header("Location:allInsert.php?errorno=2");

}
else
{
	header("Location:allInsert.php?errorno=3");
}
?>
