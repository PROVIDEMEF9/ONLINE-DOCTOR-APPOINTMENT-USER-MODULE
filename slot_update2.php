<!DOCTYPE html>
<html lang="en">
<?php
session_start();

        // $result = mysqli_query($conn, $sql);
        
        // if ($result) {
        //     $row = mysqli_num_rows($result);
        //     while ($row > 0) {
        //         $res2 = mysqli_fetch_assoc($result);
        //         print_r($res2);
           

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="./slot_update_2.css">
    <link rel="stylesheet" href="all-page-navbar.css">
    <title>Document</title>
</head>

<body>
<?php include 'one-navbar.php';?>
    <div class="container" id="doc_container">

        <!-- THIS IS FOR ONE SIDE WINDOW WHERE  ALL SLOTS WILL BE SHOWN  ---------SECTION 1--------------------->



        <!-- THIS IS FOR BOOK AN APPOINMENT SECTION WHERE ALL DOCTORS WITH INFO WILL BE SHOWN ---------SECTION 2--------------->
        <div class="row flex12">
            <!-- <div class="abc bg-danger">
                12
            </div> -->
            <!-- <div class="abc my-2 bg-danger">
                12
            </div>
            <div class="col-3 bg-success p-1"></div> -->

            <!-- THIS IS BLANK DIV WITH COL-MD-4 IMPORTANT 1--------------SECTION -1.1---------------- -->
            <div class="col-md-4 off" id="col3">
                <!-- this is blank column -->
            </div>





            <!-- THIS IS MAIN DIV WITH COL-MD-12 WHERE ALL THE DOCTOR INFO WILL BE SHOWN IMPORTANT 2--------------SECTION -1.2---------------- -->
            <div class="col-md-12" id="main_col">

                <?php

                // $conn = new mysqli("localhost", "root", "", "doc");
                // $sql = "select * from doctor_table";
                if (isset($_POST)){


                    $address = $_POST['pin'];
                    $location = $_POST['loca'];
                    $specs = $_POST['cat'];
                   
                   
                
                    if (isset($_POST['loca'])) {
                        
                        $sql = "SELECT * FROM doctor_table WHERE chamber='$location'";
                        if ($address != '') {
                
                            $sql = $sql . " AND pin='$address'";
                            if ($specs != '') {
                    
                                $sql = $sql . " AND department='$specs'";
                            } 
                        } 
                        else if (($specs != '') and ($address != '')) {
                            
                            $sql = $sql . " AND department='$specs' AND pin='$address'";
                        }
                        else {
                            echo "No Doctor Found";
                            // $sql = "SELECT * FROM doctor_table WHERE chamber='$location'";
                        }
                       
                        $conn = new mysqli("localhost", "root", "", "test_suvo");
                $row = $conn->query($sql);
                while ($res = $row->fetch_assoc()) {
                    $id = $res['id'];
                    $pht = $res['photo'];
                    
                    
                    $nm = $res['name'];
                    $phn = $res['phone'];
                    $eml = $res['email'];
                    $qlf = $res['qualification'];
                    $chm = $res['chamber'];
                    $fees = $res['fees'];
                    $dpt = $res['department'];
                    $pin = $res['pin'];
                    $rating = $res['ratings'];
                   
                    $tst1 = $res['weekday_time'];
                    $wkt = unserialize($tst1);

                    $tst2 = $res['dates'];
                    $dt = unserialize($tst2);



                ?>

                    <!-- we can add/set any column according our choise now its 
                            col-12 -->

                    <!-- this is for one doctor  -->
                    
                        <div class="my-2 row bg-info">

                            <div class="col-md-2  flex">
                                <!-- this column is for doctors image/profile image size will
                                    be fixed that is col-md-2 -->
                                <img src="<?php echo $pht;?>" class="img-fluid box img-thumbnail" alt="...">
                            </div>
                            <div class="col-md-6  flex-start doc-det">
                                <!-- this column is for doctors information that will 
                                    be fixed that is col-md-6 -->
                                <ul class=" ul">
                                    <!-- each li contains doctors info change inside this li tag -->
                                    <li>
                                        <h3><?php echo  "DR. ".$nm; ?></h3>
                                    </li>
                                    <!-- <li>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                            </li> -->
                                    <li><?php echo $dpt; ?></li>
                                    <li>Pin: <?php echo $pin; ?></li>
                                    <li>Phone number: <?php echo  $phn; ?></li>
                                    <li>Qualification : <?php echo  $qlf; ?></li>
                                    <li>Email: <?php echo  $eml; ?></li>
                                    <li>Doctorss Visit : <?php echo $fees." /-"; ?></li>
                                    <li>Chamber : <?php echo $chm; ?></li>

                                    <!-- <li>Time : ' . $tst1 . '</li> -->
                                </ul>
                            </div>
                            <div class="col-md-4  flex">
                                <!-- this is for book appoinment button -->
                                <button type="button" class="btn btn-warning book_appoinment">BOOK APPOINMENT <i class="fa-regular fa-calendar-check"></i></button>
                            </div>

                            <!-- this is for computer only -->
                            <div class="row big floating_box my-2 off after_pick_show">
                                <div class="col-6 bg-light p-3">

                                    <div class="row f-end my-2">
                                        <div class="col-2">
                                            <button class="btn btn-danger mr-2 cross_press"><i class="fa-solid fa-xmark"></i></button>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-12  flex">
                                            <!-- this column is for doctors image/profile image size will be fixed that is col-md-2 -->
                                            <img src="<?php echo $pht;?>" class="img-fluid box img-thumbnail" alt="...">
                                        </div>
                                        <ul class=" ul_doc flex">
                                            <!-- each li contains doctors info change inside this li tag -->
                                            <li>
                                                <h3><?php echo  "DR.".strtoupper($nm); ?></h3>
                                            </li>
                                            <li class="mt-0 mb-1">
                                        
                                      <?php for($i=1;$i<= $rating ;$i++){
                                        ?>
                                        <i class="fa-solid fa-star" style="color: rgb(242, 202, 22);"></i>
                                        <?php }
                                        ?>
                                    </li>
                                            <li><?php echo "DEPARTMENT: ".$dpt; ?></li>
                                            <li><?php echo "FEES: ".$fees."/-"; ?></li>
                                        </ul>
                                        <hr class="mt-1 mb-4">
                                    </div>

                                    <div class="row flex">
                                        <div class="col">
                                            
                                        </div>
                                    </div>

                                    <!-- // <div class="row flex off" id="slot_not_show_suvo">

                            //     <div class="col flex  no-appoinment">
                            //         <img src="download.svg" alt="">
                            //         <p>No Slot Avaliable For 20 OCT</p>
                            //         <div class="d-grid gap-2 col-12 mx-auto">
                            //             <button class="btn btn-danger" type="button">Next Avaliblity on,Mon 22 OCT</button>
                            //         </div>
                            //     </div>

                            // </div> -->

                                    <div class="row flex" id="slot_show_suvo">
                                        <div class="col flex  no-appoinment">
                                            <table class="table">
                                               
                                                    <tr >  
                                                        
<?php

                                                                  

foreach ($dt as $date => $slt) {
    
    $d = date_create($date);
    $w=strtolower(date_format($d,"l"));
    $sql ="select weekday_time from doctor_table where id=".$id;
    // $row = $conn ->query($sql);
    // $res = $row ->fetch_assoc();
    $res1 = unserialize($res['weekday_time']);
    $t = $res1[$w];
    echo $date."($t):";
    $url = "http://localhost/backend/full_website_by_suvo/slot5.php?b_id=" . $id . "&slt=" . $date  . "&dpt=" . $dpt ."&fee=" . $fees. "&tm=" . $t . "&nm=" . $nm;
    ?>
    
     <button class="btn btn-primary rounded my-3">
     <a class="text-white" href=<?php echo $url;?>>Book</a></button>

  
                                                      
  



                                                        </td>
                                                       

                                                    </tr>



                
                <?php

}



    //                 if (isset($_GET['b_id'])) { ?>
                   <!-- <script>
    //        alert("adahbc0");
    //    </script> -->


              








                </table>



            </div>
        </div>

    </div>

    </div>


    <!-- this is for tablet or phone only -->
    <!-- <div class="col-12 bg-light mid off">
                                        <div class="row f-end my-2">
                                            <div class="col-2">
                                                <button class="btn btn-danger mr-2 cross_press1" ><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </div>

                                        <div class="row flex">
                                            <div class="col-md-6">
                                                <table class="table" id="table_sel">
                                                    <tr id="abc">
                                                        <td><button type="button" class="btn btn-outline-light" id="left"><i class="fa-solid fa-angle-left" style="color: black;"></i></button></td>'
                                                        // <td><button type="button" class="btn btn1 btn-outline-primary " >Today</button></td>
                                                        .'<td><button type="button" class="btn btn1 btn-outline-primary">12 OCT</button></td>
                                                        <td><button type="button" class="btn btn1 btn-outline-primary">13 OCT</button></td>
                                                        <td><button type="button" class="btn btn-outline-light" id="right"><i class="fa-solid fa-angle-right" style="color: black;"></i></button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row flex off" id="slot_not_show_suvo">
               
                                            <div class="col-md-6 flex  no-appoinment" >
                                                <img src="download.svg" alt="">
                                                <p>No Slot Avaliable For 20 OCT</p>
                                                <div class="d-grid gap-2 col-12 mx-auto">
                                                    <button class="btn btn-danger" type="button">Next Avaliblity on,Mon 22 OCT</button>
                                                  </div>
                                              </div>
                                        
                                            </div>

                                            <div class="row flex" id="slot_show_suvo">
                                                <div class="col-md-6 flex  no-appoinment" >
                                                    <table class="table">
                                                        <tr>
                                                            <td class="bg-light">
                                                                <div class="flex ">
                                                                    <span class="material-symbols-outlined mx-2">
                                                                        wb_twilight
                                                                        </span>
                                                                        Morning 
                                                                </div> 
                                                                
                                                                   
                                                                
                                                            </td>
                                                            <td><button type="button" class="btn btn-outline-primary">10:30 am</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-light">
                                                                 <div class="flex ">
                                                                <span class="material-symbols-outlined">
                                                                    light_mode
                                                                    </span>
                                                                    Afternoon 
                                                            </div> 
                                                        </td>
                                                            <td><button type="button" class="btn btn-outline-primary">12:00 pm</button></td>
                                                            <td><button type="button" class="btn btn-outline-primary">4:00 pm</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-light"> <div class="flex ">
                                                                <span class="material-symbols-outlined">
                                                                    clear_night
                                                                    </span>
                                                                    Evening
                                                            </div> </td>
                                                            <td><button type="button" class="btn btn-outline-primary">08:30 pm</button></td>
                                                            
                                                        </tr>
                                                    </table>
                                    
                                                    
                                                  </div>
                                            </div>
                                            


                                        
                                </div> -->




    </div>



<?php

  } $res -= 1;  }}


?>



</div>
<?php
//              $timee=$_POST['time'];
//              echo $timee;
// $sltt=$_POST['checkme'];
// echo $sltt;
?>





</div>

</div>

<?php
include ("one-footer.php");
?>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="./fas.js"></script>
<!-- <script src="slot_by_suvo.js"></script> -->

</html>