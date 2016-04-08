<form method="post" action="regionInsert.php" enctype="multipart/form-data">
	<p>Region</p>
	<input type="text" name="region" id="region" class="form-control s1" required/>
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
	<p>Region Image1</p>
	<input type="file" name="f1" id="image1" class="form-control s1" required/>
	<p>Region Image2 </p>
	<input type="file" name="f2" id="image2" class="form-control s1" required/>
	<p>Region Image3</p>
	<input type="file" name="f3" id="image3" class="form-control s1" required/>
    <div class="clearfix"> </div>
    <div style="width: 100%; height: 30px;"></div>
    <input type="submit" value="Add"/></p>
    </form>
    
   <?php
    include("../db.php");
	$str="SELECT Regionid,Region,Countryid,Regionimg1,Regionimg2,Regionimg3 FROM regiontb";
	$res=mysql_query($str,$con);
	$rowCount = mysql_num_rows($res);
	if($rowCount> 0){
			echo '<table class="table"><tr>
				<th><label  class="lbl">No </label></th>
				<th><label class="lbl">Region</label> </th>
				<th><label class="lbl">Countryid</label> </th>
				<th><label class="lbl">Regionimg1</label> </th>
				<th><label class="lbl">Regionimg2</label> </th>
				<th><label class="lbl">Regionimg3</label> </th>
			</tr>';
			$i=0;
			while($row=mysql_fetch_array($res))
			{
			
			echo '<tr align="center">
					<td><label  class="lbl">'.++$i.'</label></td>
					<td><label class="lbl">'.$row["Region"].' </label> </td>
					<td><label class="lbl">'.$row["Countryid"].' </label> </td>
					<td><label class="lbl"><img src="../'.$row["Regionimg1"].'" width="100px" height="100px"> </label> </td>
					<td><label class="lbl"><img src="../'.$row["Regionimg2"].'" width="100px" height="100px">  </label> </td>
					<td><label class="lbl"><img src="../'.$row["Regionimg3"].'" width="100px" height="100px">  </label> </td>
    			</tr>';
			}
			echo '</table>';
	}else{
		echo "<h3 style='width: 100%; height: 50px; border: 1px solid #ddd; background: #f2f2f2; text-align: center; padding: 10px;'>There's no record. Please insert new.</h3>";
	}
	
	?>