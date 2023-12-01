<?php
    
  
    if(isset($_GET["pid"])){
        $id = $_GET["pid"];
        include 'lib.php';

        $sql=" SELECT * FROM `users` WHERE id='$id' ";
        $conn=mysqli_connect("localhost","root","","crud");
        $result = mysqli_query( $conn,$sql);
        $row = mysqli_fetch_array($result);
       ?>



    






    


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         
        <title>update</title>
    </head>
    <body>
        <form action="update.php" method="post">
        
           Username:<input type="text" name="username"placeholder="username" value="<?php echo $row["username"]; ?>" >
            <br><br>
            
           Email: <input type="text" name="email" placeholder="Email"   value="<?php echo $row["email"]; ?>" >
            <br><br>
            Password:<input type="text" name="password" placeholder="password"   value="<?php echo $row["password"]; ?>" >
            <br><br>
            <input type="hidden" value="<?php echo $row['id'];?>" name="id"><br>
            <button type="submit" name="btn_upd">Update</button>
            </form>
    </body>
    </html>
 <?php
        }
        else{
            header("location:design/table.php");
        }
    ?> 






























