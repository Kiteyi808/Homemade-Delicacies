<?php 



  $mysqli = new mysqli('localhost','root','','webpdata') or die (mysql_error($mysqli));





  if(isset($_GET['delete'])){
   
   $id=$_GET['delete'];
   $mysqli->query("DELETE FROM comment WHERE commentid=$id") or die($mysqli->error);

  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";

  header("location:Adminview2.php?id=".$id);

  }


 







  ?>




   



























