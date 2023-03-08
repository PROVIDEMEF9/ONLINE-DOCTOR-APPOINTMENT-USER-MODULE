<!doctype html>
<html lang="en">
<?php
session_start();
print_r($_SESSION);
echo $_GET['p_id'];
echo $_GET['d_id'];
echo $_GET['date'];
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha515-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./cancel-appoint.css">


    <title>USER MODULE</title>
    <style>
     body {
    background: url(./doc-background.jpg) center/cover no-repeat;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>


            <button class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModalLong" type="button">Sign Up</button>

        </div>
    </nav>
    <div style="margin:0 0 ;" class="row my-5 col-md-15 col-sm-15 col-15 justify-content-center ">
        <div class="card " style="width: 40rem; background-color: 
        #f0ededd5;">
            <div class="card-body mt-1 px-4">
                <div class="row d-flex justify-content-center">
                <?php
           
           $conn=new mysqli("localhost","root","","test_suvo");
           $sql="select * from doctor_table";
           $row=$conn->query($sql);
          $res=$row->fetch_assoc();
               $id=$res['id'];
               $pht=$res['photo'];
            $nm=$res['name'];
            $phn=$res['phone'];
            $eml=$res['email'];
            $qlf=$res['qualification'];
            $chm=$res['chamber'];
            $fees=$res['fees'];
            $dpt=$res['department'];
            $pin=$res['pin'];
            $rating=$res['ratings'];
            
            $tst1=$res['weekday_time'];
            $wkt=unserialize($tst1);
           
            $tst2=$res['dates'];
            $dt=unserialize($tst2);
            $d_id=$_GET['d_id'];
            $p_id=29;
            $dtt=$_GET['date'];
            echo $d_id;
            echo $p_id;
            $sql1="delete from app_fix where d_id=$d_id and p_id=$p_id";
            $conn->query($sql1);
            // $sql2="insert into app_cancel(d_id,p_id,date) values($d_id,$p_id,$dtt)";
            // $conn->query($sql2);
            ?>
                    <h5><img src="./multiply.png" alt="" style="height: 23px;">&nbsp;<u>CANCEL APPOINTMENT</u></h5>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <IMG src="./My project (2).png" style="height: 350px;"></IMG>
                    </div>
                    <div class="col-md-7 ml-5">
                        <tr align="left">
                            <td width="36" style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;  line-height: 16px; vertical-align: top;">
                            </td>
                            <td style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;  line-height: 16px; vertical-align: top;">

                                <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 10px; margin: 0; ">
                                    <strong>CURRENT PATIENTS : ANIKET BASU</strong><br />
                                </p>
                                <br>
                                <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 10px; margin: 0; ">
                                    <strong>DOCTOR NAME : DR A.K DHAR</strong><br />
                                </p>
                                <br>
                                <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 10px; margin: 0; ">
                                    <strong>DATE : 10.09.2022</strong><br />
                                </p>
                                <br>
                                <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 13px; margin: 0; ">
                                    <strong>TIME : 10:00 AM</strong><br />
                                </p>
                                
                                
                                <!-- <br>
                                <p style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 10px; margin: 0; ">
                                    <strong>CHAMBER'S NAME : 24 RBC ROAD, NAIHATI</strong><br />
                                </p> -->
                                <br>
                                <br>
                                <h3  style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 20px; line-height: 10px; margin: 0; ">
                                    </ul>
                                    </strong><br />
                                    <strong >REASON : &nbsp; <div class=" btn-group dropdown">
                                    <div class=" dropdown">
  <select class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    Dropdown button
    <option disabled selected><li><a class="dropdown-item" href="#">Choose Reason</a></li> </option>
           <option><li><a class="dropdown-item" href="#">Action</a></li> </option>
           <option><li><a class="dropdown-item" href="#">Aniket</a></li> </option>
           <option><li><a class="dropdown-item" href="#">Subhankar</a></li> </option>
           <option><li><a class="dropdown-item" href="#">Mudi</a></li> </option>  </select>
  <!-- <ul class="dropdown-menu">
    
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul> -->
</div>
                                      </div></strong><br />
                                </h3>
                                <br>
                                <input class="bg-transparent" placeholder="Describe issue (Optional)" style=" font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 10px; margin: 0; height: 40px; text-align: center;">
                                <br>
                                <br>
                                <br>
                                <button type="button" class="btn btn-success rounded "><a class="text-light" href="#">Close</button>
                                <?php

// foreach ($dt as $date => $slt) {
//     $url="http://localhost/subhankar/cancel-appoint.php?b_id=".$id."&slt=".$date;
    
//    ?>
//                                 <button style="width: 185px; " type="button" class="btn btn-danger rounded ml-5"><a class="text-light" > Cancel Appointment</a> </button>
// <?php
// break;
// }

if(isset($_GET['b_id'])){ ?>
    <!-- <script>
        alert("adahbc0");
    </script> -->
 <?php   $idd=$_GET['b_id'];
    // echo $idd;
    $dt=$_GET['slt'];
    $sql="select dates from doctor_table where id=".$idd;
    $row=$conn->query($sql);
    $res=$row->fetch_assoc();
    // print_r($res);
    $arr=unserialize($res['dates']);
    foreach ($arr as $key => $value) {
       if($key==$dt){
        if($arr[$dt]>=20){
            echo("not canceled");
            $inc_vl=20;
        }
        else{
            $inc_ky=$dt;
            $inc_vl=$arr[$dt]-1;
            echo("appointment canceled");
            break;
        }
       }
    }
    $arr[$dt]=$inc_vl;
    // print_r($arr);
    $arr1=serialize($arr);
    $sql="update doctor_table set dates='{$arr1}' where id={$idd}";
    $conn->query($sql);
}

?>

                            </td>
                        </tr>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted mt-5">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
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
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
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
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
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
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10015, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i> info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <?php

           ?>
    <!-- Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="./payment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./search-dropdown.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>