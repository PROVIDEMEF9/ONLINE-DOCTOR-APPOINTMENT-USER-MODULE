<?php
session_start();
if($_SESSION['username']){
    echo $_SESSION['username'];}
    // header('Location: http://localhost/php_for_work/backend_login_signup/'.'login.php');
// }else{
//     echo $_SESSION['name'];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hello suvo </h1>
    <a href="logout.php">log out</a>
</body>
</html>
