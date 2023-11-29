<?php
include_once '../lib/Database.php';
 
class Booking{
   
    public $db;
    public function __construct() {
        $this->db= new Database();
 
    }
    public function addBooking($reserveId,$customerId){
                $sql="INSERT INTO `tbl_booking`"
                        . "(`cusId`, `vehicleId`, `vehicleName`, `tryTrip`, `vehicleNumber`, `datePick`, `timePick`, `pickAdd`, `endAdd`,`rate`, `image`, `date`, `status`)"
          . " SELECT  $customerId, `vehicleId`, `vehicleName`, `tryTrip`, `vehicleNumber`, `datePick`, `timePick`, `pickAdd`, `endAdd`, `rate`, `image`,'2017','0'"
                        . " FROM `tbl_reserve` WHERE reserveId=$reserveId";  
                        $data=$this->db->insert($sql);
        print_r($data);
                
//        $sql="insert into TABLEA (COL1, COL2, COL3, COL4)
//select COL1, COL2, COL3, 1
//from TABLEB;"
//        $reserve_sql="select *from tbl_reserve where reserveId=$reserveId";
//        $data=$this->db->select($reserve_sql)->fetch_assoc();
//        print_r($data);
//        $cusId=data['cusId'];
//        $vehicleId=data['vehicleId'];
//        $vehicleName=data['vehicleName'];
//        $tryTrip=data['tryTrip'];
//        $pickAdd=data['pickAdd'];
//        $endAdd=data['endAdd'];
//        $datePick=data['datePick'];
//        $timePick=data['timePick'];
//        $vehicleNumber=data['vehicleNumber'];
//        $rate=data['rate']; 
//        $image=data['cusId']; 
//        $date=data['date']; 
//        $status=data['status']; 
//        
//        $sql="INSERT INTO `tbl_booking`(`cusId`, `vehicleId`, `vehicleName`, `tryTrip`, `pickAdd`, `endAdd`, `datePick`, `timePick`, `vehicleNumber`, `rate`, `image`, `date`, `status`) VALUES"
//                . "                     ('$cusId,[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14])";
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

