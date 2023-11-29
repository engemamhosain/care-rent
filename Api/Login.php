<?php

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../Model/Customer.php');
include_once ($filepath.'/../Model/api_test.php');

$test=new api_test();
$test->insert("Login.php",$_GET);
$test->insert("Login.php",$_POST);
$cmr =new Customer();

 
  $result= $cmr->customerLogin($_POST);
  $emparray = array();

if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        $emparray[] = $row;
      
    }
}
        $myJSON = json_encode($emparray);
         echo '{"customer":'.$myJSON."}";
        


