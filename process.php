<?php 



  $mysqli = new mysqli('localhost','root','','webpdata') or die (mysql_error($mysqli));

 $id=0;
 $update=false;
 $username= '';
 $email= '';
 $password= '';
 $favc= '';
 



  if(isset($_GET['delete'])){
   
   $id=$_GET['delete'];
   $mysqli->query("DELETE FROM users WHERE iduser=$id") or die($mysqli->error);

  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";

  header("location:Adminview.php");

  }


 







  ?>


   



























