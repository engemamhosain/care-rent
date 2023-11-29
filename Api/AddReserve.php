<?php
include '../Model/Reserve.php';
include_once ($filepath.'/../Model/api_test.php');
$reserve=new Reserve();
$test=new api_test();
$test->insert("AddReserve.php",$_GET);
$test->insert("AddReserve.php",$_POST);
// $reserve->addToReserve($_GET);
$reserve->addToReserve($_POST);