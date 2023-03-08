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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="payment2.css">
 <link rel="stylesheet" href="all-page-navbar.css">
 <link rel="stylesheet" href="all-page-footer.css">

    <title>USER MODULE</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Titillium Web', sans-serif;
        }
        .flex{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .flex-footer-cloumn{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
    </style>
</head>

<body>

<?php include 'one-navbar.php';?>
    <div class="row container mx-auto justify-content-center" id="body2">
    <!---^^---------- col-md-12  -->
        <div class="card my-5 mb-5" style="width: 45rem; background-color: 
       #f0ededd5; ">
            <div class="card-body">
                <h5 class="card-title text-center text-success">Select Your Payment Method
                    <p class=" mx-5 mt-3 mb-5" style="font-size: 20px"><?php echo "PRICE : ".$_SESSION['fees'];?></p>
                </h5>
                <hr class="mt-2 mb-3">
                <!-- <h5 class="card-subtitle mb-2 my-2">
                    <div class="input-group mb-3 row">
                        <div class="input-group-prepend col-md-6 col-sm-6 my-2 flex">
                            <div class="input-group-text">

                                <input type="radio" name="filter" aria-label="Checkbox for following text input">
                                &nbsp;Online Mode
                            </div>
                        </div>
                        <div class="input-group-prepend col-md-6 col-sm-6 my-2 flex">
                            <div class="input-group-text">

                                <input type="radio" name="filter" aria-label="Checkbox for following text input">
                                &nbsp;Offline Mode
                            </div>
                        </div>

                    </div>
                </h5> -->
                <!-- <h6 class="card-text text-center text-success">Choose your payment method :</h6> -->

                <div class="input-group mb-3 row">
                    <div class="input-group-prepend col-md-6 col-sm-6 my-2  flex">
                        <div class="input-group-text d-block ml-2" style="border-radius: 10px;">



                            <p class=""><i class="fa-brands fa-2x fa-cc-visa" style="color:#349eeb;"></i></p>

                            <input onclick="debitCard()" type="radio" name="filter"
                                aria-label="Checkbox for following text input"> &nbsp; Debit Card

                        </div>
                    </div>
                    <div class="input-group-prepend col-md-6 col-sm-6 flex">
                        <div class="input-group-text d-block" style="border-radius: 10px;">



                            <p class=""> <img src="hand-on-hand.png" alt="" style="width:60px; height:40px;"></p>
                            <!-- <i class="fa-solid fa-2x fa-hand-holding-dollar" style="color:pink;"></i> -->
                            <input onclick="Cash()"  type="radio" name="filter"
                                aria-label="Checkbox for following text input"> &nbsp; Hand on Hand

                        </div>
                    </div>

                </div>

                <!-- <div class="input-group row my-4  mx-2">

                    <div class="input-group-prepend col-md-6 col-sm-6 mx-3 my-2">
                        <div class="input-group-text d-block">



                            <p class=""><i class="fa-brands fa-2x fa-cc-visa"></i></p>

                            <input onclick="debitCard()" type="radio" name="filter"
                                aria-label="Checkbox for following text input"> &nbsp; Debit Card

                        </div>
                    </div>

                    <div class="input-group-prepend col-md-6 col-6 my-2 ml-4">
                        <div class="input-group-text d-block">



                            <p class=""><i class="fa-solid fa-2x fa-wallet"></i></p>

                            <input onclick="Cash()" type="radio" name="filter"
                                aria-label="Checkbox for following text input"> &nbsp; Hand on Hand

                        </div>
                    </div>


                </div> -->




            </div>
            <div class="padding" id="myDiv">
                <div class="row justify-content-center">
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js">
            </script>
            <div class="padding" id="debit">
                <div class="row justfiy-content-center">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="col-sm-8 col-md-6">
                            <div class="card"
                                style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 15px;height:auto;">
                                <div class="card-header">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <span>DEBIT CARD PAYMENT</span>

                                        </div>

                                        <div class="col-md-6 text-right" style="margin-top: -5px;">

                                            <img src="https://img.icons8.com/color/36/000000/visa.png">
                                            <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                            <img src="https://img.icons8.com/color/36/000000/amex.png">

                                        </div>

                                    </div>

                                </div>
                                <!-- ---------------- Debit card ---------  -->
                              <form action="./success/success.php" method="post">
                              <div class="card-body" style="height:auto">

                              <div class="form-group">
                                        <label for="numeric" class="control-label">AMOUNT</label>
                                        <input type="text" name="amount" value="<?php echo $_SESSION['fees'];?>" readonly class="input-lg form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="cc-number" class="control-label">CARD NUMBER</label>
                                        <input id="cc-number" name="card_no"  type="tel" class="input-lg form-control cc-number"
                                            autocomplete="cc-number"
                                            placeholder="&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;"
                                            required>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label">CARD EXPIRY</label>
                                                <input id="cc-exp" name="card-exp" type="tel" class="input-lg form-control cc-exp"
                                                    autocomplete="cc-exp" placeholder="&bull;&bull; / &bull;&bull;"
                                                    required>
                                            </div>


                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-cvc" class="control-label">CARD CVC</label>
                                                <input id="cc-cvc" name="card-cvv" type="tel" class="input-lg form-control cc-cvc"
                                                    autocomplete="off" placeholder="&bull;&bull;&bull;&bull;" required>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group  mb-2">
                                        <label for="numeric" class="control-label">CARD HOLDER NAME</label>
                                        <input type="text" name="card_holder_name" required class="input-lg form-control">
                                    </div>
                                    

                                    <div class="form-group">

                                        <input value="MAKE PAYMENT" name="debit" type="submit"
                                            class="mt-2 btn btn-success btn-lg form-control" style="font-size: .8rem;">
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card" id="apaypal">
                        <div class="card-header">
                            <!-- <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                 Credit card form tabs
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">

                                    <li class="nav-item">
                                        <a data-toggle="pill" href="#paypal" class="nav-link "> <i
                                                class="fab fa-paypal mr-2"></i>&nbsp; Paypal </a>
                                    </li>

                                </ul>
                            </div> -->
                            <!-- End -->

                            <div class="tab-content">




                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card" id="aupi">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <!-- <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item">
                                        <a data-toggle="pill" href="#upi" class="nav-link "> <i
                                                class="fas fa-mobile-alt mr-2"></i> UPI </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="pill" href="#net-banking" class="nav-link "> <i
                                                class="fas fa-mobile-alt mr-2"></i> Net Banking </a>
                                    </li>
                                </ul> -->
                            </div>
                            <!-- End -->
                            <!-- Credit card form content -->
                            <!-- <div class="tab-content">

                                <div id="upi" class="tab-pane fade pt-3">
                                    <div class="form-group "> <label for="Select Your Bank">
                                            <h6>Enter your UPI ID:</h6>
                                        </label>
                                        <input type="text">

                                    </div>
                                    <div class="form-group">
                                        <p> <button type="button" class="btn btn-primary "><i
                                                    class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button>
                                        </p>
                                    </div>
                                    <p class="text-muted">Note: After clicking on the button, you will be directed
                                        to a secure gateway for payment. After completing the payment process, you
                                        will be redirected back to the website to view details of your order. </p>
                                </div> -->
                            <!-- bank transfer info -->

                            <!-- End -->
                            <!-- End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------hand to hand --------------  -->
            <div class="container d-flex justify-content-center mt-2 mb-3">
                <div class="card card02" id="cash" style="width: 40%;">



                    <div>
                        <div class="d-flex pt-3 pl-3">
                            <div><img src="./cash.jpg" width="80" height="80" /></div>
                            <div class="mt-3 pl-2"><span class="name">DEAR PATIENT</span>
                                <div><span class="pin ">PAY AFTER CHECK UP</span></div>
                            </div>
                        </div>

                         <form action="./success/success.php" method="post">
                        <div class="py-2  px-3">
                            <div class="first pl-2 d-flex py-2">
                                <!-- <div class="form-check">
                                    <input type="radio" name="optradio" class="form-check-input mt-3 dot"  checked>
                                </div> -->
                                <!-- <div class="border-left pl-2"><span class="head">Total amount to pay</span>
                                    <div><span class="dollar">₹</span><span class="amount"></span></div>
                                </div> -->
                                <div class="border-left pl-2"><span class="head">Total amount to pay</span>
                                <div class="form-group">
                                <input type="text" name="amount" id="" value="<?php echo $_SESSION['fees'];?>" class="form-control" readonly>
                                </div>
                                
                                <input type="text" name="card_no" id="" value="Hand to hand payment 3" hidden>
                               
                            </div>
                        </div>
                     

<!-- 
                        <div class="py-2  px-3">
                            <div class="second pl-2 d-flex py-2">
                                <div class="form-check">
                                    <input type="radio" name="optradio" class="form-check-input mt-3 dot">
                                </div>
                                <div class="border-left pl-2"><span class="head">Other amount</span>
                                    <div class="d-flex"><span class="dollar">₹</span><input type="text" name="text"
                                            class="form-control3 ml-1" placeholder="0"></div>
                                </div>

                            </div>
                        </div> -->


                        <div class="d-flex justify-content-between px-3 pt-4 pb-3">
                    
                            <!-- <div><span class="back">Go back</span></div> -->
                            <button type="submit" class="mx-auto btn btn-primary">Pay amount</button>
                        </div>

                        </form>

                    </div>

                </div>


            </div>
            <!-- ----------------------hand to hand---------  -->

        </div>


    </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">

                <div class="container h-100">
                    <div class="row d-flex  align-items-center h-100">
                        <div class="card-margin col-lg-12 col-xl-11">
                            <div class="card carding text-black" style="border-radius: 25px;">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                            <form class="mx-1 mx-md-4">

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="text" id="form3Example1c" class="form-control" />
                                                        <label class="form-label" for="form3Example1c">Your Name</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="email" id="form3Example3c" class="form-control" />
                                                        <label class="form-label" for="form3Example3c">Your
                                                            Email</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="form3Example4c"
                                                            class="form-control" />
                                                        <label class="form-label" for="form3Example4c">Password</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="form3Example4cd"
                                                            class="form-control" />
                                                        <label class="form-label" for="form3Example4cd">Repeat your
                                                            password</label>
                                                    </div>
                                                </div>

                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <input class="form-check-input me-2 check-box" type="checkbox"
                                                        value="" id="form2Example3c" />
                                                    <label class="form-check-label" for="form2Example3">
                                                        I agree all statements in <a href="#!">Terms of service</a>
                                                    </label>
                                                </div>

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="button"
                                                        class="btn btn-primary btn-lg">Register</button>
                                                </div>
                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <p class="text-secondary">Already Have An Account? Click Here</p>
                                                </div>

                                            </form>

                                        </div>
                                        <div
                                            class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                                class="img-fluid" alt="Sample image">

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

    <!-- Footer -->
    <?php include_once 'one-footer.php';?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="payment.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="./search-dropdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</body>

</html>


<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>


            <button class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModalLong"
                type="button">Sign Up</button>

        </div>
    </nav> -->



    <!-- <footer class="text-center text-lg-start bg-light text-muted mt-5">
       
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
           
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            

            
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
           
        </section>
     

        
        <section class="">
            <div class="container text-center text-md-start mt-5">
               
                <div class="row mt-3">
                    
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                     
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit.
                        </p>
                    </div>
                   

                    
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
             

                    
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                     
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i> info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                   
                </div>
               
            </div>
        </section>
   

        
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        
    </footer> -->