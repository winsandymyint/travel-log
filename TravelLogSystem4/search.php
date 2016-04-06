<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Log System</title>

<link href="css/allstyle.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/all.js"></script><script type="text/javascript" src="js/js/jquery.js"></script>
<script type="text/javascript" src="js/js/jquery.cycle.all.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$(".content_box").cycle({
		fx:'fade',
		delay:-500
		});
    
});    
</script>
</head>

<body>
	<div id="wrapper">
    		<div id="header">
            	<?php
                 include("header.php");
				?>
            </div>
            <div id="menu">
            <?php
                 include("menu.php");
				?>
            </div>
            <div id="index_left">
            	<?php
                include("slide_image.php");
				?>
                <div class="clear"></div>
               <div id="index_left_content" align="center">
               		<?php
                    if(isset($_SESSION["userid"]))
					{
					?>
                   		<p>
                        <input type="radio" value="City" id="city" name="s1" onClick="Search(this.value)">
                        <label for="city" class="font">City</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" value="Country" id="country" name="s1" onClick="Search(this.value)">
                        <label for="country" class="font">Country</label>
                          &nbsp;&nbsp;&nbsp;
                        <input type="radio" value="Region" id="region" name="s1" onClick="Search(this.value)">
                        <label for="region" class="font">Region</label>
                         &nbsp;&nbsp;&nbsp;
                        <input type="radio" value="Location" id="location" name="s1" onClick="Search(this.value)">
                        <label for="location" class="font">Location</label>
                        
                          &nbsp;&nbsp;&nbsp; 
                        <input type="radio" value="Date" id="searchdate" name="s1" onClick="Search(this.value)">
                        <label for="date" class="font">Date</label>
                        
                        <input type="hidden" name="stype"  id="stype"/>
                        </p>
                        <p><input type="text" name="stext" id="stext"   class="form-control" onKeyUp="SearchData(this.value,document.getElementById('stype'))"></p>
                        
                        <p><input type="date" name="date"  id="date" class="form-control" required  onChange="SearchData(this.value,document.getElementById('stype'))"/></p>
					<p id="sdata"></p>
                   <?php
					}
					else
					{
						echo '<script>alert("Please Login!");</script>';
						include("login.php");
					}
				   ?>
               </div>
            </div>
            <div id="index_right" style="height:734px;">           	
                <?php
                include("index_right.php");
				?>
                 <div id="index_right_bottom">
               		<img src="image/slideshow/Great_Wall_1.jpg">
                    <img src="image/slideshow/golden_gate_bridge.jpg">
               </div> 
            </div>
            
            <div class="clear"></div>
            
            <div id="footer">
            	<?php
                include("footer.php");
				?>
            </div>
    </div>
</body>
</html>