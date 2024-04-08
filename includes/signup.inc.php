<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $_USERNAME=$_POST['username'];
    $_MOBILE_NUMBER=$_POST['mobile_number'];
    

    require_once '../classes/Db.php';
  
    require_once '../classes/Signup.php';
   
    $signup= new Signup($_USERNAME,$_MOBILE_NUMBER);
   
    $signup->faults();
}