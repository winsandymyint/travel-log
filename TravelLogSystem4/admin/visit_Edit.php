<?php
$visitid=$_GET["visitid"];
 include("../db.php");
 $str="select Visitid,VisitDate,Comment from visit where Visitid=$visitid";
 $res=mysql_query($str,$con);
 if($res > 0)
{    
while($row=mysql_fetch_array($res))
{
	echo '<input type="hidden" value="'.$row["Visitid"].'" name="visitid">
			<p>
        	<label for="visitdate" class="lbl">Visit Date</label>  
            <input type="date" name="visitdate" id="visitdate" class="form-control" value="'.$row["VisitDate"].'"/>
        </p>
		<p>
        	<label for="cmt" class="lbl">Comment</label>  
           <textarea name="cmt" id="cmt" class="form-control s1">'.$row["Comment"].'</textarea>
        </p>	';
}
}

?>