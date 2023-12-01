<?php


function signup($username,$email,$password,$img){
    $conn=mysqli_connect("localhost","root","","crud");
    $insert="INSERT INTO `users` (`username`,`email`,`password`,`img`) VALUES('$username','$email','$password','$img')";
    $query=mysqli_query($conn,$insert);
    $res=mysqli_affected_rows($conn);
    if($res == 1){
    return true ;
    }
    else{
    return false;
    }
}




function login($email,$password){
    $conn=mysqli_connect("localhost","root","","crud");
    $select="SELECT * FROM  `users` WHERE `email`= '$email' AND  `password` ='$password' ";
    $myq=mysqli_query($conn,$select);
    $res= mysqli_fetch_assoc($myq);
     return $res;


}



function Alldata(){
    $conn=mysqli_connect("localhost","root","","crud");
    $select="SELECT `id` ,`username` ,`email` ,`img`  FROM  `users`";
    $myq=mysqli_query($conn,$select);
    $data = [];
    while($res= mysqli_fetch_assoc($myq)){
       $data[] = $res;
    }
    return $data;
    

}

 

