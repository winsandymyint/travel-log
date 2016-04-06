<?php

include("db.php");
$str="SELECT v.VisitDate,v.GeoInfo,v.Comment,v.Hotelimg,v.Restaurantimg,c.Country,ci.City,r.Region 
		FROM visit v,countrytb c,citytb ci,regiontb r
		WHERE v.Countryid=c.Countryid and v.Regionid=r.Regionid and v.cityid=ci.Cityid";
$res=mysql_query($str,$con);
while($row=mysql_fetch_array($res))
{
	echo '<div class="visit">';
	echo '<p class="himg">Hotel Image<img src="'.$row["Hotelimg"].'"/></p>';
	echo '<p class="himg">Restaurant Image<img src="'.$row["Hotelimg"].'"/></p>';
	
	echo '<p>
			<ul class="view">
				<li><b>VisitDate :</b>'.$row["VisitDate"].'</li>
				<li><b>GeoInfo :</b>'.$row["GeoInfo"].'</li>
				<li><b>Comment :</b>'.$row["Comment"].'</li>
				<li><b>City :</b>'.$row["City"].'</li>
				<li><b>Country :</b>'.$row["Country"].'</li>
				<li><b>Region :</b>'.$row["Region"].'</li>
			</ul></p>';
	echo '</div>';

}
?>
