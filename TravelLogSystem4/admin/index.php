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
            	<?php
				if(isset($_SESSION["uid"]))
				{
						
					if(isset($_GET["id"]))
					{
						$id=$_GET["id"];
						if($id=="insert")
						{
							include("insert.php");
						}
						else if($id=="edit")
						{
							include("edit.php");
						}
						else if($id=="delete")
						{
							include("delete.php");
						}
						else if($id=="newsletter")
						{
							include("newsletter.php");
						}
						
					}
				
				}
				else
				{
				/*echo '<script>alert("Please Login!")</script>';*/
               	 include("login.php");
				}
				?>
            </div>
            </div>
            <div id="footer">
            	<?php
                include("../footer.php");
				?>
            </div>
    </div>
</body>
<?php
if(isset($_GET["error"]))
{
	$error=$_GET["error"];
	if($error==1)
	{
		echo '<script>alert("Login Fail!")</script>';
	}
}
?>
</html>
