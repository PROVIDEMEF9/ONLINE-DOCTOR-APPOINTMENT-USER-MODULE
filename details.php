<?php
session_start();
if(isset($_POST['continue'])){
    unset($_POST["otp"]);
    unset($_POST["g-recaptcha-response"]);
    array_pop($_POST);
    // print_r($_POST);
    $p_details=json_encode($_POST);
    setcookie('p-details',$p_details,time()+300,"/");
  // echo $_COOKIE['p-details']; // this is optional .  
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="sample_details.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="footer\all-page-footer.css">
    <title>show detail</title>
    <style>
 *{
            font-family: 'Titillium Web', sans-serif;
        }

        .blue_btn{
           background-color: rgb(14, 75, 119);
        }
 
        @media(max-width:992px){
            .margin-up{
            margin-top: 0px;
        } 
        }
        .login-dropdown-123{
      /* margin: 0px -51px; */
      margin-top: 0px;
      margin-left: -51px;
      
    }
        .flex-end-2222{
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
    .bk_nav{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .flex-for-login-page{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .flex-column-for-login-page{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    #navbar-list-4 ul li a:hover{
        background-color: transparent;
            color: rgb(14, 75, 119) !important;
            text-decoration: underline;
            font-size: 25px;
    }
    #navbar-list-4 ul li a:nth-child(0):not(:hover){
     color:black;
     font-size: 18px;
    }
    /* #navbar-list-4 ul li a:nth-child(3):not(:hover){
     color:black;
    } */
    .active_update{
            background-color: transparent;
            color: rgb(14, 75, 119) !important;
            text-decoration: underline;
            font-size: 25px;
        }
    @media(max-width:574px){
        .login-dropdown-123{
      /* margin: 0px -51px; */
      margin-top: 0px;
      /* margin-left: -51px; */
    }
    .flex-end-2222{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }
    </style>
</head>

<body>
<nav class="navbar navbar-dark bg-light  navbar-expand-sm">
    <a class="navbar-brand bk_nav px-4" href="#">
      <img src="unnamed.webp" alt="" width="60" height="48" class="d-inline-block align-text-top">
      <h3 class="text-info">TECH<span>care</span></h3>
  </a>
<button class="navbar-toggler bg-danger border border-light" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon text-dark"></span>
</button>
    <div class="collapse navbar-collapse  flex-end-2222 px-4" id="navbar-list-4">
              <ul class="navbar-nav  me-auto flex-end-2222  ">
                <li class="nav-item">
                  <a class="nav-link text-dark active_update" aria-current="page" href="#">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" href="#1" id="ouroption" role="button"  data-toggle="dropdown" aria-expanded="false">
                      Services
                  </a>
                  <ul class="dropdown-menu text-dark" aria-labelledby="ouroption">
                    <li><a class="dropdown-item" href="#">Regular checkup</a></li>
                    <li><a class="dropdown-item" href="#">Appoinment booking</a></li>
                    <li><a class="dropdown-item" href="#">Health issue</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">About Us</a>
                </li>


                
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Contact Us</a>
                </li>
              <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="user_3.png" width="40" height="40" class="rounded-circle">
                    <!-- https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg -->
                  </a>
                  <div class="dropdown-menu login-dropdown-123 text-dark" aria-labelledby="navbarDropdownMenuLink">
                    <div class="a pt-3 flex-column-for-login-page">
                      <img src="user_3.png" alt="" width="40" height="40" class="rounded-circle">
                      <h6 class="text-info text-center mt-2"><?php
                      $pp_name=strtolower($_SESSION['full_name']);
                      echo ucwords($pp_name);?></h6>
                    </div>
                    <hr class="mt-1 mb-1">
                    <a class="dropdown-item flex-for-login-page text-dark" href="edit-profile.html" target="_blank">Edit Profile <i class="mx-2 fa-solid fa-user-pen"></i></a>
                    <a class="dropdown-item flex-for-login-page text-dark" href="logout.php">Log Out <i class="mx-2 fa-solid fa-arrow-right-from-bracket"></i></a>
                  </div>
                </li>   
              </ul>
    </div>
</nav>
   
<!--------------------------------------main portion from here------------------------------------------------->
    <div id="body" class="row col-sm-12 justify-content-center" style="margin: 0 0;">
        <div class="card  mb-3 bg-light mt-3" style="width: 33rem; border-radius: 20px; ">
            <div class="card-body">
                <h5 class="card-title text-center text-info">
                   DOCTOR DETAILS
                </h5>
                <hr class="mt-2 mb-2">
                <p class="card-text text-center">
                    <img src="doctor (2).png" alt="..." class="rounded-circle" class="img-fluid">
                            <!-- echo $_SESSION['doctor_pic']; -->
                    <table class="table-light mx-auto">
                        <tbody>
                            <tr class="mb-2">
                                <td class="text-center"><?php echo "DR.".$_SESSION['name'];?></td>
                                <!-- echo $_SESSION['doctor_name']; -->
                              </tr>
                              <tr class="mt-2 mb-2">
                                <td class="text-center"><?php echo $_SESSION['department'];?></td>
                                <!-- echo $_SESSION['doctor_qualification']; -->
                              </tr>
                              <tr class="mt-2 mb-2">
                                <td class="text-center"><?php echo "VISIT: ".$_SESSION['fees'];?></td>
                                <!-- echo $_SESSION['doctor_visit']; -->
                              </tr>
                              
                        </tbody>

                    </table>

                    <h5 class="text-center mt-4 text-info">PATIENTS DETAIL</h5>
                    <hr class="mt-2 mb-2">
                    <table class="table-light  flex-for-login-page mx-auto">
                        <tbody>
                        <?php  foreach($_POST as $key => $value){ ?>
                            <tr class="mt-2 flex-for-login-page">
                                <td ><?php echo strtoupper($key)." : "; ?></td>
                                <td ><?php echo strtoupper($value)."<br>"; ?></td>
                            </tr>

                        <?php }?>
                           
                        </tbody>

                    </table>

                        <div class="my-25 clearfix flex-for-details">
                            <button type="button" id="continue" class="btn btn-success mr-4 mt-2 px-4" style="border-radius: 10px;">CONTINUE</button>
                        </div>
                    
            </div>
        </div>
    </div>

    <?php include "footer/one-footer.php";?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
$('#continue').click(function(){
// window.location.href="pre_feedback_insert.php";
window.location.href="payment/payment.php";
// C:\xampp\htdocs\php_for_work\backend_login_signup\appoinment form\payment\payment.php
});
  });
</script>
  </body>

</html>
 <!-- <tr class="mt-2">
                                <td>NAME : </td>
                                <td>Mark</td>
                              </tr>
                              <tr class="mt-2">
                                <td>EMAIL : </td>
                                <td>nathsubhankar@gmail.com</td>
                              </tr>
                              <tr class="mt-2">
                                <td>PH NO : </td>
                                <td>937XXXX123</td>
                              </tr>
                              <tr class="mt-2">
                                <td>SEX : </td>
                                <td>MALE</td>
                              </tr>
                              <tr class="mt-2">
                                <td>ADDRESS : </td>
                                <td>99 AB ROAD,NAIHATI</td>
                              </tr> -->
                               <!-- <p class="card-text my-5 justfiy-content-center">
                        <h5>
                            <p class="text-center mb-5"><u>PATIENTS DETAIL</u></p>
                        </h5>
                        <div class="mx-auto" style="width: 300px;">
                            <p>NAME : SUBHANKAR NATH</p>
                            <p>EMAIL : nathsubhankar@gmail.com</p>
                            <p>PH NO : 937XXXX123</p>
                            <p>SEX : MALE</p>
                            <P>ADDRESS : 99 AB ROAD,NAIHATI</P>
                        </div>
                    </p> -->
                    
                    <!-- <h6>
                        <p class="text-center">DR. SUBHANKAR DAS</p>
                    </h6>
                    <p class="text-center">GASTROENTEROLOGY,MD,DM</p>
                    <p class="text-center">VISIT: 1100/-</p> -->
                     <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> -->