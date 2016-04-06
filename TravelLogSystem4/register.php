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
               <div id="index_left_content" align="center" style="height:550px;">
               		<form method="post" action="reg_db.php">
                        <table> 
                            <tr>
                                <td><label for="uname" class="lbl">Username</label>  </td>
                                <td> <input type="text" name="uname" id="uname" class="form-control s1" required placeholder="Username"></td>
                            </tr>
                             <tr>
                                <td><label for="pwd" class="lbl">Password</label>  </td>
                                <td> <input type="password" name="pwd" id="pwd" class="form-control s1" required pattern="[a-z\d]{8}" placeholder="Password"></td>
                            </tr>
                             <tr>
                                <td><label for="cpwd" class="lbl">Confirm Password</label>  </td>
                                <td> <input type="password" name="cpwd" id="cpwd" class="form-control s1" required onBlur="CheckPwd(this.value)" pattern="[a-z\d]{8}" placeholder="Confirm Password"></td>
                            </tr>
                            <tr>
                            	<td colspan="2"><p id="error"></p></td>
                            </tr>
                            <tr>
                                <td><label for="fullname" class="lbl">Full Name</label></td>
                                <td> <input type="text" name="fullname" id="fullname" class="form-control s1" placeholder="Fullname"/></td>
                            </tr>
                             <tr>
                                <td><label  class="lbl">Gender</label></td>
                                <td> 
                                <input type="radio" name="gender" value="Male" id="m"/><label for="m" class="font">Male</label>
                                <input type="radio" name="gender" value="Male" id="f"/><label for="f" class="font">Female</label>
                                </td>
                            </tr>
                             <tr>
                                <td><label for="email" class="lbl">Email</label></td>
                                <td> <input type="email" name="email" id="email" class="form-control s1" onBlur="CheckEmail(this.value)" placeholder="Email"/></td>
                            </tr>
                            <tr>
                            	<td colspan="2"><p id="emailerror"></p></td>
                            </tr>
                            <tr>
                                <td><label for="country" class="lbl">Country</label></td>
                                <td> <input type="text" name="country" id="country" class="form-control s1" placeholder="Country"/></td>
                            </tr>
                             <tr>
                                <td><label for="date" class="lbl">Date of Birth</label></td>
                                <td> <input type="date" name="date" id="date1" class="form-control s1"/></td>
                            </tr>
                             <tr>
                                <td><label  class="lbl">NewsLetter</label></td>
                                <td> 
                                <input type="checkbox" name="letter" id="y"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <input type="submit" value="Register" class="btn"/>
                                <input type="reset" value="Cancel" class="btn"/>
                                </p></td>
                          
                            </tr>
                        </table>
    </form>
               </div>
            </div>
            <div id="index_right" style="height:871px;">           	
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
<?php
if(isset($_GET["errorno"]))
{
	$error=$_GET["errorno"];
	
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