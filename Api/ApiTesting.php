<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
$database=new Database();
$query="SELECT * FROM `apitesting`";
$result=$database->select($query);
//  $emparray=array();
//    while ($row=$result->fetch_assoc()){
//        $emparray[] = $row;
//        echo 'dfas'.$row['id'];
//     
//        print_r($row);
//    }
//  //    echo $emparray[id];
//
////print_r($database);
////echo $database;
////include '../classes/Vehicle.php';
//
//// $vehi = new Vehicle();
//// $vehicle=$vehi->getCar();
////  $emparray = array();
//////  $myJSON = json_encode($row);
//////        echo $myJSON;
////
////if($vehicle->num_rows>0){
////    while ($row=$vehicle->fetch_assoc()){
////        $emparray[] = $row;
////        //print_r($row);
////      
////    }
////}
//// 
////        $myJSON = json_encode($emparray);
//////        echo "{carList:"+$myJSON+"}";
////         echo '{"CarListA":'.$myJSON."}";
        ?>


    <html>
        
        <head>
            <title>api testing</title>
            <style>
                     table,th,td{
             border: 1px solid black;
               }
            </style>
           
       </head>
       
        <body>
            <table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Php Name</th>
    <th>Php Data</th> 
  </tr>

      <?php
              while ($row=$result->fetch_assoc()){
          
                  echo "  <tr>";
                  echo "<td>".$row["id"]."</td>";
                  echo "<td>".$row["phpName"]."</td>";
                   echo "<td>".$row["phpData"]."</td>";
                   echo "</tr>";
               
    }
          ?>
   
   

</table>
        </body>
    </html>