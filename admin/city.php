<form method="post" action="cityInsert.php" enctype="multipart/form-data">
<table>
	<tr>
    	<td><label for="city" class="lbl">City</label></td> 
        <td><input type="text" name="city" id="city" class="form-control s1" required/></td>
    </tr>
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
    	<td><label for="image1" class="lbl">City Image1 </label></td>
        <td> <input type="file" name="f1" id="image1" class="form-control s1" required/></td>
    </tr>
    <tr>
    	<td><label for="image2" class="lbl">City Image2 </label></td>
        <td><input type="file" name="f2" id="image2" class="form-control s1" required/></td>
    </tr>
    <tr>
    	<td><label for="image3" class="lbl">City Image3 </label></td>
       <td> <input type="file" name="f3" id="image3" class="form-control s1" required/></td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" value="Add" class="btn"/></p></td>  
    </tr>
</table>
    </form>
    <?php
    include("../db.php");
	$str="select Cityid,City,Countryid,Regionid,Cityimg1,Cityimg2,Cityimg3 from citytb";
	$res=mysql_query($str,$con);
	echo '<table class="table"><tr>
					<th><label  class="lbl">No </label></th>
					<th><label class="lbl">City</label> </th>
					<th><label class="lbl">Countryid</label> </th>
					<th><label class="lbl">Regionid</label> </th>
					<th><label class="lbl">Cityimg1</label> </th>
					<th><label class="lbl">Cityimg2</label> </th>
					<th><label class="lbl">Cityimg3</label> </th>
    			</tr>';
				$i=0;
	while($row=mysql_fetch_array($res))
	{
	
			echo '<tr align="center">
					<td><label  class="lbl">'.++$i.'</label></td>
					<td><label class="lbl">'.$row["City"].' </label> </td>
					<td><label class="lbl">'.$row["Countryid"].' </label> </td>
					<td><label class="lbl">'.$row["Regionid"].' </label> </td>
					<td><label class="lbl"><img src="../'.$row["Cityimg1"].'" width="100px" height="100px"> </label> </td>
					<td><label class="lbl"><img src="../'.$row["Cityimg2"].'" width="100px" height="100px">  </label> </td>
					<td><label class="lbl"><img src="../'.$row["Cityimg3"].'" width="100px" height="100px">  </label> </td>
    			</tr>';
	}
	echo '</table>';
	?>
	