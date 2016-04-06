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
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/all.js"></script><script type="text/javascript" src="js/js/jquery.js"></script>
<script type="text/javascript" src="js/js/jquery.cycle.all.js"></script>
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
<script src="js/menu_jquery.js"></script>
<!--//pop-up--> 
</head>
<body>
    <div id="wrapper">
            <div id="header">
                <?php
                 include("header.php");
                ?>
            </div>
            <div id="banner">
                <?php
                include("banner.php");
                ?>
                <div class="clear"></div>
            </div>
            <?php
            if(isset($_SESSION["userid"]))
            {
            ?>
                <div class="banner-bottom">
                    <!-- container -->
                    <div class="container">
                        <div class="faqs-top-grids">
                            <div class="book-grids">
                                <div class="col-md-12">
                                    <div class="book-left-info">
                                        <h3>Search Data</h3>
                                    </div>
                                    <div class="book-left-form">

                                    <!-- DATA HERE -->
                                            <p>City &nbsp;<input type="radio" value="City" checked id="city" name="s1" onClick="Search(this.value)">
                                            &nbsp;&nbsp;&nbsp;
                                            Country &nbsp;<input type="radio" value="Country" id="country" name="s1" onClick="Search(this.value)">
                                            &nbsp;&nbsp;&nbsp;
                                            Region &nbsp;<input type="radio" value="Region" id="region" name="s1" onClick="Search(this.value)">
                                            </p><br />
                                            <input type="hidden" name="stype"  id="stype"/>
                                            <p><input type="text" name="stext" id="stext" class="col-md-10" placeholder="Search City" onKeyUp="SearchData(this.value,document.getElementById('stype'))"></p>
                                        <p id="sdata"></p>
                                    <!-- DATA HERE -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- //container -->
                </div>
                <!-- //banner-bottom -->
           <?php
            }
            else
            {
                echo '<script>alert("Please Login!");</script>';
                include("login-form.php");
            }
           ?>
            
            <div class="clear"></div>
            
            <div id="footer">
                <?php
                include("footer.php");
                ?>
            </div>
    </div>

    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
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
    <style type="text/css">
        /*#stext
        {
            display:none;
        }*/
    </style>     
</body>
</html>
