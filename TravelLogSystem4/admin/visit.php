<html>
<head>
 <script src="js/jquery-2.1.1.js"></script>
<script>       
        
            function initMap() {
                var latitude = parseFloat(document.getElementById("latitude").value);
                var longitude = parseFloat(document.getElementById("longitude").value);
                var mapDiv = document.getElementById('googleMap');
                var map = new google.maps.Map(mapDiv, {
                    center: {lat: latitude, lng: longitude},
                    zoom: 12
                });
            }
            
            function loadScript() {	
			
                var script = document.createElement("script");				
                script.src = "https://maps.googleapis.com/maps/api/js?callback=initMap";
                document.body.appendChild(script);							
            }
            
            $(document).ready(function(){
                $('#getgeoinfo').on('click', function(){
                    var loc = document.getElementById("locationname").value;
                    if(loc === "") {
                        alert('Enter location name to get geoinformation');
                    }
                    else {
                        $.get("getgeoinformation.php",{locationname: encodeURI(loc)}, function(data){
                            if(data !== "") {    
                                var d = data.split("#");
                                document.getElementById("name").value = d[0];
                                document.getElementById("address").value = d[1];
                                document.getElementById("longitude").value = d[2];
                                document.getElementById("latitude").value = d[3];
                                loadScript();
                               // $("#save").prop('disabled', false);
                            }
                            else {
                                alert('Error in get google places.');
                            }
                        });
                    }
                });
            });
        </script>
        </head>
        <body>
<form method="post" action="visitInsert.php" enctype="multipart/form-data">
<table>
	
    <tr>
    	<td><label for="country" class="lbl">Country</label>  </td>
        <td> <select name="countryid" id="country" class="form-control s1" required>
        		<option value="">Please Select Country</option>
            	<?php
                include("../db.php");
				$str="SELECT Countryid,Country FROM countrytb";
				$res=mysql_query($str,$con);
				while($row=mysql_fetch_array($res))
				{
					echo '<option value="'.$row["Countryid"].'">'.$row["Country"].'</option>';
				}
				?>
            </select></td>
    </tr>
    <tr>
    	<td><label for="region" class="lbl">Region</label>  </td>
        <td> <select name="regionid" id="region" class="form-control s1" required>
        		<option value="">Please Select Region</option>
            	<?php
                include("../db.php");
				$str="SELECT Regionid,Region FROM regiontb";
				$res=mysql_query($str,$con);
				while($row=mysql_fetch_array($res))
				{
					echo '<option value="'.$row["Regionid"].'">'.$row["Region"].'</option>';
				}
				?>
            </select></td>
    </tr>
     <tr>
    	<td><label for="city" class="lbl">City</label>  </td>
        <td> <select name="cityid" id="city" class="form-control s1" required>
        		<option value="">Please Select City</option>
            	<?php
                include("../db.php");
				$str="SELECT Cityid,City FROM citytb";
				$res=mysql_query($str,$con);
				while($row=mysql_fetch_array($res))
				{
					echo '<option value="'.$row["Cityid"].'">'.$row["City"].'</option>';
				}
				?>
            </select></td>
    </tr>
    <tr>
    	<td><label for="visitdate" class="lbl">Visit Date</label></td>
        <td> <input type="date" name="visitdate" id="visitdate" class="form-control s1" required/></td>
    </tr>
     <tr>
    	<td><label for="locationname" class="lbl">Location Name</label></td>
        <td> <input type="text" name="locationname" id="locationname" class="form-control s1" required/></td>
    </tr>
     <tr>
     <td></td>
    	<td>
        <input type="button" name="getgeoinfo" id="getgeoinfo" value="Get GeoInformation" class="btn btngeo"/>
         </td>
    </tr>
    <tr>
    	<td><label for="name" class="lbl">Place Name</label></td>
  
        <td> <input type="text" name="name" id="name" class="form-control s1" readonly/></td>
    </tr>
    <tr>
    	<td><label for="address" class="lbl">Address</label></td>
      
        <td> <input type="text" name="address" id="address" class="form-control s1" readonly/></td>
    </tr>
     <tr>
    	<td><label for="longitude" class="lbl">Longitude</label></td>
        <td> <input type="text" name="longitude" id="longitude" class="form-control s1" readonly/></td>
    </tr>
    <tr>
    	<td><label for="latitude" class="lbl">Latitude</label></td>
        <td> <input type="text" name="latitude" id="latitude" class="form-control s1" readonly/></td>
    </tr>
    <tr>
    <td></td>  
        <td> <div id="googleMap" style="width:230px;height:200px;border:1px solid #CCC"></div></td>
    </tr>
      <?php echo "<script>loadScript();</script>"; ?>
     <tr>
    	<td><label for="image" class="lbl">Location Image</label></td>
        <td><input type="file" name="image" id="image" class="form-control s1" required/></td>
    </tr>
     <tr>
    	<td><label for="cmt" class="lbl">Comment </label></td>
        <td> <textarea name="cmt" id="cmt" class="form-control s1" required></textarea></td>
    </tr>
 
    <tr>
    	<td><label for="hotelimg" class="lbl">Hotel Image</label></td>
        <td><input type="file" name="hotelimg" id="hotelimg" class="form-control s1" required/></td>
    </tr>
    <tr>
    	<td><label for="restaurantimg" class="lbl">Restaurant Image </label></td>
       <td> <input type="file" name="restaurantimg" id="restaurantimg" class="form-control s1" required/></td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" value="Add" class="btn"/></p></td>
  
    </tr>
</table>
    </form>
    
    <?php
    include("../db.php");
	$str="SELECT Visitid,Countryid,Regionid,Cityid,VisitDate,Location,Formalname,Formaladdress,Longitude,Latitude,Locationimage,Comment,Hotelimg,Restaurantimg FROM visit";
	$res=mysql_query($str,$con);
	echo '<table class="table"><tr>
					<th><label  class="lbl">No </label></th>					
					<th><label class="lbl">Countryid</label> </th>
					<th><label class="lbl">Regionid</label> </th>
					<th><label class="lbl">Cityid</label> </th>
					<th><label class="lbl">VisitDate</label> </th>
					<th><label class="lbl">Location</label> </th>
					<th><label class="lbl">Formalname</label> </th>
					<th><label class="lbl">Formaladdress</label> </th>
					<th><label class="lbl">Longitude</label> </th>
					<th><label class="lbl">Latitude</label> </th>
					<th><label class="lbl">Locationimage</label> </th>
					<th><label class="lbl">Comment</label> </th>
					<th><label class="lbl">Hotel Image</label> </th>
					<th><label class="lbl">Restaurant Image</label> </th>
				
    			</tr>';
				$i=0;
	while($row=mysql_fetch_array($res))
	{
	
			echo '<tr align="center">
					<td><label  class="lbl">'.++$i.'</label></td>
					<td><label class="lbl">'.$row["Countryid"].' </label> </td>
					<td><label class="lbl">'.$row["Regionid"].' </label> </td>
					<td><label class="lbl">'.$row["Cityid"].' </label> </td>
					<td><label class="lbl">'.$row["VisitDate"].' </label> </td>				
					<td><label class="lbl">'.$row["Location"].' </label> </td>
					<td><label class="lbl">'.$row["Formalname"].' </label> </td>
					<td><label class="lbl">'.$row["Formaladdress"].' </label> </td>
					<td><label class="lbl">'.$row["Longitude"].' </label> </td>
					<td><label class="lbl">'.$row["Latitude"].' </label> </td>
					<td><label class="lbl"><img src="../'.$row["Locationimage"].'" width="100px" height="100px"> </label> </td>
					<td><label class="lbl">'.$row["Comment"].' </label> </td>
					<td><label class="lbl"><img src="../'.$row["Hotelimg"].'" width="100px" height="100px"> </label> </td>
					<td><label class="lbl"><img src="../'.$row["Restaurantimg"].'" width="100px" height="100px">  </label> </td>
		
    			</tr>';
	}
	echo '</table>';
	?>
</body>
</html>