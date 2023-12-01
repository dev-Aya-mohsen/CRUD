<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>table</title>
    <style>
      .paragraph{
        font-size: 35px;
        font-weight: bold;
        color: cadetblue;
        margin-left: 600px;
        margin-top: 30px;
      }
      table{
       margin-right:10px;
       margin-left: 17px;
        
      }
    </style>
</head>
<body>
  <p class="paragraph">Data <span>List</span></p>
<table class="table table-striped" border="3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">ImageName</th>
       <th scope="col">Image</th>
      <th >Update</th>
      
      <th >delete</th>
      
     
    </tr>
  </thead>
  <tbody>
    
  <?php

  $data=Alldata();
   foreach($data as $user): ?>

    <tr>
        <td><?php echo $user['id'] ; ?></td>
        <td><?php echo $user['username'] ; ?></td>
        <td><?php echo $user['email'] ; ?></td> 
        <td><?php echo $user['img'] ; ?></td> 
        <td><?php  echo "<img src='images/".$user["img"]."' width=200 height=100>" ?></td>
        <?php
            
        
          echo '<td><a href="updateuser.php?pid='.$user["id"].'" class="btn btn-outline-success" role="button" aria-pressed="true">Update</a></td>';
          echo '<td><a href="delete.php?pid='.$user["id"].'" class="btn btn-outline-danger" role="button" aria-pressed="true">Delete</a></td>';
        
         
        


        ?>

   </tr>
  <?php endforeach ;  ?>
  </tbody>
</table>
</body>
</html>