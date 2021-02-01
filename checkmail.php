<?php
    if(function_exists('mail')) {
        echo "PHP mail() function is enabled";
    }
    else {
        echo "PHP mail() function is not enabled";
    }


    $name = "ali";
    $email = "salirazakazmi@yahoo.com";
    $message = "test message from freehost";
    $from = 'From: salirazakazmi@yahoo.com'; 
    $to = 'salirazakazmi@yahoo.com'; 
    $subject = 'Test email';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";
    $headers .= 'From: salirazakazmi@yahoo.com' . "\r\n" .
    'Reply-To: reply@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $ret = mail($to, $subject, $message, $headers);
    echo "\n\r Email Return " .$ret;    
 ?>