    <?php
    include("../db.php");
    if(isset($_SESSION["uid"])){
    	if(isset($_GET["type"]))
    	{	
    		$id= $_GET["id"];
    		$str="SELECT * FROM visit WHERE Visitid= $id";
    		$res=mysql_query($str,$con);
    		// $Trow=mysql_fetch_array($res);
    		// $rowCount = mysql_num_rows($res);
    		$TrowArray= [];
    		echo mysql_fetch_array($res)[0];
    		echo "hi";
    		while($row=mysql_fetch_array($res))
    		{
    			echo $row;
    			echo "<br />hi 2<br />";
    		}
    		// print_r($Trow[0].Countryid);
    ?>
    		<form method="post" action="visitInsert.php" enctype="multipart/form-data">
    			<p>Country</p>
    			<!-- <select name="countryid" id="country" class="form-control s1" required> -->
    				<!-- <option value="">Please Select Country</option> -->
    		    	<?php
    		        include("../db.php");
    				$str="SELECT Countryid,Country FROM countrytb";
    				$res=mysql_query($str,$con);
    				// echo "<br />";
    				// echo $Trow[0].Countryid;
    				// echo "<br />HI:";
    				// echo $row['Countryid'];
    				$row= mysql_fetch_array($res);
    				// print_r($Trow);
					// echo "::KJFEk;ew <br />";
					// echo mysql_num_rows($res);
					// echo "::KJFEk;ew <br />";
    				while($row=mysql_fetch_array($res))
    				{	
    						echo "<br />";
    						echo $row["Countryid"];
    						echo $Trow[0];
    					if($Trow[0].Countryid==$row["Countryid"]){
    						echo "TEST SUCCESS";
    				// 		echo '<option selevalue="'.$row["Countryid"].'" selected>'.$row["Country"].'</option>';
    					}else{
	    			// 		echo '<option value="'.$row["Countryid"].'">'.$row["Country"].'</option>';
    					}
    				}
    				?>
    		    <!-- </select> -->
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
    			<p>City</p>
    			<select name="cityid" id="city" class="form-control s1" required>
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
    		    </select>
    			<p>Visit Date</p>
    			<input type="date" name="visitdate" id="visitdate" class="form-control s1" style="width: 100%;" />
    			<p>Geo Info </p>
    			<input type="text" name="f1" id="geo" class="form-control s1" />
    			<p>Comment</p>
    			<textarea name="cmt" id="cmt" class="border-color" class="form-control s1" style="width: 100%;" rows='6' class="border-color" required></textarea>
    			<div style="width: 100%; height: 10px;"></div>
    			<div>
    				<div class="col-md-6">
    					<p>Hotel Image</p>
    					<input type="file" name="hotelimg" id="hotelimg" class="form-control s1" required/>
    				</div>
    				<div class="col-md-6">
    					<p>Restaurant Image </p>
    					<input type="file" name="restaurantimg" id="restaurantimg" class="form-control s1" required/>
    				</div>
    				<div class="clearfix"> </div>
    			</div>
    			<div style="width: 100%; height: 30px;"></div>
    			<input type="submit" id="Add" value="Add">
    			</form>
    	<?php
    	}else{
    	?>
    	<form method="post" action="visitInsert.php" enctype="multipart/form-data">
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
    		<p>City</p>
    		<select name="cityid" id="city" class="form-control s1" required>
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
    	    </select>
    		<p>Visit Date</p>
    		<input type="date" name="visitdate" id="visitdate" class="form-control s1" style="width: 100%;" />
    		<p>Geo Info </p>
    		<input type="text" name="f1" id="geo" class="form-control s1" />
    		<p>Comment</p>
    		<textarea name="cmt" id="cmt" class="border-color" class="form-control s1" style="width: 100%;" rows='6' class="border-color" required></textarea>
    		<div style="width: 100%; height: 10px;"></div>
    		<div>
    			<div class="col-md-6">
    				<p>Hotel Image</p>
    				<input type="file" name="hotelimg" id="hotelimg" class="form-control s1" required/>
    			</div>
    			<div class="col-md-6">
    				<p>Restaurant Image </p>
    				<input type="file" name="restaurantimg" id="restaurantimg" class="form-control s1" required/>
    			</div>
    			<div class="clearfix"> </div>
    		</div>
    		<div style="width: 100%; height: 30px;"></div>
    		<input type="submit" id="Add" value="Add">
    		</form>
    	<?php
    		$str="SELECT Visitid,Countryid,Regionid,Cityid,VisitDate,GeoInfo,Comment,Hotelimg,Restaurantimg FROM visit";
    		$res=mysql_query($str,$con);
    		$rowCount = mysql_num_rows($res);
    		if($rowCount> 0){
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
    		}else{
    			echo "<h3 style='width: 100%; height: 50px; border: 1px solid #ddd; background: #f2f2f2; text-align: center; padding: 10px;'>There's no record. Please insert new.</h3>";
    		}
    	}
    }
	
	?>


	<style type="text/css">
	    .border-color{
	        border: 1.5px solid #CBCBCB;
	    }

	</style>