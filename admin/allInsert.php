<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Kate's Travel Records | Home</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=""/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="../css/JFFormStyle-1.css" />
<!-- js -->
<script src="../js/jquery.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="../js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>             
	<div id="wrapper">
		<div id="header">
        	<?php
             include("adminheader.php");
			?>
        </div>
        <div id="banner">
        	<?php
            include("adminbanner.php");
			?>
            <div class="clear"></div>
        </div>
        <div id="banner2">
        	<?php
            include("adminbanner-bottom.php");
			?>
            <div class="clear"></div>
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
