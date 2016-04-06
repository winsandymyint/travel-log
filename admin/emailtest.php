<?php
    $subject=$_POST["subject"];
	$body=$_POST["body"];
	
    require "./phpmail/PHPMailerAutoload.php";
	
	 include("../db.php");
   $str="SELECT Username,Email FROM `usertb` WHERE IsNewsLetter=1";
   $res=mysql_query($str,$con);
   while($row=mysql_fetch_array($res))
   {
    
    //function mail_Sent($cname, $cemail, $cphone, $caddress, $oid, $odate, $cusymbol, $curate, $orderconfirm) {
		$cname=$row["Username"];
		$cemail=$row["Email"];	
		/*$cphone='09898989';*/	
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mccdyw@gmail.com";              // Real gmail account name
        $mail->Password = "mccdyw_123";                        // Real password for above gmail account
        $mail->Port = 587;

        $mail->setFrom($row["Email"],$row["Username"]);     // From email with name (Name is optional)
        $mail->addAddress($cemail, $cname);             // To valid email of Susan with name (Name is optional)

        $mail->isHTML(true);

        $mail->Subject = "$subject";
        $bodytext = "Name : $cname<br>"
                       . "$body<br>";
        
        $mail->Body = $bodytext;

	}
        if(!$mail->send()) {
            $err = $mail->ErrorInfo;
            echo $err;
        }
		
        else {
            echo '<script>alert("Mail success");window.history.go(-1);</script>';
        }
    
?>    
   
        
