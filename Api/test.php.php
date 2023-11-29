<?php

//use Database;
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include '../classes/Vehicle.php';

$db = new Database();
$query="SELECT * FROM `tbl_admin`";
$getAdminResult = $db->select($query);
if($getAdminResult->num_rows>0){
    while ($row=$getAdminResult->fetch_assoc()){
        //print_r($row);
        $data[]=$row;
       // $data = json_encode($row);
        //echo $myJSON;
       // print $data;
    }
    print json_encode($data);
}



        