<?php
session_start();
$user=$_SESSION['userId'];
if(isset($_POST['comment-submit'])){


 require 'dbh.inc.php';


 $comment= $_POST['comment'];



 if(empty($comment)){

     
	  header("Location: ../RecipePage.php?error=emptyfields");
	 exit();

    } 



    else{


    	$sql="SELECT comment FROM comment WHERE comment=?";
    	$stmt=mysqli_stmt_init($conn);

    	if(!mysqli_stmt_prepare($stmt, $sql)){

    		 header("Location: ../RecipePage.php?error=sqlerroraaaaaaaaaa");

    		  exit();

    	}


    		else{



         

    			$sql="INSERT INTO comment (comment,iduser) VALUES (?, ?)";


    			$stmt=mysqli_stmt_init($conn);

    			if(!mysqli_stmt_prepare($stmt, $sql)){

    		 header("Location: ../RecipePage.php?error=sqlerror");

    		  exit();

    	       }

    	       else{

    	       

    	       	mysqli_stmt_bind_param($stmt,"ss", $comment, $user);

    		    mysqli_stmt_execute($stmt);

    		     header("Location: ../RecipePage.php?signup=success".$user);

    		     exit();

    	       }
    		}
    	
    }


   mysqli_stmt_close($stmt);
   mysqli_close();
}

else{

	 header("Location: ../RecipePage.php");

     exit();
}