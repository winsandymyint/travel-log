<form method="post" action="cityInsert.php" enctype="multipart/form-data">
<p>City</p>
<input type="text" name="city" id="city" placeholder="Type a city name" class="form-control s1" required/>
<p>Country</p>
<select name="countryid" id="country" class="form-control s1" required>
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
</select>
<p>Region</p>
<select name="regionid" id="region" class="form-control s1" required>
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
</select>
<p>City Image1</p>
<input type="file" name="f1" id="image1" class="form-control s1" required/>
<p>City Image2</p>
<input type="file" name="f2" id="image2" class="form-control s1" required/>
<p>City Image3</p>
<input type="file" name="f3" id="image3" class="form-control s1" required/>
<input type="submit" value="Add" class="btn"/>
</form>
<div style="width: 100%; height: 10px;"></div>
<div style="width: 100%; height: 10px;"></div>
    <?php
    include("../db.php");
	$str="select Cityid,City,Countryid,Regionid,Cityimg1,Cityimg2,Cityimg3 from citytb";
	$res=mysql_query($str,$con);
	$rowCount = mysql_num_rows($res);
	if($rowCount> 0){
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
	}else{
		echo "<h3 style='width: 100%; height: 50px; border: 1px solid #ddd; background: #f2f2f2; text-align: center; padding: 10px;'>There's no record. Please insert new.</h3>";
	}
	?>
	