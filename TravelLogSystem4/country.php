<?php
include("db.php");

$str="SELECT v.VisitDate,v.Location,v.Formalname,v.Formaladdress,v.Longitude,v.Latitude,v.Locationimage,v.Comment,v.Hotelimg,v.Restaurantimg,c.Country,c.Countryimg1,ci.City,ci.Cityimg1,Cityimg2,Cityimg3,r.Region,r.Regionimg1,r.Regionimg2
		FROM visit v,countrytb c,citytb ci,regiontb r
		WHERE v.Countryid=c.Countryid and v.Regionid=r.Regionid and v.cityid=ci.Cityid and v.Countryid=$countryid";
		
		
$res=mysql_query($str,$con);
while($row=mysql_fetch_array($res))
{
	
	echo ' <div align="center" class="visit1">
                <h1 align="center">'.$row["Country"].'</h1>
                <p>
				    <img src="'.$row["Countryimg1"].'" class="visitimg"/>
                    <img src="'.$row["Regionimg1"].'" class="visitimg"/>
                    <img src="'.$row["Cityimg1"].'" class="visitimg"/>
                   
                </p>
                
                 <p>
                    <h1 align="center">'.$row["Region"].'  &amp; '.$row["City"].'  Image</h1>
                    <img src="'.$row["Regionimg1"].'" class="visitimg"/>
                    <img src="'.$row["Regionimg1"].'" class="visitimg"/>
                    <img src="'.$row["Countryimg1"].'" class="visitimg"/>
                </p>
                <p>
                    <h1 align="center">Hotel  &amp; Restaurant  in '.$row["City"].'</h1>
                    <img src="'.$row["Hotelimg"].'" class="visitimg"/>
                    <img src="'.$row["Restaurantimg"].'" class="visitimg"/>
					 <img src="'.$row["Locationimage"].'" class="visitimg"/>
                    <p>
                    <ul class="view" style="width:100%;">
                        <li><b>VisitDate :</b>'.$row["VisitDate"].'</li>
						<li><b>Location :</b>'.$row["Location"].'</li>
						<li><b>Formalname :</b>'.$row["Formalname"].'</li>
						<li><b>Formaladdress :</b>'.$row["Formaladdress"].'</li>
						<li><b>Longitude :</b>'.$row["Longitude"].'</li>
						<li><b>Lattitude :</b>'.$row["Latitude"].'</li>
                        <li><b>Comment :</b>'.$row["Comment"].'</li>
                        <li><b>City :</b>'.$row["City"].'</li>
                        <li><b>Country :</b>'.$row["Country"].'</li>
                        <li><b>Region :</b>'.$row["Region"].'</li>
                    </ul></p>
                </p>
			</div> ';
}
?>
