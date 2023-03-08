<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";


$new_pass=$_POST['apass'];
$email1=$_POST['reset-mail'];
$password=array(
    'password'=>"$new_pass"
);

include 'conection_share1.php';
$obj_reset_password=new Database();
// array_keys($email,'email');
// array_values($_POST['reset-mail']);

// $email=$_POST['reset-mail'];
$con="email='$email1'";
echo "<pre>";
print_r($password);
// echo $email;
echo "</pre>";
echo $con;
$obj_reset_password->update('user_db',$password,$con);
include 'send_mail_reset_password.php';
// echo "UPDATE user_db SET password ='$new_pass' WHERE email='$email'";
// header('Location: http://localhost/php_for_work/full_website_by_suvo/'.'full_website - Copy.php?email='.$email1.'&id=2');
?>
