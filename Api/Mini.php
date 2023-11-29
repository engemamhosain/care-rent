<?php
include '../classes/Vehicle.php';

 $vehi = new Vehicle();
 $vehicle=$vehi->getMinitruck();
  $emparray = array();
//  $myJSON = json_encode($row);
//        echo $myJSON;

if($vehicle->num_rows>0){
    while ($row=$vehicle->fetch_assoc()){
        $emparray[] = $row;
        //print_r($row);
      
    }
}
 
        $myJSON = json_encode($emparray);
//        echo "{carList:"+$myJSON+"}";
         echo '{"CarList":'.$myJSON."}";
        
