<?php

    session_start();
   include 'lib.php';
   include 'design/table.php';
   
    if(empty($_SESSION['user'])){
     header("LOCATION:design/index.html");
    }



    
     $data=Alldata();
     

    
 
     

    

 















?>