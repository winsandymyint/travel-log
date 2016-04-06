<?php
$visitid=$_POST["visitid"];
$visitdate=$_POST["visitdate"];
$cmt=$_POST["cmt"];
 include("../db.php");
 $str="update visit set VisitDate='$visitdate',Comment='$cmt' where Visitid=$visitid";
 $res=mysql_query($str,$con);
 if($res > 0)
{
    
	header("Location:allInsert.php?errorno=2");

}
else
{
	header("Location:allInsert.php?errorno=3");
}
?>