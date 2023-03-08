<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="appointment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="footer\all-page-footer.css">
    <title>Appointment form</title>
    <style>
    * {
        font-family: 'Titillium Web', sans-serif;
    }

    .active_update {
        background-color: transparent;
        color: rgb(14, 75, 119) !important;
        text-decoration: underline;
        font-size: 25px;
    }

    /* .text-info{
            color: rgb(14, 75, 119) !important;
        } */
    .blue_btn {
        background-color: rgb(14, 75, 119);
    }

    /* ul li{
            margin-left: 18px;
            margin-right: 18px;
        } */
    /* .bk_nav{
            display: flex;
        }
        .navbar-nav{
            margin-left: auto;
        }
        .margin-up{
            margin-top: -113px;
        } */
    @media(max-width:992px) {
        .margin-up {
            margin-top: 0px;
        }
    }

    .login-dropdown-123 {
        /* margin: 0px -51px; */
        margin-top: 0px;
        margin-left: -51px;

    }

    .flex-end-2222 {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .bk_nav {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .flex-for-login-page {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .flex-column-for-login-page {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    @media(max-width:574px) {
        .login-dropdown-123 {
            /* margin: 0px -51px; */
            margin-top: 0px;
            /* margin-left: -51px; */
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
        <button class="navbar-toggler bg-danger border border-light" type="button" data-toggle="collapse"
            data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse  flex-end-2222 px-4" id="navbar-list-4">
            <ul class="navbar-nav  me-auto flex-end-2222  ">
                <li class="nav-item">
                    <a class="nav-link  text-dark active_update" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="ouroption" role="button"
                        data-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="dropdown-item flex-for-login-page text-dark" href="edit-profile.html"
                            target="_blank">Edit Profile <i class="mx-2 fa-solid fa-user-pen"></i></a>
                        <a class="dropdown-item flex-for-login-page text-dark" href="logout.php">Log Out <i
                                class="mx-2 fa-solid fa-arrow-right-from-bracket"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row my-5 col-sm-12 justify-content-center " style="margin: 0 0 ;">
        <div class="card mb-3 bg-rgb(210, 209, 209)" style="width: 35rem;">
            <div class="card-body">
                <h4 class="card-title mb-5 text-center text-info">PATIENT APPOINTMENT FORM</h4>
                <hr>
                <p class="card-text">
                <div class="row">
                    <div class="col-sm-7">
                        <form action="details.php" method="post">
                            <div class="form-group">

                                <input type="text" class="form" required name="name" id="exampleInputEmail1"
                                    placeholder="ENTER YOUR NAME...">

                            </div>
                            <div class="form-group">

                                <input type="email" class="form" required name="email" id="exampleInputEmail1"
                                    placeholder="ENTER YOUR EMAIL...">

                            </div>
                            <div class="form-group">

                                <input type="text" class="form" required name="number" id="phno"
                                    placeholder="ENTER YOUR NUMBER...">
                                <div class="m-3"></div>
                            </div>
                            <!-- <div class="input-group mb-3">
                                    <input type="text" class="form" required name="otp" placeholder="ENTER OTP..." id="otp">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-danger px-4 my-2 mx-2" type="button" id="verify-otp" style="border-radius:20px; font-size: 12px; ">VERIFY</button>
                                    </div>
                                </div> -->

                            <div class="form-group form-check">
                                <label class="form-check-label" for="exampleCheck1">SEX : </label>
                                <!-- <input type="checkbox" name="male" id="male">
                                    <label for="male">MALE</label>
                                    <input type="checkbox" name="female" id="female">
                                    <label for="female">FEMALE</label> -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" requird name="gender" id="male"
                                        value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" requird name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-group">

                                <input type="text" class="form" required id="exampleInputEmail1" name="dob"
                                    aria-describedby="emailHelp" placeholder="ENTER YOUR DATE OF BIRTH...">

                            </div>
                            <div class="form-group">

                                <input type="text" class="form" required id="exampleInputEmail1" name="address"
                                    aria-describedby="emailHelp" placeholder="ENTER YOUR ADDRESS...">

                            </div>


                    </div>
                    <div class="col-sm-5">
                        <img src="doctor2.png" class="img-fluid" alt="Responsive image" style="height:52vh ;width:40vw">
                    </div>
                </div>

                <div class="justify-center-appo">
                    <button type="submit" class="btn btn-success px-4" name="continue"
                        style="border-radius: 20px;">CONTINUE</button>
                </div>
                </form>
                </p>
            </div>
        </div>
    </div>


    <?php include "footer\one-footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
    import {
        getAuth,
        RecaptchaVerifier
    } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
    import {
        signInWithPhoneNumber
    } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
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

    function render() {
        window.recaptchaVerifier = new RecaptchaVerifier('recaptcha-container', {}, auth);
        render.recaptchaVerifier;
    }

    $(document).ready(function() {



        let a = $('.nav-link');

        for (let index = 0; index < a.length - 1; index++) {

            const element = a[index];
            $(element).click(function() {
                for (let i = 0; i < a.length; i++) {
                    $(a[i]).removeClass('active_update');
                }
                $(this).addClass('active_update');
            });
        }

        $('#phno').on('change', function() {
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

        // $('#verify-otp').click(function(){
        //     const code =$('#otp').val();
        //     confirmationResult.confirm(code).then((result) => {
        //     // User signed in successfully.
        //     const user = result.user;
        //     alert('code matched');
        //     // ...
        //     }).catch((error) => {
        //     // User couldn't sign in (bad verification code?)
        //     // ...
        //     alert('wrong code');
        //     });
        // });
    });
    </script>

    <?php
if(isset($_POST['continue'])){
    unset($_POST["otp"]);
    unset($_POST["g-recaptcha-response"]);
    array_pop($_POST);

  
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
</body>

</html>
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