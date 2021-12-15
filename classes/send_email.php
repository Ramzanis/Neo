<?php
//send_mail.php

if(isset($_POST['email_data']))
{
 require 'inc\PHPMailerAutoload.php';
 $output = '';
 foreach($_POST['email_data'] as $row)
 {
  include 'inc\mailauth.php';
  $mail->AddAddress($row["email"], $row["fornavn"]); //Adds a "To" address
  $mail->WordWrap = 50; //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);  //Sets message type to HTML
  $mail->AddEmbeddedImage('C:\xampp\htdocs\test\images\icon.png', 'icon');
  $mail->Subject = $row['subject']; //Sets the subject of the message
  //An HTML or plain text message body
  $mail->Body = $row['content'] . 
  '<img src="cid:icon" width="70px" height="70px" align="center">
  <footer>
  <p>Neo ungdomssklubb @ 2021</p>
  <p><a href="https://www.youtube.com/watch?v=aq8Dl1g7rYk">Ressurs</a></p>
  </footer>
  '; //An HTML or plain text message body
  
  $result = $mail->Send(); //Send an Email. Return true on success or false on error

  if($result["code"] == '400')
  {
   $output .= html_entity_decode($result['full_error']);
  }

 }
 if($output == '')
 {
  echo 'ok';
 }
 else
 {
  echo $output;
 }
}

?>