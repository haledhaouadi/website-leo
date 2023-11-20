<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
 
  if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    
    $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'leoclub899@gmail.com';
      $mail->Password = 'izvzxigkbonxbphw';
      $mail->SMTPSecure = 'tls';
      $mail->Port = '587';
     
      $mail->setFrom($email);
      $mail->addAddress('leoclub899@gmail.com');
      

      $mail->isHTML(true);
      $mail->Subject = 'Message Received (Contact Page)';
      $mail->Body = " <h3>Name: $name <br> Email: $email <br> Phone: $tel <br> Message: $message</h3>";

      $mail->send();
       
      echo " <script> alert('Message Send ! Thank you for contacting us.');document.location.href = 'contactus.html';</script>";
      
      
  }
?>