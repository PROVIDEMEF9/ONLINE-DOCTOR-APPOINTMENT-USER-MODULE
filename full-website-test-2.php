<?php
$msg="";
$ch=0;
$wmail="";
$x=$_GET;
$relogin=$_GET;
if(isset($_POST['login'])){
        
       array_pop($_POST);
       // print_r($_POST);
        $arr=array();
        foreach($_POST as $key=>$value){
            $arr[]="$key='$value'";
        }
        //print_r($arr);
        $condition=implode(" AND ",$arr);
        include 'conection_share1.php';
        $obj=new Database();
        $what=$obj->login('user_db',$condition);
        if(!$what){
            // echo '<script> alert("wrong mail password") </script>';
            // echo '<script> 
            // $(document).ready(function(){

            //     $("#login-model").modal("show");
            // });
            // </script>';
            $msg='
            <div class="fff mb-0">
                            <div class="alert alert-danger d-flex align-items-center w-75" role="alert">
                                <div>
                                    incorrect email or password !
                                </div>
                            </div>
            </div>
            ';
            $ch=1;
        // $emsg='';
            // echo $condition;
        }else{
            echo '<script> alert("login sucessfully ") </script>';
            // echo "<br>";
            // print_r($what);
            session_start();
            $_SESSION['username']=$what[0]['username'];
            header('Location: http://localhost/php_for_work/backend_login_signup/'.'home.php');
// echo "<script>window.location.href='home.php'</script>";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script> -->

    <!-- <link rel="stylesheet" href="bootstrap.css"> -->

    <!-- this is owl carasol link------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- this is owl carasol link------------------------------------------------------------------------- -->

   <!-- <link rel="stylesheet" href="login.css"> -->
<!-- <link rel="stylesheet" href="final_navbar_update_1.css"> -->
<!-- ------------------------------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="final_footer_update_1.css">
<link rel="stylesheet" href="search-bar.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="full_website.css">
<link rel="stylesheet" href="login-signup-resetpass.css">
<!-- ------------------------------------------------------------------------------------------------------------- -->
    <title>Document</title>
    <style>
        /* .active_update{
            background-color: transparent;
            text-decoration: underline;
            font-size: 25px;
           
        }
        .text-info{
            color: rgb(14, 75, 119) !important;
        }
        .blue_btn{
           background-color: rgb(14, 75, 119);
        }
        
ul li{
            margin-left: 18px;
            margin-right: 18px;
        }
        .bk_nav{
            display: flex;
        }
        .navbar-nav{
            margin-left: auto;
        }
        .margin-up{
            margin-top: -113px;
        }
        @media(max-width:992px){
            .margin-up{
            margin-top: 0px;
        }
        } */
    </style>
</head>
<body>
    <!------------ navigation bar --------starting---------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand bk_nav" href="#">
                <img src="unnamed.webp" alt="" width="60" height="48" class="d-inline-block align-text-top">
                <h3 class="text-info">TECH<span>care</span></h3>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active_update text-info" aria-current="page" href="#">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Regular checkup</a></li>
                  <li><a class="dropdown-item" href="#">Appoinment booking</a></li>
                  <li><a class="dropdown-item" href="#">Health issue</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary text-light"  data-toggle="modal" data-target="#login-model">Sign-up/login</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
   


      <div class="modal fade" id="login-model"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content modal-content-login pl-4 pr-4">
                    <div class="modal-header pt-4 ">
                        <h2 class="login-model text-start text-info px-4" id="exampleModalLabel">Login</h2>
                        <button type="button" class="close border border-light bg-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-danger" style="font-size: 25px;">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-body-login">

                            <?php echo $msg;?>
                           <?php  if(count($relogin)!=0){?>
                            <div class="fff mb-0">
                                <div class="alert alert-success d-flex align-items-center w-75" role="alert">
                                    <div>
                                        Please Relogin with new password !
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        <form action="" method="POST" id="login-satck">
                            <div class="form-group fff  mt-4">

                                <input type="text"  name="email" class="form form-control w-75 border border-info"  id="exampleInputEmail1 "
                                    aria-describedby="emailHelp" placeholder="Enter Your Mail" value="<?php if(isset($relogin['email'])){echo $relogin['email'];}?>" required>

                            </div>
                            <div class="form-group fff mt-3 mb-0 pt-3">

                                <input type="password" name="password" class="form form-control border  border-info w-75 " id="exampleInputPassword1"
                                    placeholder="Enter Your Password" required>
                            </div>
                            <div class="form-group right mx-5 px-2 mt-0 ">
                                <a href="" class="text-primary" data-toggle="modal" data-target="#forget-password" id="but_forget">Forgot Password?</a>
                            </div>
                            <div class="d-grid gap-2 col-6 my-3 mx-auto">
                                <button type="submit" class="btn btn-info text-light button w-100" name='login'>Login</button>
                            </div>

                        </form>
                          <p class="mt-3 text-danger text-center">Don't Have An Account? <a href="" class="fw-bolder" data-toggle="modal" data-target="#sign_up">Signup</a></p>
                    </div>

                </div>
            </div>
        </div>

        <!--------------------- this modal is for sign-up -->
        <div class="modal fade" id="sign_up" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog login-h modal-lg " role="document">
                <div class="modal-content ">
                    <div class="container h-100 ">
                        <div class="row d-flex  align-items-center h-100">
                            <div class="card-margin col-lg-12 col-xl-11 ">
                                <div class="card carding text-black back" style="border-radius: 25px;">
                                <div class="card-header mb-0 bg-danger" style="border-radius: 40px;">
                                    <button type="button" class="close border border-light bg-light me-2" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="font-size: 25px;">&times;</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                        <div class="row  justify-content-center"> 
                                            <!-- --^--------justify-content-center -->
                                            <?php 
                                                if(count($x)==1){
                                            ?>
                                            <div class="fff mb-0 mt-0">
                                                    <div class="alert alert-danger d-flex align-items-center w-75 h-25 mb-0 mt-0" role="alert">
                                                        <div class=" mb-0 mt-0 px-5" >
                                                            This mail already exists !
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 transparent">

                                                <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4  text-info">Sign up</p>

                                                <form class="mx-1 mx-md-4 " action="sign_up_check.php" method='post' id='form'>

                                                    <div class="d-flex flex-row align-items-center mb-2">
                                                        <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label text-success" for="name">Your Name</label>
                                                            <input type="text" id="name" class="form-control" required name="name" placeholder="Enter your Name"/>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-2">
                                                        <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw"></i> -->
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label text-success" for="email">Your Email</label>
                                                            <input type="email" id="email" class="form-control" name="email" required placeholder="Enter your Email"/>
                                                            
                                                        </div>
                                                    </div>

                                                    <input type="text" id="username" class="form-control" name="username" hidden />

                                                    <div class="d-flex flex-row align-items-center mb-2">
                                                        <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                                                        
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label text-success" for="pass1">Password</label>
                                                            <input type="password" id="pass1" class="form-control " name="password1" required placeholder="Enter your Password"/>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-2">
                                                        <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label text-success" for="pass">Repeat your password</label>
                                                            <input type="password" id="pass" class="form-control" name="password" required placeholder="Retype your password"/>
                                                            <span class="text-danger" id='password_not_match'></span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center mx-4 mb-4 mb-lg-4">
                                                        <button type="submit" class="btn btn-success btn-lg" id="sign_in" name='sign_in'>sign-in</button>
                                                    </div>
                                                    <div class="d-flex justify-content-center mx-4 mb-0 mb-lg-4">
                                                        <p class="text-danger">Already Have An Account? <a href="" class="fw-bolder" data-toggle="modal" data-target="#sign_up">login Here</a></p>
                                                    </div>

                                                </form>
                                                
                                            </div>
                                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2" >

                                                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> -->
                                                <img src="image.jpg" class="img-fluid" alt="Sample image" style="height:70vh;width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<!-- this is for forgrt password -->
<div class="modal fade" id="forget-password" data-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="staticBackdropLabel">Reset Password</h5>
          <button type="button" class="btn-close"  data-toggle="modal" data-target="#forget-password" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="forgot_password.php" id="forget-password-form" method="POST">
            
            <div class="phone-verification center-column" id="phone-verification">
                    <p class="text-danger pl-5">Enter your 10 digit phone number with country code. example: +91874*****10</p>
                    <input class="mt-2 mb-2 form-control w-75" required type="email" name="reset-mail" id="reset-mail" placeholder="Enter this mail id">
                    <input class="mt-2 mb-2 form-control w-75" required type="text" name="phno" id="phno" placeholder="+918712345601">
                    <div class="m-3" id="recaptcha-container"></div>
                    <input class="mt-2 mb-2 form-control w-75" required type="text" name="otp" id="otp" placeholder="Enter OTP">
                    <input class="mt-2 mb-2 btn btn-danger" id="Verify-OTP" value="Verify OTP" name="Verify OTP" >
            </div>
                 
            <div class="change-password center-column none1" id="change-password">
                    <input class="mt-2 mb-2 form-control w-75" required type="password" name="apass" id="apass" placeholder="Enter New Password">
                    <input class="mt-2 mb-2 form-control w-75" required type="password" name="cpass" id="cpass" placeholder="Confirm Password">
                    <span class="text-danger" id='a-c-pass'></span>
                    <input class="mt-2 mb-2 btn btn-danger" type="submit" value="Reset" name="reset" >
            </div>
          
        </form>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div> -->
      </div>
    </div>
  </div>





    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand bk_nav" href="#">
                <img src="unnamed.webp" alt="" width="60" height="48" class="d-inline-block align-text-top">
                <h3 class="text-info">TECH<span>care</span></h3>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active_update text-info" aria-current="page" href="#">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Regular checkup</a></li>
                  <li><a class="dropdown-item" href="#">Appoinment booking</a></li>
                  <li><a class="dropdown-item" href="#">Health issue</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary text-light" href="abc.html" target="_blank">Sign-up/login</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav> -->
   
    <!------------ navigation bar --------ending---------------->

<!------------ banner section --------starting---------------->
    <section >

        <div class="bd-example container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="banner_1_final.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="piron-guillaume-U4FyCp3-KzY-unsplash.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          
        </div>

    </section>
      <!------------ banner section --------ending---------------->
     
      <!------------ search section --------starting---------------->
    <section class="search-sec  container">
        <div class="container">
            <form action="#" method="post" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Enter Pin Code...">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Enter Location\city...">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <select class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option>--Select Specialist--</option>
                                    <option>Neurology</option>
                                    <option>Gastrology</option>
                                    <option>Cardilogy</option>
                                    <option>Dermetology</option>
                                    <option>General Physician</option>
                                    <option>Dentist</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="button" class="btn btn-danger wrn-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!------------ search section --------ending---------------->

    <div class="container ">

        <!------------ section--2 --------starting---------------->
        <div class="row flex   margin-up bg-light">
            <h2 class="flex mt-3">A MODERN, FULL SERVICE WEBSITE</h2>
            <P class="w-75 flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed nostrum assumenda voluptatibus, fugit magni. Dolorem deleniti adipisci laborum repellendus quidem ipsum cum tempore impedit sit similique repudiandae quas sint, pariatur odit modi! Excepturi magni voluptatem cupiditate quos numquam vel ducimus quam, optio reiciendis harum deleniti iusto quasi alias soluta labore dolor voluptates perspiciatis quae. Optio deserunt vitae fugit. Fuga.</P>
            <div class="col-sm-12 section-2 mt-3 flex-justify-spbt">
    
                <!-- <div class="some">123</div> -->
                <div class="p-2  flex-justify-spbt w-100">
                    <div class="card p-sm-3 ">
                        <div class="card card_r mt-sm-2" style="width: 15rem; ">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on th</p>
                            </div>
                          </div>
                          <div class="card card_r mt-sm-2" style="width: 15rem;">
                            <div class="card-body">
                              <p class="card-text">Some quick example text to build on the </p>
                            </div>
                          </div>
                    </div>
                    <img src="banner_section_2.jpeg" alt="" class="img-fluid img1" style="max-width: 50%;max-height: 50%;border-radius:50% ;">
                </div>
            </div>
        </div>
         <!---------- section--2 --------ending------------------->

         <!------------ section--3 --------starting---------------->
        <div class="row slider_225 pt-2">
            <div class="col-12">
                <div class="row">
                    <div class="mx-auto col-7">
                        <h3 class="flex">Our Department</h3>
                        <h6 class="flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, voluptatum. Explicabo, animi sint consectetur harum ut similique saepe dolor tenetur!</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <div class="owl-carousel owl-theme  p-4 flex-justify-spbt logo_portion ">

                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="medicine (1).png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex  text-light">
                            Physical Care
                        </div>
                        
                    </div>
    
                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="brain (2).png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex text-light">
                            Neurology Care
                        </div>
                       
                    </div>
    
                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="heart-rate.png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex text-light">
                            Cardiology Care
                        </div>
                        
                    </div>
    
                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="stomach (1).png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex text-light">
                            Gastro Care
                        </div>
                        
                    </div>
    
                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="kidney.png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex text-light">
                            Urology Care
                        </div>
                        
                    </div>
    
                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="eye-care.png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex text-light">
                            Eye Care
                        </div>
                        
                    </div>
    
                    <div class="card bg-secondary item1">
                        <div class="card-header bg-light flex">
                            <img src="dentistry (1).png" class="card-img-top" alt="..." style="width:80px;height:80px;">
                        </div>
                        <div class="card-body flex text-light">
                            Dental Care
                        </div>
                        
                    </div>
    
    
                    
    
                
            </div>
            </div>
        </div>
        <!---------- section--3-------ending------------------->
       
        <!------------ section--4 --------starting---------------->
        <div class="row slider_156">
            <div class="col-12">
                <div class="row">
                    <div class="col-7 pt-3 mx-auto">
                        <h3 class="flex">WE CARE</h3>
                        <p class="flex">Here we provied following services.</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel care_portion owl-theme  p-4">

                    <div class="item card">
                        <img src="neurology-manu-hospital.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-light">Neurology</h5>
                          <p class="card-text text-light">
                            Neurological care is the specialist care that affects their brain or nervous system. 
                            It focuses on health, wellbeing and supporting people to live their lives as fully as possible.
                        </p>
                          <a href="#" class="btn btn-light">Read more...</a>
                        </div>
                    </div>
        
                    <div class="item card">
                        <img src="gastro2.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-light">Gastrology</h5>
                          <p class="card-text text-light">
                            Acid reflux can be described as a commonly occurring condition where the contents of the stomach 
                            food rise up from the stomach and flows back up into the oesophagus.
                          </p>
                          <a href="#" class="btn btn-light">Read more...</a>
                        </div>
                    </div>
        
                    <div class="item card">
                        <img src="hearrt213.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-light">Heart Care</h5>
                          <p class="card-text text-light">
                            The term “heart disease” refers to several types of heart conditions.(CAD) is most common, 
                            which affects the blood flow to the heart. Decreased blood flow can cause a heart attack.

                          </p>
                          <a href="#" class="btn btn-light">Read more...</a>
                        </div>
                    </div>
        
                    <div class="item card">
                        <img src="Exercises-for-Proper-Eye-Care-750x390.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-light">Eye Care</h5>
                          <p class="card-text text-light">
                            Your eyesight is one of your most important senses: 80% of what we perceive comes through our sense of sight.
                            By protecting your eyes, you will reduce vision loss .
                          </p>
                          <a href="#" class="btn btn-light">Read more...</a>
                        </div>
                    </div>
        
                    <div class="item card">
                            <img src="dentist123.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title text-light">Dental Care</h5>
                              <p class="card-text text-light">Healthy teeth  make it easy for you to eat well and enjoy good food.
                                Several problems can 
                                affect the health of your mouth, but good care should keep your teeth and gums strong as you age.</p>
                              <a href="#" class="btn btn-light">Read more...</a>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!---------- section--4--------ending------------------->

         <!------------ section--5 --------starting---------------->
        <div class="row  review-section p-sm-4 bg-light">
            <div class="row">
                <!-- <div class="col-3 bg-success">
                    <h5>User Feedback</h5>
                </div>
                <div class="col-5 bg-danger"></div>
                <div class="col-4 bg-warning"></div> -->
                <div class="col-sm-12 flex-justify-spbt ">
                    <h3>User Feedback</h3>
                    <input type="text" name="" id="" class="search12" placeholder="Search by Specialist..">
                </div>
            </div>

            <div class="row user_feedback_section mt-3 pt-5 pb-3">
                <!-- patient -1 -->
                <div class="col-sm-12 card card1">
                    <div class="row">
                        <div class="col-2  flex-end">
                            <img src="report-1.jpg" alt="" class="pp">
                        </div>
                        <div class="col-6 p-2 flex-column">
                            <h5>Sudip Kar</h5>
                            <h6>From Kolkata,India</h6>
                            <h5>Great doctor with good clinical skills.</h5>
                        </div>
                        <div class="col-4  last p-3">
                           
                                <div class="flex-end mx-3">
                                    <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                </div>
                                <div class="mt-3 flex-end">
                                <button class="btn btn-doc btn-primary ">Gastrology</button>
                                <button class="btn btn-doc btn-outline-primary mx-3 text-dark">Dr.T.D.Pal</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
    
                <!-- patient -2 -->
                <div class="col-12 card mt-3">
                    <div class="row">
                        <div class="col-2  flex-end">
                            <img src="report-2.jpg" alt=""  class="pp">
                        </div>
                        <div class="col-6  p-2 flex-column">
                            <h5>Susmita Das</h5>
                            <h6>From Ranaghat,kolkata</h6>
                            <h5>Very good doctor.</h5>
                        </div>
                        <div class="col-4  p-3">
                           
                                <div class="flex-end mx-3">
                                    <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                </div>
                                <div class="mt-3 flex-end">
                                <button class="btn btn-doc btn-primary ">Cardiology</button>
                                <button class="btn btn-doc btn-outline-primary mx-3 text-dark">Dr.S..DAS</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
    
                <!-- patient -3 -->
                <div class="col-12 card mt-3">
                    <div class="row">
                        <div class="col-2    flex-end">
                            <img src="report-3.jpg" alt="" class="pp">
                        </div>
                        <div class="col-6  p-2 flex-column">
                            <h5>Paramita Das</h5>
                            <h6>From Ranaghat,kolkata</h6>
                            <h5>Very good doctor.</h5>
                        </div>
                        <div class="col-4   p-3">
                           
                                <div class="flex-end mx-3">
                                    <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                </div>
                                <div class="mt-3 flex-end">
                                <button class="btn btn-doc btn-primary ">Neurology</button>
                                <button class="btn btn-doc btn-outline-primary mx-3 text-dark">Dr.S.N.PAL</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
                
                <!-- patient -4 -->
                <div class="col-12 card mt-3">
                    <div class="row">
                        <div class="col-2  flex-end">
                            <img src="review-4.png" alt="" class="pp">
                        </div>
                        <div class="col-6  p-2 flex-column">
                            <h5 >Susmita Das</h5>
                            <h6>From Ranaghat,kolkata</h6>
                            <h5>Very good doctor.</h5>
                        </div>
                        <div class="col-4  p-3">
                           
                                <div class="flex-end mx-3">
                                    <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                <i class="fa-solid fa-star" style="color: rgb(207, 160, 21);"></i>
                                </div>
                                <div class="mt-3 flex-end">
                                <button class="btn btn-doc btn-primary ">Gastrology</button>
                                <button class="btn btn-doc btn-outline-primary mx-3 text-dark">Dr.T.D.Pal</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!---------- section--5 --------ending------------------->

       
    </div>
      <!------------ footer section --------starting---------------->
      <div class="container-fluide bg-light p-3">
        <div class="row footer p-5">
            <div class="column">
                <h2 class="blue">TECH care</h2>
                <p class="blue"> <img src="unnamed.webp" alt="" style="width:60px;height: 48px;margin-right: 10px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium assumenda delectus porro molestiae rem illo similique reprehenderit, exercitationem recusandae </p>

            </div>
            <div class="column  link-12">
                <h4 class="blue fifty">QUICK LINKS</h4>
                <div class="line-34"></div>
                <table class="table mt-2 table-borderless">
                    <tbody>
                     <tr>
                         <td><a href="">home</a> </td>
                     </tr>
                     <tr>
                         <td><a href="">about us</a></td>
                     </tr>
                     <tr>
                         <td><a href="">coantact us</a></td>

                     </tr>
                     <tr>
                         <td><a href="">faq</a></td>
                     </tr>
                    </tbody>
                 </table>
            </div>
            <div class="column ">
                <h4 class="blue two-five">SERVICES</h4>
                <div class="line-34"></div>
                <table class="table mt-2 table-borderless">
                   <tbody>
                    <tr>
                        <td><a href="">Gen.physician</a> </td>
                        <td><a href="">neurologist</a> </td>
                    </tr>
                    <tr>
                        <td><a href="">cardiology</a></td>
                        <td><a href="">dermetology</a></td>
                    </tr>
                    <tr>
                        <td><a href="">gastrology</a></td>
                        <td><a href="">dentist</a></td>
                    </tr>
                    <tr>
                        <td><a href="">cardiology</a></td>
                        <td><a href="">orthopedics</a></td>
                    </tr>
                   </tbody>
                </table>
            </div>
            <div class="column">
                <div class="row">
                    <h4 class="blue">CONTACT WITH US</h4>
                    <div class="line-34"></div>
                    <div class="col-12 mt-2">
                    <h6><i class="fa-solid fa-phone" style="color:white ;"></i> <a href="">+916291886603</a></h6>
                    <h6><i class="fa-regular fa-envelope" style="color:white ;"></i><a href=""> info.techcare@gmail.com</a> </h6>
                    <h6><i class="fa-solid fa-location-dot" style="color:white ;"></i><a href=""> 33 B.N Road Near Khadina Moar, Pin- 784523.</a></h6>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="row ">
                          <div class="col-12">
                            <h4 class="blue">Find us</h4>
                          </div>
                            <div class="col icons">
                            <a href="" ><i class="fa-brands fa-facebook" style="color:rgb(244, 244, 250) ;font-size: 25px;"></i></a>
                            <a href=""><i class="fa-brands fa-whatsapp" style="color:rgb(3, 225, 3) ; font-size: 25px;"></i></a>
                            <a href=""><i class="fa-brands fa-twitter" style="color:rgb(2, 173, 251) ; font-size: 25px;"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin" style="color:rgb(117, 200, 238) ; font-size: 25px;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row light-black py-3">
          <h4 class="text-center" "><img src="unnamed.webp" alt="" style="width:40px;height:40px;"></h4>
          <h6 class="text-center blue text-dark">© 2022 - 2023 TECHcare. All rights reserved.</h6>

          <h6 class="text-center blue text-dark"> TECHcare does not provide medical advice, diagnosis or treatment.</h6>
           
        </div>
    </div>
    <!------------ footer section --------ending---------------->
    
</body>
<script src="full_website_owl_carasol.js"></script>

<!-- <script src="search-dropdown.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
  
    $(document).ready(function(){
        // echo $ch
        <?php 
        if($ch==1){
        ?>
             $('#login-model').modal('show');
        <?php } ?>

        <?php  if(count($relogin)!=0){?>
            $('#login-model').modal('show');
        <?php } ?>


        <?php 
        if(count($x)==1){
        ?>
             $('#sign_up').modal('show');
        <?php } ?>

        $('#email').on('change',function(){
            let a=$(this).val().split('@gmail')
            $('#username').val(a[0]);
            
        });

        $('#form').on('submit',function(e){
            // console.log($('#pass').val());
            let check=$('#pass').val()==$('#pass1').val();
            // alert(check);
            // console.log($('#pass').val());
            if(!check){

                // alert('password didnot match');
                $('#password_not_match').html("<b>Password didn't match.</b>");
                e.preventDefault();
                // console.log($('#pass').val());
                // $("#pass1").addClass("is-invalid");
                
 
                
            }
            
            
        });
        //----------------------------------------------
        $('#but_forget').click(function(){
            $('#login-model').modal("hide");
        });
        
        // $('#sign-up-under').click(function(){
        //     $('#login-model').modal("hide");
        // });
        
        // $('#fclose').click(function(){
            
        //     $('#login-model').modal("show");
        //     $('#but_forget').modal("toggle");
        // });
    });
</script>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAuth, RecaptchaVerifier } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
    import { signInWithPhoneNumber } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
    //   import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDU90HPqGVYKojLxTCYf96ao-fFh3-90DI",
    authDomain: "otpver-1bee9.firebaseapp.com",
    databaseURL: "https://otpver-1bee9-default-rtdb.firebaseio.com",
    projectId: "otpver-1bee9",
    storageBucket: "otpver-1bee9.appspot.com",
    messagingSenderId: "359182612710",
    appId: "1:359182612710:web:69b2748e9a91095d1de327",
    measurementId: "G-4ECY9Z1YES"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
//   const analytics = getAnalytics(app);
  const auth = getAuth();
  render();
function render(){
    window.recaptchaVerifier = new RecaptchaVerifier('recaptcha-container', {}, auth);
    render.recaptchaVerifier;
}

$(document).ready(function(){
            $('#phno').on('change',function(){
                // alert($('#phno').val());
                const phoneNumber = $('#phno').val();
                const appVerifier = window.recaptchaVerifier;
                signInWithPhoneNumber(auth, phoneNumber, appVerifier)
                    .then((confirmationResult) => {
                    // SMS sent. Prompt user to type the code from the message, then sign the
                    // user in with confirmationResult.confirm(code).
                    window.confirmationResult = confirmationResult;
                    alert('sms sent sucess');
                    // ...
                    }).catch((error) => {
                    // Error; SMS not sent
                    // ...
                    alert('SMS not sent');
                    });

            });

            $('#Verify-OTP').click(function(){
                const code =$('#otp').val();
                confirmationResult.confirm(code).then((result) => {
                // User signed in successfully.
                const user = result.user;
               // $('#phone-verification').css('display','none');
               //$('#change-password').css('display','block');
               //$('#change-password').addClass('center-column');
 	       $('#phone-verification').addClass('none1');
               $('#change-password').removeClass('none1');
                alert('code matched');
                // ...
                }).catch((error) => {
                // User couldn't sign in (bad verification code?)
                // ...
              
                alert('wrong code');
                });
            });

 $('#forget-password-form').on('submit',function(k){
            // console.log($('#pass').val());
            let check5=$('#apass').val()==$('#cpass').val();
            // alert(check);
            // console.log($('#pass').val());
            if(!check5){

                // alert('password didnot match');
                $('#a-c-pass').html("<b>Password didn't match.</b>");
                k.preventDefault();
                // console.log($('#pass').val());
                // $("#pass1").addClass("is-invalid");
                
 
                
            }
            
            
        });

        });
</script>
<!-- <script>
    $(document).ready(function(){
        
        let a=$('.nav-link');
        
        for (let index = 0; index < a.length-1; index++) {
           
           const element=a[index];
           $(element).click(function(){
            for (let i = 0; i < a.length; i++) {
                $(a[i]).removeClass('active_update text-info');
            }
            $(this).addClass('active_update text-info');
           });
        }
    });
</script> -->

</html>

<!-- <button class="btn btn-primary booking">Book Now</button> -->
<!-- <button class="btn btn-primary">Book Now</button> -->
 <!-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
         
          <a class="navbar-brand" href="#">
            <a class="navbar-brand bk_nav" href="#">
                <img src="unnamed.webp" alt="" width="60" height="48" class="d-inline-block align-text-top">
                <h3>TECH<span>care</span></h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          </a>
          
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Regular checkup</a>
            <a class="dropdown-item" href="#">Appoinment booking</a>
            <a class="dropdown-item" href="#">Health issue</a>
        </div>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Contact Us</a>
              </li>
            </ul>
            <button class="btn btn-primary my-2  my-sm-0" data-toggle="modal" data-target="#exampleModalLong" type="button">Sign Up</button>
          </div>
        </div>
      </nav> -->

        <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="banner_1_final.jpg" class="d-block w-100 banner_img_suvo " alt="...">
                        <div class="carousel-caption d-none d-md-block mb-5">
                           

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="piron-guillaume-U4FyCp3-KzY-unsplash.jpg" class="banner_img_suvo img-fluid d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block mb-5">
                            

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div> -->