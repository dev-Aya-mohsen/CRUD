<?php
   session_start();
    include 'lib.php';
    // include 'design/index.html';
    // if(!empty($_SESSION['user'])){
    //   header("LOCATION:index.php");
    //  }
 
    
    if(isset($_POST['send'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    // img 
    $img=$_FILES['img'];
    $img_name=$img['name'];
    $tmp=$_FILES['img']['tmp_name'];
    $type=$_FILES['img']['type'];
    $typeofarray=explode("/",$type);
    $ex=$typeofarray[1];
    $imgfullname= $username.".".$ex;
  


    $re=signup($username,$email,$password, $imgfullname);
      if($re == true){
        move_uploaded_file($tmp,'images/'.$username.".".$ex);
        echo "user added successfully";
      }else{
        echo "failed data ";
      }

    }

   




?>