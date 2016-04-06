<?php
$countryid=$_POST["countryid"];
$regionid=$_POST["regionid"];
$cityid=$_POST["cityid"];
$visitdate=$_POST["visitdate"];
$locationname=$_POST["locationname"];
$formalname=$_POST["name"];
$formaladdress=$_POST["address"];
$longitude=$_POST["longitude"];

$latitude=$_POST["latitude"];
$cmt=$_POST["cmt"];

if((($_FILES["hotelimg"]["error"]) > 0) || (($_FILES["restaurantimg"]["error"]) > 0) || (($_FILES["image"]["error"]) > 0))
{
	header("Location:allInsert.php?errorno=1");
	
}
else
	{
		$hotelimg=$_FILES["hotelimg"]["name"];
		$restaurantimg=$_FILES["restaurantimg"]["name"];
		$limg=$_FILES["image"]["name"];
	
	   $himg='image/'.$hotelimg;
	   $rimg='image/'.$restaurantimg;
	   $img='image/'.$limg;
	}
 include("../db.php");

$str="insert into visit(Countryid,Regionid,Cityid,VisitDate,Location,Formalname,Formaladdress,Longitude,Latitude,Locationimage,Comment,Hotelimg,Restaurantimg) values($countryid,$regionid,$cityid,'$visitdate','$locationname','$formalname','$formaladdress','$longitude','$latitude','$img',
'$cmt','$himg','$rimg')";

$res=mysql_query($str,$con);
if($res > 0)
{
    move_uploaded_file($_FILES["hotelimg"]["tmp_name"],"../image/".$hotelimg);
	move_uploaded_file($_FILES["restaurantimg"]["tmp_name"],"../image/".$restaurantimg);
   move_uploaded_file($_FILES["restaurantimg"]["tmp_name"],"../image/".$limg);
	header("Location:allInsert.php?errorno=2");

}
else
{
	header("Location:allInsert.php?errorno=3");
}
?>
