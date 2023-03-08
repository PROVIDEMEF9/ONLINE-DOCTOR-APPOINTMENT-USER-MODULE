<?php
$d_id=100;
$user_name='nathsubankar101';
$p_name='gita nath';
$p_address='rathtala fingapara north 24 pgs';
$rating=0;
$reviews='';
$key=array('d_id','user_name','p_name','p_address','rating','reviews');
$value=array($d_id,$user_name,$p_name,$p_address,$rating,$reviews);
// -------------here we retrive all the values from session-----------------------------
$insert_reviews=array_combine($key,$value);

echo "<pre>";
print_r($insert_reviews);
echo "</pre>";

// include 'conection_share1.php';

// $obj=new Database();

// $return_id=$obj->insert('doc_reviews',$insert_reviews); // this id will stored in session


// echo "<pre>";
// print_r($return_id);
// echo "</pre>";

session_start();
// $_SESSION['rid']=array(1,2,3);
// unset($_SESSION['rid']);



echo "<pre>";
print_r($_SESSION['rid']);
echo "</pre>";










//------------------------------------cookie-----------------------------
// $val=array(1,2,3);
// $actual_val=json_encode($val);// this method convert array to string

// setcookie('qid',$actual_val,time()-360,"/");

// // echo $_COOKIE['qid'];


// echo $_COOKIE['qid'];


// if(is_array($_COOKIE['qid'])){
//     echo "<br>".'COOKIE-qid array type';
// }else{
//     echo "<br>".'COOKIE-qid string type';
// }

// $after_decode=json_decode($_COOKIE['qid']);

// // if(is_array($after_decode)){
// //     echo "<br>".'after_decode array type';
// // }else{
// //     echo "<br>".'after_decode string type';
// // }

// array_push($after_decode,4);
// $actual_val=json_encode($after_decode);// this method convert array to string
// setcookie('qid',$actual_val,time()-360,"/");
// // echo count($_COOKIE['qid']);
// echo $_COOKIE['qid'];

//--------------------now i am trying to store array in array in cookie-------------

// $actual_array=array();
// $subarray=array('name'=>'banadip mudi','age'=>19);
// array_push($actual_array,$subarray);
// $subarray=array('name'=>'subhnakar nath','age'=>18);
// array_push($actual_array,$subarray);


// echo "<pre>";
// print_r($actual_array);
// echo "</pre>";

// echo json_encode($actual_array);

$actual_array=json_decode($_COOKIE['p-details']);


$actual_array=(array)$actual_array;
echo "<pre>";
print_r($actual_array);
echo "</pre>";
if(is_array($actual_array)){
    echo "yes its array";
}else{
    echo "not array";
}
// include 'conection_share1.php';

// $obj=new Database();

// $p_id=$obj->insert('patient_db',$actual_array);

// print_r($p_id);
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
    
</body>
</html>