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
            <div id="index_left">
            	<?php
                include("slide_image.php");
				?>
                <div class="clear"></div>
               <div id="index_left_content" align="center" style="height:550px;">
               		<?php
					if(isset($_SESSION["userid"]))
					{
                    include("visit_page.php");
					}
					else
					{
						echo '<script>alert("Please Login!");</script>';
						include("login.php");
					}
					?>
               </div>
            </div>
            <div id="index_right" style="height:871px;">           	
                <?php
                include("index_right.php");
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