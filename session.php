<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
    <style>
        .fff{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<div class="modal fade" id="login-model"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content modal-content-login pl-4 pr-4">
                    <div class="modal-header pt-4 ">
                        <h2 class="login-model text-start text-info" id="exampleModalLabel">Login</h2>
                        <button class="close btn btn-outline-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-danger">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-body-login">
                        <form action="" method="POST">
                            <div class="form-group fff  mt-4">

                                <input type="text"  name="email" class="form form-control w-75 border border-info"  id="exampleInputEmail1 "
                                    aria-describedby="emailHelp" placeholder="Enter Your Mail" required>

                            </div>
                            <div class="form-group fff  mb-0 pt-3">

                                <input type="password" name="password" class="form form-control border  border-info w-75 " id="exampleInputPassword1"
                                    placeholder="Enter Your Password" required>
                            </div>
                            <div class="form-group right mx-5 px-2 mt-0">
                                <a href="" class="text-primary">Forgot Password?</a>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-info text-light button w-100" name='login'>Login</button>
                            </div>

                        </form>
                          <p class="mt-3 text-danger">Don't Have An Account? <a href="" class="fw-bolder" data-toggle="modal" data-target="#login-model">Signup</a></p>
                    </div>

                </div>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#login-model').modal('show');
    });
</script>
<?php
if(isset($_POST['login'])){
    array_pop($_POST);
     print_r($_POST);
     $arr=array();
     foreach($_POST as $key=>$value){
         $arr[]="$key='$value'";
     }
     print_r($arr);
     $condition=implode(" AND ",$arr);
     include 'conection_share1.php';
     $obj=new Database();
     $what=$obj->login('user_db',$condition);
     if(!$what){
         echo '<script> alert("wrong mail password") </script>';
         echo $condition;
     }else{
         echo '<script> alert("login sucessfully ") </script>';
         // echo "<br>";
         // print_r($what);
         session_start();
         $_SESSION['name']=$what[0]['username'];
         if(! headers_sent()){
            header('Location: http://localhost/php_for_work/full_website_by_suvo/'.'home.php');
         }
         
     }

     
 }
?>
</html>



 