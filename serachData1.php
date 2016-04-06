<?php
$str=$_GET["str"];
$stype=$_GET["stype"];

 include("db.php");
 if($stype=="City")
 {
	 $str="SELECT Cityid,City FROM citytb WHERE City LIKE '$str%'";
	 $res=mysql_query($str,$con);
	 
		if(mysql_num_rows($res) > 0)
		{   
			while($row=mysql_fetch_array($res))
			{
				
				echo '<p  class="lbl"><a href="visit.php?cityid='.$row["Cityid"].'">'.$row["City"].'</a></p>';
			}
		}
		else
		{
			echo '<p class="color lbl">Not Found!</p>';
		}
 }
 else if($stype=="Country")
 {
	  $str="SELECT Countryid,Country FROM countrytb WHERE Country LIKE '$str%'";
	  $res=mysql_query($str,$con);
			if(mysql_num_rows($res) > 0)
		{   
			while($row=mysql_fetch_array($res))
			{
				echo '<p class="lbl"><a href="visit.php?countryid='.$row["Countryid"].'">'.$row["Country"].'</a></p>';
			}
		}
		else
		{
			echo '<p class="color lbl">Not Found!</p>';
		}
 }
else if($stype=="Region")
 {
	  $str="SELECT Regionid,Region FROM regiontb WHERE Region LIKE '$str%'";
	  $res=mysql_query($str,$con);
	if(mysql_num_rows($res) > 0)
		{   
			while($row=mysql_fetch_array($res))
			{
				echo '<p  class="lbl"><a href="visit.php?regionid='.$row["Regionid"].'">'.$row["Region"].'</a></p>';
			}
		}
		else
		{
			echo '<p class="color lbl">Not Found!</p>';
		}
 }



?>
