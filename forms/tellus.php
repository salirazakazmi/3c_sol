<html >
<head> ------ </head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

        
        // Checking Captcha validation, we use google recaptcha v2 valid for 3csol domain and local host

        // $secretKey = "6LfaDxQaAAAAAH_IhM97YP0y1qYt19VgIRIyjWLW";
        // //$secretKey = "6LdGdxQaAAAAAOJHV7BFyGxcyuu4ANI2ReLOHNZJ";
        // $responseKey = $_POST['g-recaptcha-response'];
        // $user_IP = $_SERVER['REMOTE_ADDR'];
        // $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$user_IP";

        // $response = file_get_contents($url);
       
        // $response = json_decode($response);

        // if(!$response->success){
        //   die('Invalid Captcha');
        // }


        // Email the data
        sleep(7);
         $to = "salirazakazmi@gmail.com";
         $subject = "Tell us about your problem";
         
         $message = "Pick a name for your Project: ".$_POST['pname'] ."\r\n";
         $message .= "Tell us a bit more: ".$_POST['pdetail'] ."\r\n";
         $message .= "What skills are required: ".$_POST['pskills'] ."\r\n";
         $message .= "How would you like to get it done: ".$_POST['pgetdone'] ."\r\n";
         $message .= "How would you like it billed: ".$_POST['pbilloption'] ."\r\n";
         $message .= "What is your estimated budget: ".$_POST['pcurrency'] ."\r\n";
         $message .= "What is your estimated budget: ".$_POST['pbudget'] ."\r\n";
         $message .= "Your Name: ".$_POST['pyourname'] ."\r\n";
         $message .= "Your Company: ".$_POST['pyourcom'] ."\r\n";
         $message .= "Email: ".$_POST['pyouremail'] ."\r\n";
         $message .= "Contact: ".$_POST['pyourcontact'] ."\r\n";
         
        
         $header = "From: salirazakazmi@gmail.com" ;
       
         
         $retval = mail ($to,$subject,$message,$header);
        
         
        echo "<script>location.href='../index.html';</script>";

        // if( $retval == true ) {
        //   // die( 'Thank you for contact us!');
        
        // //echo "<Script> swal('Thank you', 'for submitted query', succes);  </Script>"
        
        //  }
        //  else {
        //   // die( 'Sorry this email is not sended');
        //  }
         
        //  //echo "<script>location.href='../index.html';</script>";
  
?>
</html >