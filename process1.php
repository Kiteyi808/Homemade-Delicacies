<?php 

  $mysqli = new mysqli('localhost','root','','webpdata') or die (mysql_error($mysqli));

 $id=0;
 $update=false;
    $recipeName = '';
    $cuisine = '';
    $duration = '';
    $numIng = '';
    $ing = '';
    $ins = '';
    $imagelink = '';
 
 



  if(isset($_POST['submit'])){

  
  	$recipeName = $_POST['recipeName'];
  	$cuisine = $_POST['cuisine'];
  	$duration = $_POST['duration'];
    $numIng = $_POST['numingredient'];
    $ing = $_POST['ingredients'];
    $ins = $_POST['instructions'];
    $imagelink = $_POST['imagelink'];
    

 
   $mysqli-> query("INSERT INTO recipe (recipeName, cuisine, duration, numingredient, ingredients, instructions, imagelink, iduser) VALUES ('$recipeName','$cuisine','$duration','$numIng','$ing','$ins','$imagelink','1');") or die($mysqli->error);


  $_SESSION['message'] = "Record has been saved";
  $_SESSION['msg_type'] = "success";

  header("location:Adminview1.php");

  }


  if(isset($_GET['delete'])){
   
   $id=$_GET['delete'];
   $mysqli->query("DELETE FROM recipe WHERE recipeid=$id") or die($mysqli->error);

  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";

  header("location:Adminview1.php");

  }


  if(isset($_GET['edit'])){
   
     $id=$_GET['edit'];


     echo $id;
     $update=true;
     $result= $mysqli->query("SELECT * FROM recipe WHERE recipeid=$id") or die($mysqli->error());



     if($result!=""){

      $row=$result->fetch_array();

     $recipeName = $row['recipeName'];
    $cuisine = $row['cuisine'];
    $duration = $row['duration'];
    $numIng = $row['numingredient'];
    $ing = $row['ingredients'];
    $ins = $row['instructions'];
    $imagelink = $row['imagelink'];
   
     }




     }


   if(isset($_POST['update'])){

     $id=$_POST['id']; 
   
    $recipeName = $_POST['recipeName'];
    $cuisine = $_POST['cuisine'];
    $duration = $_POST['duration'];
    $numIng = $_POST['numingredient'];
    $ing = $_POST['ingredients'];
    $ins = $_POST['instructions'];
    $imagelink = $_POST['imagelink'];
    
  	 $mysqli-> query("UPDATE recipe SET recipeName='$recipeName', cuisine= '$cuisine', duration='$duration', numingredient='$numIng' , ingredients='$ing' , instructions='$ins' , imagelink='$imagelink' , iduser='1' WHERE recipeid= $id") or die($mysqli->error);

     $_SESSION['message'] = "Record has been updated";
     $_SESSION['msg_type'] = "warning";

     header("location:Adminview1.php?recipeid=".$id);

     }





  ?>


   



























