 <?php
 if(isset($_COOKIE['cookie_doc_id']) and isset($_COOKIE['cookie_patient_id']) and isset($_COOKIE['cookie_review_id'])){
    $doc_array_id=(array)json_decode($_COOKIE['cookie_doc_id']);
    $patient_array_id=(array)json_decode($_COOKIE['cookie_patient_id']);
    $reviews_array_id=(array)json_decode($_COOKIE['cookie_review_id']);
 }

// echo "<pre>";
// print_r($arr1);
// echo "</pre>";
if(isset($_COOKIE['patients_cookies'])){
$patient_array=(array)json_decode($_COOKIE['patients_cookies']);

// echo "<pre>";
// print_r($patient_array);
// echo "</pre>";

// echo (array)md5($patient_array[0]['cookie_email']);
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Document</title>
    <style>
        .flex{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .flex-start{
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .flex-col{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .flex-arround{
            display: flex;
            align-items: center;
            justify-content: space-between;  
        }
        .off{
            display: none;
        }
    </style>
</head>
<body>
    <!-- required 
      1.  doctor name,specialization,patients name,dayname 
     2. form url we pass d_id,p_id and r_id respectively
    -->
    <div class="container flex-col mt-3">
        <h3 class="text-success col-8 text-center">Recent Appoinment Booked<hr></h3>
        <div class="col-8  flex-arround p-3 bg-light">
            <button type="button" class="btn btn-success" id="Recent-Appoinment-Booked">Recent-Appoinment-Booked <i class="fa-solid fa-calendar-plus" style="color:white;"></i></button>
            <button type="button" class="btn btn-warning" id="Give_Feedback">Give Feedback <i class="fa-solid fa-message" style="color:black;"></i></button>
        </div>
    </div> 
        
    <div class="container">
        
        <div class="row p-3 flex" id="recent-app">
            <!-- this row is for recent appoinment -->
            <!-- this is one -->
            <?php if(isset($_COOKIE['cookie_doc_id'])){ for($i=0;$i<count($doc_array_id);$i++){ $newarray=(array)$patient_array[$i];?>
            <div class="col-8 mt-2 bg-light">
                    <div class="row pt-2 pb-2">
                                    <div class="col-md-8 pt-2 pb-2 flex-start">
                                        <i class="fa-solid fa-circle-check" style="font-size:60px ;color:green;"></i>
                                        <div class="px-3 mx-2">
                                            <h5 class="mt-1 mb-1 text-success"><?php echo strtoupper($newarray['cookie_doc']); ?></h5>
                                            <hr class="mt-0 mb-0">
                                            <h6 class="mt-1 mb-1 text-success"><?php echo ucwords($newarray['cookie_spe']); ?></h6>
                                        </div>
                                        <div class="patient ms-auto px-3">
                                            <h5 class="mt-1 mb-1 text-warning"><?php echo ucwords($newarray['cookie_pname']); ?></h5>
                                            <hr class="mt-0 mb-0">
                                            <h6 class="mt-1 mb-1 text-warning"><?php echo $newarray['cookie_date']; ?></h6>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4 pt-2 pb-2 flex">
                                        <a href="geting_value.php?d_id=<?php echo $doc_array_id[$i]; ?>&p_id=<?php echo $patient_array_id[$i]; ?>&index=<?php echo $i; ?>&email=<?php echo $newarray['cookie_email']; ?>" class="btn btn-danger" target="_blank" rel="noopener noreferrer">cancel appoinmet</a>
                                    </div> -->
                                </div>
            </div>
            <?php }} else{ ?>
            <div class="col-8 mt-2 bg-warning" style="border-radius: 8px;">
                    <div class="row pt-2 pb-2">
                            <div class="col-2 flex">
                            <i class="fa-solid fa-triangle-exclamation" style="font-size:45px ;color:green;"></i>
                            </div>
                            <div class="col-10 flex-start text-danger">
                                <h4>NO RECENT APPOINMENT.</h4>
                            </div>        
                    </div>
            </div>
            <?php } ?>
        </div>

        <div class="row p-3 flex off" id="feedback">
            <!-- this row is for feedback -->
            <!-- this is one -->
            <?php if(isset($_COOKIE['cookie_review_id'])){ for($j=0;$j<count($reviews_array_id);$j++){ $newarray=(array)$patient_array[$j];?>
            <div class="col-8 mt-2 bg-light">
                    <div class="row pt-2 pb-2">
                                    <div class="col-md-8 pt-2 pb-2 flex-start">
                                        
                                        <i class="fa-solid fa-comment-medical" style="font-size:60px ;color:rgb(12, 142, 206);"></i>
                                        <div class="px-3 mx-2">
                                            <h5 class="mt-1 mb-1 text-success"><?php echo strtoupper($newarray['cookie_doc']); ?></h5>
                                            <hr class="mt-0 mb-0">
                                            <h6 class="mt-1 mb-1 text-success"><?php echo ucwords($newarray['cookie_spe']); ?></h6>
                                        </div>
                                        <div class="patient ms-auto px-3">
                                            <h5 class="mt-1 mb-1 text-warning"><?php echo ucwords($newarray['cookie_pname']); ?></h5>
                                            <hr class="mt-0 mb-0">
                                            <h6 class="mt-1 mb-1 text-warning"><?php echo $newarray['cookie_date']; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-2 pb-2 flex">
                                    <!-- echo $reviews_array_id[$j] -->
                                        <a href="http://localhost/php_for_work/backend_login_signup/appoinment%20form/feedback.php?r_id=<?php echo $reviews_array_id[$j]; ?>&index=<?php echo $j; ?>" class="btn btn-warning" target="_blank" rel="noopener noreferrer">give feedback</a>
                                    </div>
                                </div>
            </div>
            <?php } }else{?>

            <div class="col-8 mt-2 bg-warning" style="border-radius: 8px;">
                    <div class="row pt-2 pb-2">
                            <div class="col-2 flex">
                            <i class="fa-solid fa-triangle-exclamation" style="font-size:45px ;color:green;"></i>
                            </div>
                            <div class="col-10 flex-start text-danger">
                                <h4>NO APPOINMENT FOUND.</h4>
                            </div>        
                    </div>
            </div>
            <?php }?>
        </div>

    </div>
   
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
<script>
    $(document).ready(function(){

$('#Give_Feedback').click(function(){
$('#feedback').removeClass('off');
$('#recent-app').addClass('off');
});

$('#Recent-Appoinment-Booked').click(function(){
$('#feedback').addClass('off');
$('#recent-app').removeClass('off');
});
    });
</script>
</html>
<!-- <div class="row bg-danger">
          <div class="col-12 bg-danger">1</div>
          <div class="col-md-12 mt-3 mb-3 bg-info">
                
                <div class="row pt-2 pb-2">
                    <div class="col-md-8 pt-2 pb-2 flex-start">
                        <i class="fa-solid fa-circle-check" style="font-size:60px ;color:green;"></i>
                        <div class="px-3 mx-2">
                            <h5 class="mt-1 mb-1 text-success">DR.B.K.Ghosh</h5>
                            <hr class="mt-0 mb-0">
                            <h6 class="mt-1 mb-1 text-success">Cardiology,Dm,Md.</h6>
                        </div>
                        <div class="patient ms-auto px-3">
                            <h5 class="mt-1 mb-1 text-warning">Subhnakar Nath</h5>
                            <hr class="mt-0 mb-0">
                            <h6 class="mt-1 mb-1 text-warning">Monday</h6>
                        </div>
                    </div>
                    <div class="col-md-4 pt-2 pb-2 flex">
                        <a href="geting_value.php?d_id=" class="btn btn-danger" target="_blank" rel="noopener noreferrer">cancel appoinmet</a>
                    </div>
                </div>
            </div> -->
           <!-- <div class="col-md-8 mt-3 mb-3 bg-light off" id="feedback_1">
                
                <div class="row pt-2 pb-2">
                    <div class="col-md-8 pt-2 pb-2  flex-start">
                        <i class="fa-solid fa-circle-check" style="font-size:60px ;color:green;"></i>
                        <div class="px-3  mx-2">
                            <h5 class="mt-1 mb-1 text-success">DR.B.K.Ghosh</h5>
                            <hr class="mt-0 mb-0">
                            <h6 class="mt-1 mb-1 text-success">Cardiology,Dm,Md.</h6>
                        </div>
                        <div class="patient  ms-auto px-3">
                            <h5 class="mt-1 mb-1 text-warning">Subhnakar Nath</h5>
                            <hr class="mt-0 mb-0">
                            <h6 class="mt-1 mb-1 text-warning">Monday</h6>
                        </div>
                    </div>
                    <div class="col-md-4 pt-2 pb-2 flex">
                        <a  class="btn btn-danger" target="_blank" rel="noopener noreferrer">feedback</a>
                    </div>
                </div>
            </div>-->
        <!-- </div> -->
   