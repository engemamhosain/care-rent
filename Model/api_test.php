<?php
$path=realpath(dirname(__FILE__));
include_once ($path.'/../lib/Database.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api_test
 *
 * @author Dalwar
 */
class api_test {
   private $db;
    
    public function __construct() {
       $this->db = new Database();
    }

        //put your code here
    public function insert($phpName,$data){
        
       $result=print_r($data,true);
      // echo $result;
        $query = "INSERT INTO apitesting (phpName,phpData) VALUES('$phpName','$result')";
       $this->db->insert($query);

    }
}
