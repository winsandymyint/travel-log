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
	        <!-- banner-bottom -->
	        <div class="banner-bottom">
	            <!-- container -->
	            <div class="container">
	                <div class="faqs-top-grids">
	                    <div class="book-grids">
	                        <div class="col-md-12">
	                            <div class="book-left-info">
	                                <h3>Inserting new record.</h3>
	                                <select onchange="location = this.value;">
	                                  <option value="allInsert.php?insert_id=country"><h3><a href="allInsert.php?insert_id=country" class="btn">Country</a></h3></option>
	                                  <option value="allInsert.php?insert_id=city"><h3><a href="allInsert.php?insert_id=city" class="btn">City</a></h3></option>
	                                  <option value="allInsert.php?insert_id=region"><h3><a href="allInsert.php?insert_id=region" class="btn">Region</a></h3></option>
	                                  <option value="allInsert.php?insert_id=visit"><h3><a href="allInsert.php?insert_id=visit" class="btn">Visit</a></h3></option>
	                                </select>
	                            </div>
	                            <div class="book-left-form">
	                                    <div style='width: 100%; height: auto; border: 1px dotted #ddd; background: transparent; padding: 30px;'> 
                        	            	<?php	               
                        					if(isset($_SESSION["uid"]))
                        					{						
                        						// include("insert.php");
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
                        					}
                        					else
                        					{
                        	               	 // include("login.php");
                        					}
                        					?>
	                                    </div>
	                            </div>
	                        </div>
	                        <div class="clearfix"> </div>
	                    </div>
	                </div>
	            </div>
	            <!-- //container -->
	        </div>
            <div id="footer">
            	<?php
                include("../footer.php");
				?>
            </div>
    </div>
	<script defer src="../js/jquery.flexslider.js"></script>
	<script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
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
</html>
