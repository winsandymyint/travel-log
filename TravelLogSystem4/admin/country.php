<form method="post" action="countryInsert.php" enctype="multipart/form-data">
    	<p>
        	<label for="country" class="lbl">Country</label>  
            <input type="text" name="country" id="country" class="form-control" required/>
        </p>
        <p>
        	<label for="image" class="lbl">Image </label>
            <input type="file" name="ff" id="image" class="form-control" required/>
         </p>
        <p><input type="submit" value="Add" class="btn"/></p>
    </form>
    <?php
    include("../db.php");
	$str="select Countryid,Country,Countryimg1 from countrytb";
	$res=mysql_query($str,$con);
	echo '<table class="table"><tr>
					<th><label  class="lbl">No </label></th>
					<th><label class="lbl">Country</label> </th>
					<th><label class="lbl">Country Image</label> </th>
    			</tr>';
				$i=0;
	while($row=mysql_fetch_array($res))
	{
	
			echo '<tr align="center">
					<td><label  class="lbl">'.++$i.'</label></td>
					<td><label class="lbl">'.$row["Country"].' </label> </td>
					<td><label class="lbl"><img src="../'.$row["Countryimg1"].'" width="100px" height="100px">  </label> </td>
    			</tr>';
	}
	echo '</table>';
	?>