<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../Model/api_test.php');
include '../model/Reserve.php';

$test=new api_test();
$test->insert("GetReserve.php",$_GET);
$test->insert("PostReserve.php",$_POST);

$reserve=new Reserve();

$reserveResult=$reserve->getReserveVehicle($_POST);
  $emparray = array();

if($reserveResult->num_rows>0){
    while ($row=$reserveResult->fetch_assoc()){
        $emparray[] = $row;
    }
}
 
        
        $my1JSON = json_encode($emparray);

           echo '{"reserveList":'.$my1JSON."}";

 ?>         