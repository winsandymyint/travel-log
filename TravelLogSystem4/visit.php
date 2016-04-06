<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Log System</title>

<link href="css/allstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/js/jquery.js"></script>
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
            <div id="index_left"  style="height:320px;">
            	<?php
                include("slide_image.php");
				?>
                <div class="clear"></div>
               
            </div>
            <div id="index_right" style="height:320px;">           	
                <?php
                include("index_right.php");
				?>
                
            </div>
            <div id="visit_left">
               		<?php
					if(isset($_SESSION["userid"]))
					{
						if(isset($_GET["cityid"]))
						{
							$cityid=$_GET["cityid"];
							include("city.php");
						}
						else if(isset($_GET["regionid"]))
						{
							$regionid=$_GET["regionid"];
							include("region.php");
						}
						else if(isset($_GET["countryid"]))
						{
							$countryid=$_GET["countryid"];
							include("country.php");
						}
						else if(isset($_GET["visitid"]))
						{
							$visitid=$_GET["visitid"];
							include("visitpage.php");
						}
                 //   include("visit_page.php");
					}
					else
					{
						echo '<script>alert("Please Login!");</script>';
						include("login.php");
					}
					?>
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