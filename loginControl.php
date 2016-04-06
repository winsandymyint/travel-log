<?php
session_start();
include("db.php");
if(isset($_POST["email"])  && isset($_POST["pwd"]))
{
	
		if(!isset($_SESSION["attempts"]))
		{
			$_SESSION["attempts"]=0;
		}
		if($_SESSION["attempts"] <3)
		{
				$email=$_POST["email"];
				$pwd=$_POST["pwd"];
				
				$str="SELECT Userid FROM usertb WHERE Email='$email' and  Password='$pwd'";
				//echo $str;
				$res=mysql_query($str,$con);
				$n_row=mysql_num_rows($res);
				//echo $n_row;
				if($n_row >0)
				{
					$row=mysql_fetch_array($res);
					$_SESSION["userid"]=$row["Userid"];	
				   echo '<script>alert("Login Success!");window.location.href="search.php";</script>';
					
				}
				else
				{
					$_SESSION["attempts"]= $_SESSION["attempts"]+1;
					echo '<script>alert("You failed  to  logged in!");window.location.href="index.php";</script>';
				}
		}
		else
			{
				session_destroy();
				echo '<script>alert("You\'ve failed too many times.Please SignUp!");window.location.href="register.php";</script>';
				
				
			}
}
?>