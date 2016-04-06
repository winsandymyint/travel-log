<?php
session_start();
?>
<html>
<head>
<title>Kate's Travel Records | Home</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
                 include("adminmenu.php");
				?>
            </div>
            <div id="content">           	
                <?php
                include("../content.php");
				?>
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
               	 include("../login.php");
				}
				?>
            </div>
            <div id="footer">
            	<?php
                include("../footer.php");
				?>
            </div>
    </div>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>	
	<script defer src="../js/jquery.flexslider.js"></script>
	<script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
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
