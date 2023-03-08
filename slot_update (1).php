<?php
// session_start();
// session_start();
// if(!isset($_SESSION['usrnm'])){
//     header("Location:http://localhost/Banadip_php/file3/admin_login.php");
// }
include_once "modify_doctor_database.php";
 ?>
<?php
    if(isset($_GET['id']) && isset($_GET['wk'])){
    $id=$_GET['id'];
    $wk=$_GET['wk'];
    $ob1=new Modify();
    $sql="select dates from doctor_table where id=".$id;
    $row=$ob1->conn->query($sql);
    $res=$row->fetch_assoc();
    $arr=unserialize($res['dates']);
    print_r($arr);
    // echo "<br>";
    if(sizeof($arr)>0){
        // echo("sbhx");
    foreach($arr as $vl1=>$vl2){
        $dt1=date_create($vl1);
        $dt=strtolower(date_format($dt1,"l"));
        // echo $vl1;
        // echo $wk;
        // echo $dt;
        if($dt==$wk){
            // echo "helo";
            $tst=strtolower(date("d-F-Y",strtotime("next ".$wk)));
            unset($arr[$vl1]);
            $arr[$tst]=0;
            // echo($tst);
        }
    }
    $tst=strtolower(date("d-F-Y",strtotime("next ".$wk)));
    // echo $tst;
    $arr[$tst]=0;
}else{
    $tst=strtolower(date("d-F-Y",strtotime("next ".$wk)));
    $arr[$tst]=0;
}
$arr1=serialize($arr);
// echo $id;
$sql="update doctor_table set dates='{$arr1}' where id={$id}";
print_r($arr);
$opt=$ob1->conn->query($sql);
$sql="select weekday_time from doctor_table where id=".$id;
$row1=$ob1->conn->query($sql);
$res1=$row1->fetch_assoc();
$arrx=unserialize($res1['weekday_time']);
foreach($arr as $vlx=>$vly){
    $dt1=date_create($vlx);
    $dt=strtolower(date_format($dt1,"l"));
    $c=0;
foreach($arrx as $vl1=>$vl2){
        if($dt==$vl1){
            $c=1;
            break;
        }
    }
    if($c==0){
        unset($arr[$vlx]);
        $arr1=serialize($arr);
        $sql="update doctor_table set dates='{$arr1}' where id={$id}";
        $opt=$ob1->conn->query($sql);
    }
}
print_r($arr);
    header("Location:http://localhost/Banadip_php/file3/test_view_doctors.php");
    }
?>