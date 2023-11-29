<?php
include_once '../Model/Booking.php';
include_once '../Model/Reserve.php';
include_once ($filepath.'/../Model/api_test.php');
$test=new api_test();
$test->insert("AddBooking.php get",$_GET);
$test->insert("AddBooking.php post",$_POST);
$reserve=new Reserve();
$booking=new Booking();
//$booking->addBooking(44,100);
//$reserve->deleteCustomerReservation(44);
$booking->addBooking($_POST['reserve_id'],$_POST['cId']);
$reserve->deleteCustomerReservation($_POST['reserve_id']);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

