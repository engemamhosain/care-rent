<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../Model/api_test.php');
include '../model/Reserve.php';

$test=new api_test();
$test->insert("GetBooking.php",$_GET);
$test->insert("PostBooking.php",$_POST);
$reserve=new Reserve();

$reserveResult=$reserve->getBookingVehicle($_POST['cId']);

  $emparray = array();

if($reserveResult->num_rows>0){
    while ($row=$reserveResult->fetch_assoc()){
        $emparray[] = $row;
    }
}
 
        
        $my1JSON = json_encode($emparray);

           echo '{"bookingList":'.$my1JSON."}";

 ?>         