<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="../css/allstyle.css" />
<script type="text/javascript" src="../js/all.js"></script>

</head>

<body>                       
	<div id="wrapper">
    		<div id="header">
            	<?php
                 include("../header.php");
				?>
            </div>
            <div id="menu">
            <?php
                 include("adminmenu.php");
				?>
            </div>
           <div id="allcontent">
            <div id="left">
            	<img src="../image/slideshow/Great_Wall_1.jpg" />
                <img src="../image/slideshow/agra7.jpg" />
                <img src="../image/slideshow/white_house.jpg" />
                <img src="../image/slideshow/golden_gate_bridge.jpg" />
            </div>
            <div id="right">
            	<div id="right_top">
            	<?php	               
				if(isset($_SESSION["uid"]))
				{						
					include("insert.php");
					}
				else
				{
				/*echo '<script>alert("Please Login!")</script>';*/
               	 include("login.php");
				}
				?>
                </div>
                <div id="right_bottom" align="center">
                <?php
					if(isset($_GET["insert_id"]))
					{
						$insert_id=$_GET["insert_id"];
						if($insert_id=="country")
						{
							include("country.php");
						}
						else if($insert_id=="region")
						{
							include("region.php");
						}
						else if($insert_id=="city")
						{
							include("city.php");
						}
						else if($insert_id=="visit")
						{
							include("visit.php");
						}
					}				
				
				?>
                </div>
                </div>
            </div>
            <div class="clear"></div>
            <div id="footer">
            	<?php
                include("../footer.php");
				?>
            </div>
    </div>
</body>
<?php
if(isset($_GET["errorno"]))
{
	$error=$_GET["errorno"];
	if($error==1)
	{
		echo '<script>alert("Image Error !");window.history.go(-1);</script>';
	}
	if($error==2)
	{
		echo '<script>alert("Success !");window.history.go(-1);</script>';
	}
	if($error==3)
	{
		echo '<script>alert("Fail !");window.history.go(-1);</script>';
	}
	
}
?>
</html>
