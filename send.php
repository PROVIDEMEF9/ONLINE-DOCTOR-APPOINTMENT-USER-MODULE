<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// -------------------when they sign up---we take three fields-----------------
$name=$_POST['name'];                          // patients first name only  'subhnakar'
$email=$_POST['email'];        // patients email id   'nathsubhankar007@gmail.com'
$password=$_POST['password'];                           // patients password



$message="
Dear $name,<br><br>

Welcome to <span style='color:red;font-weight:bold;background-color:yellow;'>TECHcare,</span><br><br>

TECHcare allows patients to save their valuable time and book appointments online, 
view their medical history, and receive reminders after successfully 
booking an appoinment.<br><br> 

We are excited to have you on board and we hope that you will find our system useful and convenient.<br><br>

<span style='color:red;font-weight:bold;background-color:yellow;'>Here are some quick tips to get you started:</span><br><br>

- To book an appointment, simply log in to our website and select the date, time, and doctor that you would like to see.<br><br>

- Once you have selected a Doctor, you will be able to see the available timeslots and book your appointment.<br><br>

- If you need to cancel or reschedule your appointment, you can do simply cancel appoinment and you will get refund in your account within 5-7 days...<br><br>

We hope you enjoy using our system and we look forward to providing you with convenient, online doctor appointments!<br><br>

Sincerely,<br>

TECHcare<br><br>



<span style='color:blue'>username- $email</span><br>
<span style='color:blue'>password- $password</span><br>
<span style='color:red'>*do not share with others.</span><br>
";

$mail=new PHPMailer(true);

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='nathsubhankar003@gmail.com';       // my gmail
$mail->Password='iucarnhmtwsrfwfy';// my gmail app password
$mail->SMTPSecure='ssl';
$mail->Port=465;

$mail->setFrom('nathsubhankar003@gmail.com','TECHcare'); // my gmail

$mail->addAddress($email);    //user mail id
$mail->isHTML(true);

$mail->Subject='Successfully sign up';      // successfully sign-up in TECHcare

$mail->Body=$message;

$mail->send();
header('Location: http://localhost/backend/full_website_by_suvo/'.'full_website - Copy.php');
// echo "<script> 
// alert('sent successful'); 

// </script>";
// document.location.href='in.php';
// header('Location: http://localhost/php_for_work/2_sendmail/'.'in.php');


?>