<?php
    include 'lib.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST["id"];
    $sql=" SELECT * FROM `users` WHERE id='$id' ";
    $conn=mysqli_connect("localhost","root","","crud");
    $result = mysqli_query( $conn,$sql);
    $row = mysqli_fetch_array($result);
//update 
$update= mysqli_query($conn,"UPDATE `users` SET `username`='$username',`email`='$email',`password`='$password' WHERE id ='$id' ");
 if($update){
   header("location:index.php");
  
 }

?>