<?php 

    echo "hello world...!";
    $to = "19pa1a05i3@vishnu.edu.in";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         mail("19pa1a05i3@vishnu.edu.in","My subject","19pa1a05i3@vishnu.edu.in");
         /*
         $retval = mail($to,$subject,$message);
         /*
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }*/
?>