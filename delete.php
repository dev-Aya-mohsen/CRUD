<?php 
require 'lib.php';
$id=$_GET["pid"];
$del ="DELETE FROM `users` WHERE id='$id'" ;
$conn=mysqli_connect("localhost","root","","crud");
$result = mysqli_query( $conn,$del);
if($result){

    header("location:index.php");


}




?>