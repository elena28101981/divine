<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$to_email = 'jelena28101981@gmail.com'; 

if(isset($_POST["send"])) {
   $mail = new PHPMailer(true);

   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'jelena28101981@gmail.com';
   $mail->Password = 'sxkuegikxqvaaeix';
   $mail->SMTPSecure = 'ssl';
   $mail->Port = 465;




   // $mail->setFrom('jelena28101981@gmail.com');
   // $mail->setFrom($_POST["email"], $_POST["name"]);
   $mail->setFrom($_POST["email"], $_POST["email"]);


   $mail->addAddress($to_email);

   $mail->isHTML(true);

   $mail->Subject = $_POST["subject"];

   $mail->Body = $_POST["message"];

   $mail->send();

   echo 
   "
   <script>
    alert('Sent Successfully');
    document.location.href = 'index.php';
   </script>
   ";


}

?>
