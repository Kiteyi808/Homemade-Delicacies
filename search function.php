





<!DOCTYPE html>
<html>
<head>
	


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>



<?php


 session_start();


  $mysqli = new mysqli('localhost','root','','assign') or die (mysql_error($mysqli));

    $output='';

 if(isset($_GET['search'])){
       $search= $_GET['search'];


        $query= $mysqli-> query("SELECT * FROM customer WHERE Name LIKE '%$search%'") or die($mysqli->error);


        $count = mysqli_num_rows($query);


        if($count==0){

          echo "$search";
        }


       else{



        while($row=mysqli_fetch_array($query)){

      $name=$row['Name']; 
      $country= $row['Country'];
      $city= $row['City']; 
      $favc= $row['Color']; 

      $output.='<div>'.$name.' '.$country.' '.$city.' '.$favc.'</div>';


        }


       }


     }


     ?>


<body>


	<div class="row justify-content-center">
  <form name="myForm1" action="process.php"  method="POST">

  <div class="form-group">  
 <label>Search</label>
 <input type="text" name="s" class="form-control">
</div>

 <button type="search" class="btn btn-primary" name="search">Search</button>
   


 </div>

<?php print("$output");?>


</body>














</html>