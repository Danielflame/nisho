<?php 
/*
 * THE MAILING HANDLER 
 * WRITTEN BY OMONZEJELE PRECIOUS
 * SIGNATURE : PREYOUS
 * TWITTER : @preciousomonze
 * COPYRIGHT
 * 2015.
 * Updated august 2016. version 1.1
 */
 $site_title = "Nisho Ventures";
 $site_url = "nishoventures.com.ng";
//GET NECESSARY VARIABLES
$submit_button = $_POST["submit"];
if(isset($submit_button)){
    //STORE NECCESSARY VARIABLES AND SECURE
    $name = htmlentities(trim($_POST["name"]));
    $email = htmlentities(trim($_POST["email"]));
	$m_phone = htmlentities(trim($_POST["phone"]));
    $message = htmlentities(trim($_POST["message"]));
    if(!empty($name) && !empty($email) && !empty($message)){
        //ALL DONE, SEND TO MAIL
       //SET STUFFS
        $to = "care@".$site_url;
        $from = "$email";
        $subject = $site_title." Feedback From: ".$email;
		 //ALL DONE, SEND TO MAIL
       //SET STUFFS
	   		//$pattern = "/[^a-zA-z]$/";
			
			//$pattern = "/[^_\-\(\)0-9]/i";
			
			$pattern ="/[^a-zA-Z\- ]$/";
	   //CHECK IF THE USER PROVIDED PHONE NMUBER 
		if(preg_match($pattern,$m_phone)){
		$phone = $m_phone;
		}
		
		else{
		$phone = $name." didn't provide a Phone Number";
		}
     
	 //main stuff
        $msg ="E-MAIL SENT FROM ".$site_title."\n".
                "Sender's Name: ".$name."\n"
                . "Sender's E-mail: ".$email."\n"
				. "Sender's PHONE NUMBER: ".$phone."\n"
                . "Message : \n".$message."\n\n";
        
        $mail_headers = "Reply-To: ".$email;  
        
        
//SEND TO THE MAIL
       mail($to,$subject,$msg,$mail_headers);

//all set display confirmation to user
echo "<script type=\"text/javascript\">alert(\"Thank you ".$name.", Your message has been sent. Any response will "
        . "be sent to the E-mail Address you provided: ".$email.". Thank You.\");</script>";
    }
    
    elseif(empty($name)){
//header("location:".$_SERVER["PHP_SELF"]."#contact");//REDRECT TO THE PAGE AT THECONTACT US SIDE ;)
    echo "<script type=\"text/javascript\">alert(\"Fill in your Name\");</script>";
        
    }
    
    elseif(empty($email)){
   // header("location:".$_SERVER["PHP_SELF"]."#contact");//SAME STUFF
    echo "<script type=\"text/javascript\">alert(\"Fill in your E-mail Address\");</script>";
        
    }
    
    elseif(empty($message)){//
      //  header("location:".$_SERVER["PHP_SELF"]."#contact");//SAME STUFF
    echo "<script type=\"text/javascript\">alert(\"Write a Message\");</script>";
    
    }
    
    else{
  //      header("location:".$_SERVER["PHP_SELF"]."#contact");//SAME STUFF
    echo "<script type=\"text/javascript\">alert(\"Sorry, an error occurred. Make sure you Filled all the details\");</script>";
        
    }
}
else{
    //DO NOTHING
}
?>