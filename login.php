<?php
    include 'lib.php' ;
    session_start();

    if(!empty($_SESSION['user'])){
      header("LOCATION:index.php");
     }
    

    if($_POST['send']){
      $email =$_POST['email'];
      $password =$_POST['password'];
      
      $userdata=login($email,$password);

      if(!empty($userdata)){
        $_SESSION['user'] = $userdata;
        header("LOCATION:index.php");

      }else{
        echo "wrong in email or password please try again ";
      }











    }















?>