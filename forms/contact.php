<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  /* Comment out the original code using Ajax 
  $receiving_email_address = 'salirazakazmi@yahoo.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
*/
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
/*
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
*/

/* This is custom code for email */

/*
if($_POST['capt'] <> $_POST['textcapt']) {
  die('Invalid Captcha');
}
*/

        // Checking Captcha validation, we use google recaptcha v2 valid for 3csol domain and local host

        //$secretKey = "6LfaDxQaAAAAAH_IhM97YP0y1qYt19VgIRIyjWLW";
        $secretKey = "6LdGdxQaAAAAAOJHV7BFyGxcyuu4ANI2ReLOHNZJ";
        $responseKey = $_POST['g-recaptcha-response'];
        $user_IP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$user_IP";

        $response = file_get_contents($url);
       
        $response = json_decode($response);

        

        if(!$response->success){
          die('Invalid Captcha');
        }

        // Email the data
         $to = "salirazakazmi@gmail.com";
         $subject = $_POST['subject'];
         
         $message = "Message: ".$_POST['message'] ."\r\n";
         $message .= "Sender name: ".$_POST['name'] ."\r\n";
         $message .= "Sender Email: ".$_POST['email'] ."\r\n";
         
        
         $header = "From: salirazakazmi@gmail.com" ;
       
         
         $retval = mail ($to,$subject,$message,$header);
         
         

         if( $retval == true ) {
          die( 'Thank you for contact us!');
         }else {
          die( 'Sorry this email is not sended');
         }

  
?>
