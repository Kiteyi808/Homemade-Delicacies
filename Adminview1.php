
 <?php require 'header.php'; 

 ?>

<!DOCTYPE html>
<html>
<head>


  <link rel="process1.php">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

</script>
</head>



<body>


     
     <?php require_once 'process1.php'; ?>
   

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

     $result= $mysqli->query("SELECT * FROM recipe") or die($mysqli->error);

     
      //pre_r($result);
      ?>

   <div class="row justify-content-center">
  
     <table class="table">
        <thead>
          <tr>
            <th>Recipe Id</th>
            <th>Recipe Name</th>
            <th>Cuisine</th>
            <th>Duration</th>
            <th>No. of Ingredients</th>
            <th>Ingredients</th>
            <th>Instructions</th>
            <th>Image Link</th>
            <th>User Id</th>
            <th colspan="2"> Action </th>
          </tr>
        </thead>

        <?php
         
          while($row=$result->fetch_assoc()):

        ?>

        <tr>
         <td><?php echo $row['recipeid']; ?></td>
         <td><?php echo $row['recipeName']; ?></td>
         <td><?php echo $row['cuisine']; ?></td>
         <td><?php echo $row['duration']; ?></td>
         <td><?php echo $row['numingredient']; ?></td>
         <td><?php echo $row['ingredients']; ?></td>
         <td><?php echo $row['instructions']; ?></td>
         <td><?php echo $row['imagelink']; ?></td>
         <td><?php echo $row['iduser']; ?></td>


         <td>
           
          <a href="Adminview1.php?edit=<?php echo $row['recipeid']; ?>"; class="btn btn-info">Edit</a>

           <a href="process1.php?delete=<?php echo $row['recipeid']; ?>"; class="btn btn-danger">Delete</a>

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





   <div class="row justify-content-center">
    <form name="myForm" action="process1.php"  onsubmit="return validateForm()" method="POST">

       <input type="hidden" name="id" value="<?php echo $id; ?>">
       <div class="form-group">
           <label>Recipe Name</label>
               <input type="text" name="recipeName" class="form-control" value="<?php echo $recipeName;?>"> 
       </div>



       <div class="form-group">
           <label>Cuisine</label>
             <input type="text" id="cuiseine" name="cuisine" class="form-control" value="<?php echo $cuisine;?>" >
       </div>
  
     

       <div class="form-group">
         <label>Duration</label>
             <input type="text" id="duration" name="duration" class="form-control" value="<?php echo $duration;?>">
       </div>   

     

       <div class="form-group">
         <label>Number of Ingredients</label>
            <input type="text" id="numingredient" name="numingredient" class="form-control" value="<?php echo $numIng;?>">
       </div>

       <div class="form-group">
         <label>Ingredients</label>
            <input type="text" id="ingredients" name="ingredients" class="form-control" value="<?php echo $ing;?>" >
       </div>
       

       <div class="form-group">
         <label>Instructions</label>
            <input type="text" id="instructions" name="instructions" class="form-control" value="<?php echo $ins;?>">
       </div>

        
        <div class="form-group">
         <label>Link of image</label>
            <input type="text" id="imagelink" name="imagelink" class="form-control" value="<?php echo $imagelink;?>">
       </div>



       
     <div class="form-group">

        <?php 
         if ($update == true):

       ?>
          <button type="submit" class="btn btn-primary" name="update">Update</button>

      <?php 
        else:
       ?>

         <button type="submit" class="btn btn-primary" name="submit">Submit</button>


      <?php endif; ?>
     </div>
   
  </form>

 </div>
</div>


  


</div>




 <?php require 'footer.php'; ?>





</body>
</html>