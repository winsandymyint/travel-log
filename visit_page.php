<?php

include("db.php");
$str="SELECT v.VisitDate,v.GeoInfo,v.Comment,v.Hotelimg,v.Restaurantimg,c.Country,ci.City,r.Region 
		FROM visit v,countrytb c,citytb ci,regiontb r
		WHERE v.Countryid=c.Countryid and v.Regionid=r.Regionid and v.cityid=ci.Cityid";
$res=mysql_query($str,$con);
echo '
		<div class="banner-bottom">
		    <!-- container -->
		    <div class="container">
		        <div class="faqs-top-grids">
		            <div class="book-grids">
		                <div class="col-md-12">
		                <h3>Results</h3>';
while($row=mysql_fetch_array($res))
{
	echo '
            <!-- RESULT HERE -->
            	<div class="c-rooms">
            	    <div class="p-table">
            	        <div class="p-table-grids">
            	            <div class="col-md-3 p-table-grid">
            	                <div class="p-table-grad-heading">
            	                    <h6>Hotel Image</h6>
            	                </div>
            	                <div class="p-table-grid-info">
            	                    <a href="#"><img src="'.$row["Hotelimg"].'" alt=""></a>
            	                </div>
            	            </div>
            	            <div class="col-md-3 p-table-grid">
            	                <div class="p-table-grad-heading">
            	                    <h6>Restaurant Image</h6>
            	                </div>
            	                <div class="p-table-grid-info">
            	                	<a href="#"><img src="'.$row["Hotelimg"].'" alt=""></a>
            	                </div>
            	            </div>
            	            <div class="col-md-6 p-table-grid">
            	                <div class="p-table-grad-heading">
            	                    <h6>Detail Info</h6>
            	                </div>
            	                <div class="avg-rate">
        	                		<p><font style="color: #337ab7">VisitDate : </font>'.$row["VisitDate"].'</p>
        	                		<p><font style="color: #337ab7">GeoInfo : </font>'.$row["GeoInfo"].'</p>
        	                		<p><font style="color: #337ab7">Comment : </font>'.$row["Comment"].'</p>
        	                		<p><font style="color: #337ab7">City : </font>'.$row["City"].'</p>
        	                		<p><font style="color: #337ab7">Country : </font>'.$row["Country"].'</p>
        	                		<p><font style="color: #337ab7">Region : </font>'.$row["Region"].'</p>
            	                </div>
            	            </div>
            	            <div class="clearfix"> </div>
            	        </div>
            	    </div>
            	</div>
            <!-- RESULT HERE -->
            ';
}
echo '</div>
			                <div class="clearfix"> </div>
			            </div>
			        </div>
			    </div>
			    <!-- //container -->
			</div>';
?>
