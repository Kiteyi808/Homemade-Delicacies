<!DOCTYPE html>
<html>
<head>


  


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

    <?php require 'header.php'; ?>

    <?php require 'process.php'; ?>

    <?php 


      if(isset($_SESSION['message'])):
     ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
      

      <?php 

         echo $_SESSION['message'];
         unset($_SESSION['message']);
       ?>

    </div> 


    <?php endif ?>



<div class="" >
             <div style="width: 100%;" class="">
<div class="" style="padding: 0px;margin: 0px;"><h2 style="text-align: center; color:#b3003b;padding: 0px;"><hr style="border:1px solid #b3003b;"> Admin View
  <hr style="border:1px solid #b3003b;"></h2></div></div>
      <div>


        <div class="container-fluid">
<div class="row"><div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 navbar" >
<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"><a  href="Adminview.php" class=" font">Users</a> </div>
<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"><a  href="Adminview1.php" class=" font">Recipes</a> </div>
<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"> <a href="Adminview2.php" class=" font">Comments</a></div>


</div>

    <div class="container">

   <?php 
  $mysqli = new mysqli('localhost','root','','webpdata') or die (mysql_error($mysqli));

     $result= $mysqli->query("SELECT * FROM users") or die($mysqli->error);

     
      
    ?>

   <div class="row justify-content-center">
  
     <table class="table">
        <thead>
          <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2"> Action </th>
          </tr>
        </thead>

        <?php
         
          while($row=$result->fetch_assoc()):

        ?>

        <tr>
         <td><?php echo $row['iduser']; ?></td>
         <td><?php echo $row['username']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['pwd']; ?></td>
         <td>
           
          

           <a href="process.php?delete=<?php echo $row['iduser']; ?>"; class="btn btn-danger">Delete</a>

         </td>
        </tr>

        <?php  endwhile; ?>
       
     </table>

   </div>



   <?php
   pre_r($result->fetch_assoc());
 
   function pre_r($array){

      echo '<pre>';
      print_r($array);
      echo '</pre>';
   }

   ?>

  
    </div>     

    </div>

</div>





 <?php require 'footer.php'; ?>



</body>
</html>