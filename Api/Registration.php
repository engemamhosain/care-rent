<?php
$filepath = realpath(dirname(__FILE__));

include_once ($filepath.'/../Model/Customer.php');
include_once ($filepath.'/../Model/api_test.php');

$test=new api_test();
$test->insert("Login.php",$_GET);
$test->insert("Login.php",$_POST);

$customer =new Customer();
 echo $custLogin = $customer->customerRegistration($_POST);

if(isset($_GET['email']) && isset($_GET['pass'])){
 
    echo $custLogin = $customer->customerRegistration($_GET);
    
}else if (isset($_POST['email']) && isset($_POST['pass'])) {
     echo $custLogin = $customer->customerRegistration($_POST);
}
   
    

?>
