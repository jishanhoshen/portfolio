<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
//  $receiving_email_address = 'sanjidan1993@gmail.com';
//
//  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//    include( $php_email_form );
//  } else {
//    die( 'Unable to load the "PHP Email Form" Library!');
//  }
//
//  $contact = new PHP_Email_Form;
//  $contact->ajax = true;
  
  $to_email = "From: sanjidan1993@gmail.com";
  $from_name = $_POST['name'];

  $subject = $_POST['subject'];

  $from_email = $_POST['email'];
  if (mail($to_email, $subject, $from_name, $from_email)){
    echo  "Email successfully sent to $to_email";
  }
  else{
    echo "Email sending failed";
  }
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
//
//  $contact->add_message( $_POST['name'], 'From');
//  $contact->add_message( $_POST['email'], 'Email');
//  $contact->add_message( $_POST['message'], 'Message', 10);
//
//  echo $contact->send();
?>
