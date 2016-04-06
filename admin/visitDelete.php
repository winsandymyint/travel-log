<?php
$visitid=$_POST["visitid"];
 include("../db.php");
 $str="delete from visit where Visitid=$visitid";
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