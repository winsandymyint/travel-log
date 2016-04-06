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
        <td> <input type="date" name="visitdate" id="visitdate" class="form-control s1"/></td>
    </tr>
     <tr>
    	<td><label for="geo" class="lbl">Geo Info </label></td>
        <td> <input type="text" name="f1" id="geo" class="form-control s1"/></td>
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
	$str="SELECT Visitid,Countryid,Regionid,Cityid,VisitDate,GeoInfo,Comment,Hotelimg,Restaurantimg FROM visit";
	$res=mysql_query($str,$con);
	echo '<table class="table"><tr>
					<th><label  class="lbl">No </label></th>					
					<th><label class="lbl">Countryid</label> </th>
					<th><label class="lbl">Regionid</label> </th>
					<th><label class="lbl">Cityid</label> </th>
					<th><label class="lbl">VisitDate</label> </th>
					<th><label class="lbl">GeoInfo</label> </th>
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
					<td><label class="lbl">'.$row["GeoInfo"].' </label> </td>
					<td><label class="lbl">'.$row["Comment"].' </label> </td>
					<td><label class="lbl"><img src="../'.$row["Hotelimg"].'" width="100px" height="100px"> </label> </td>
					<td><label class="lbl"><img src="../'.$row["Restaurantimg"].'" width="100px" height="100px">  </label> </td>
		
    			</tr>';
	}
	echo '</table>';
	?>