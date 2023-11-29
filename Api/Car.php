<?php
include '../classes/Vehicle.php';

 $vehi = new Vehicle();
 $vehicle=$vehi->getCar();
  $emparray = array();

if($vehicle->num_rows>0){
    while ($row=$vehicle->fetch_assoc()){
        $emparray[] = $row;
      
    }
}
        $myJSON = json_encode($emparray);
         echo '{"CarList":'.$myJSON."}";
        
