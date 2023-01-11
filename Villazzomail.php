<?php

//contact us email start

    $to = "lisa.blake@villazzo.com, Ouissam.Mouri@villazzo.com";
    $subject = "Contact Us form";
    $header = "From:villazzorealty@villazzo.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    //$post_data = file_get_contents('php://input', true);
    $htmlContent = "<html>
        <head> 
            <title>Villazo Email</title> 
            <style>
                .email_wrapper {width:80%;max-width:500px;border:4px solid #f8de7f;}
                .email_head {padding:15px;text-align:center;border-bottom:4px solid #f8de7f;}
                .email_head img {width:150px;}
                .details {padding:15px 30px;text-align:left;}
                .details p {margin:0px 0px 5px;font-size:14px;color:#000;}
                .details p:last-child {margin:0px;}
            </style>
        </head>
        <body>
            <div class='email_wrapper'>
                <div class='email_head'>
                    <a href='https://villazzorealty.com/' target='_blank'>
                        <img src='https://webdevfolio.com/Villazzomail/villazzo-logo.png' alt='Logo'>
                    </a>
                </div>
                <div class='details'>
                    <p>Name: ".$_POST['firstName']." "." ".$_POST['lastName']."</p>
                    <p>Email: ".$_POST['email']."</p>
                    <p>Phone No: ".$_POST['phoneNo']."</p>
                    <p>Message: ".$_POST['message']."</div>
            </div>
        </body></html>";
    $contact_mail = mail($to,$subject,$htmlContent,$header);
    
     if( $contact_mail == true ) {
         
        echo "Contact Us mail sent successfully...";
      
        //Thank you us email start
            
            $to1 = $_POST['email'];
            $subject1 = "Thank You mail";
            $header1 = "From:villazzorealty@villazzo.com \r\n";
            $header1 .= "MIME-Version: 1.0\r\n";
            $header1 .= "Content-type: text/html\r\n";
            
             $htmlContent1 = "<html>
        <head> 
            <title>Villazo Email Thank you for contact with us!</title> 
            <style>
                .email_wrapper {width:80%;max-width:500px;border:4px solid #f8de7f;}
                .email_head {padding:15px;text-align:center;border-bottom:4px solid #f8de7f;}
                .email_head img {width:150px;}
                .details {padding:30px;}
                .details h3 {margin:0px;font-size:18px;color:#000;text-align:center;}
            </style>
        </head>
        <body>
            <div class='email_wrapper'>
                <div class='email_head'>
                    <a href='https://villazzorealty.com/' target='_blank'>
                        <img src='https://webdevfolio.com/Villazzomail/villazzo-logo.png' alt='Logo'>
                    </a>
                </div>
                <div class='details'>
                    <h3>Thank you for contacting us!</h3>    
                </div>
        </body></html>";
            
            // $message1 = "Thank you for contact with us! ";
            $value = mail($to1,$subject1,$htmlContent1,$header1);   
            
           //Thank you us email End
           
            exit();
            
     }else {
         
            echo "Contact Us mail could not be sent...";
            
            exit();
     }
     
//contact us email End
 

 
?>
 

