<?php include 'inc/header.php';?>

<?php
    $login = Session::get("cuslogin");
    if($login == true){
        header("Location:bookingdetails.php");
    }
 ?>
 
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $custLogin = $cmr->customerLogin($_POST);
    }
?>
<?php
print_r ($_GET);
if(isset($_GET['email']) && isset($_GET['pass'])&& isset($_GET['pass1'])){
    echo "success";
}
    if ($_SERVER['REQUEST_METHOD'] == 'get' && isset($_GET['login'])) {
        $custLogin = $cmr->customerLogin($_GET);
    }
    
?>

	
<div class="loginDiv" align="center">

<?php 
    if (isset($custLogin)) {
        echo $custLogin;
    }

 ?>
  
  <form action="" method="post">
    <h3>Sign In</h3>
    <input type="text" name="email" placeholder="Email" class="SignInEmail">
    <input type="password" name="pass" placeholder="Password" class="SignInPass">
     <input type="submit" name="login" value="Sign In" class="submit3">
    <p>Don't Register Sing Up Here <a href="index.php#goToReg"> here</a></p>
    </form>
    
</div>
 


<br><br><br>
	
<?php include 'inc/footer.php';?>