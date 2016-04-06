<form method="post" action="visitEdit.php">
    	<p>
        	<label for="visitid" class="lbl">Visit ID</label>  
            <select name="visitid" id="visitid" class="form-control" required onchange="Edit(this.value)">
            <option value="">Please Select Visit</option>
            	<?php
                include("../db.php");
				$str="SELECT Visitid FROM visit";
				$res=mysql_query($str,$con);
				while($row=mysql_fetch_array($res))
				{
					echo '<option>'.$row["Visitid"].'</option>';
				}
				?>
            </select>
          
        </p>
        <div id="view"></div>
        <p><input type="submit" value="Edit" class="btn"/></p>
    </form>