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
        <!-- banner-bottom -->
        <div class="banner-bottom">
            <!-- container -->
            <div class="container">
                <div class="faqs-top-grids">
                    <div class="book-grids">
                        <div class="col-md-6 book-left">
                            <div class="book-left-info">
                                <h3>Create Your Account</h3>
                            </div>
                            <div class="book-left-form">
                                <form method="post" action="reg_db.php">
                                    <p>Username</p>
                                    <input type="text" name="uname" id="uname" required  onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Password</p>
                                    <input type="password" name="pwd" id="pwd" required pattern="[a-z\d]{8}" >
                                    <p>Confirm Password</p>
                                    <input type="password" name="cpwd" id="cpwd" required onBlur="CheckPwd(this.value)" pattern="[a-z\d]{8}">
                                    <p id="error"></p>
                                    <p>Full Name</p>
                                    <input type="text" name="fullname" id="fullname" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Phone Number</p>
                                    <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Gender</p>
                                    <span class="col-md-2"><input type="radio" name="gender" value="Male" id="m"/><p for="m" class="font">Male</p></span>
                                    <span class="col-md-3"><input type="radio" name="gender" value="Male" id="f"/><p for="f" class="font">Female</p></span>
                                    <div class="clearfix"> </div>
                                    <p>Email Address</p>
                                    <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p>Country</p>
                                    <input type="text" name="country" id="country" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                                    <p for="date" class="lbl">Date of Birth</p>
                                    <input type="date" name="date" id="date" class="col-md-12"/>
                                    <div class="clearfix"> </div><br />
                                    <p>IsNewsLetter</p>
                                    <span class="col-md-2"><input type="radio" name="letter" value="1" id="y"/><p for="y" class="font">Yes</p></span>
                                    <span class="col-md-3"><input type="radio" name="letter" value="0"  id="n"/><p for="n" class="font">No</p></span>
                                    <div class="clearfix"> </div>
                                    <input type="submit" id="Register" value="Register">
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //banner-bottom -->
                    
        <div id="footer">
            <?php
            include("footer.php");
            ?>
        </div>

    </div>
</body>
<?php
if(isset($_GET["errorno"]))
{
	$error=$_GET["errorno"];
	
    echo "WHAT THE HELL Is IT!";
    echo $error;
	if($error==1)
	{
		echo '<script>alert("Success !");window.location.href="index.php";</script>';
	}
	if($error==2)
	{
		echo '<script>alert("Fail !");</script>';
	}
	
}
?>
</html>