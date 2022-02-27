<?php 

session_start();
$userId = $_SESSION['userId'];
  $mysqli = new mysqli('localhost','root','','webpdata') or die (mysql_error($mysqli));

 $id=0;
 $update=false;
 $name= '';
 $country= '';
 $city= '';
 $favc= '';
 
 



  if(isset($_POST['submit'])){

  
  	$recipeName = $_POST['recipeName'];
  	$cuisine = $_POST['cuisine'];
  	$duration = $_POST['duration'];
    $numIng = $_POST['numingredient'];
    $ing = $_POST['ingredients'];
    $ins = $_POST['instructions'];
    $imagelink = $_POST['imagelink'];
    

 
   $mysqli-> query("INSERT INTO recipe (recipeName, cuisine, duration, numingredient, ingredients, instructions, imagelink, iduser) VALUES ('$recipeName','$cuisine','$duration','$numIng','$ing','$ins','$imagelink',' $userId');") or die($mysqli->error);


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
   
   $recipeName = $_POST['recipeName'];
    $cuisine = $_POST['cuisine'];
    $duration = $_POST['duration'];
    $numIng = $_POST['numingredient'];
    $ing = $_POST['ingredients'];
    $ins = $_POST['instructions'];
    $imagelink = $_POST['imagelink'];
    $userId = $_SESSION['iduser'];

  	 $mysqli-> query("UPDATE customer SET recipeName='$recipeName', cuisine= '$cuisine', duration='$duration', numingredient='$numIng' , ingredients='$ing' , instructions='$ins' , imagelink='$imagelink' , iduser='$userId' WHERE recipeid= $id") or die($mysqli->error);

     $_SESSION['message'] = "Record has been updated";
     $_SESSION['msg_type'] = "warning";

     header("location:Adminview1.php");

     }





  ?>


   



























