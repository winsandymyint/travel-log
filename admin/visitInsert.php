<?php
$countryid=$_POST["countryid"];
$regionid=$_POST["regionid"];
$cityid=$_POST["cityid"];
$visitdate=$_POST["visitdate"];
$cmt=$_POST["cmt"];

if((($_FILES["hotelimg"]["error"]) > 0) || (($_FILES["restaurantimg"]["error"]) > 0))
{
	header("Location:allInsert.php?errorno=1");
	
}
else
	{
		$hotelimg=$_FILES["hotelimg"]["name"];
		$restaurantimg=$_FILES["restaurantimg"]["name"];
	
	}
 include("../db.php");

$str="insert into visit(Countryid,Regionid,Cityid,VisitDate,Comment,Hotelimg,Restaurantimg) values($countryid,$regionid,$cityid,'$visitdate','$cmt','$hotelimg','$restaurantimg')";

$res=mysql_query($str,$con);
if($res > 0)
{
    move_uploaded_file($_FILES["hotelimg"]["tmp_name"],"../image/".$hotelimg);
	move_uploaded_file($_FILES["restaurantimg"]["tmp_name"],"../image/".$restaurantimg);

	header("Location:allInsert.php?insert_id=visit");
	// header("Location:allInsert.php?insert_id=visit&errorno=2");

}
else
{
	header("Location:allInsert.php?insert_id=visit");
}
?>
