<?php


  if(isset($_POST['login-submit'])){

   require 'dbh.inc.php';


   $emailuid= $_POST['emailuid'];
   $password= $_POST['pwd'];


   if(empty($emailuid) || empty($password)){

     
	   header("Location: ../login.php?error=emptyfields");

	 exit();

    }

    else{

       $sql="SELECT * FROM users WHERE username=? OR email=?;";
       $stmt=mysqli_stmt_init($conn);


      if(!mysqli_stmt_prepare($stmt, $sql)){

         header("Location: ../login.php?error=sqlerror");

	      exit();

      }

      else{

      	mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);

      	mysqli_stmt_execute($stmt);

      	$result=mysqli_stmt_get_result($stmt);


      	if($row=mysqli_fetch_assoc($result)){

          $pwdCheck= password_verify($password, $row['pwd']);

          if($pwdCheck == false){


          	header("Location: ../login.php?error=wrongpassword");

	        exit();
          }


          else if($pwdCheck == true){

            session_start(); 
            
            $_SESSION['userId'] =  $row['iduser'];
            $_SESSION['username'] =  $row['username'];



            
                $cookie_name = "Homemade Delicacies";
                $cookie_value = "Cookie Working";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


            
         if(!isset($_COOKIE[$cookie_name])) {



                header("Location: ../MainPAGE.php?login=successcookieset");
                        } 
                        else {
                   header("Location: ../MainPAGE.php?login=success");
                   }

        
	        exit();


          }


          else{

          	header("Location: ../login.php?error=wrongpassword");

	        exit();
          }

      	}

      	else{

      		header("Location: ../login.php?error=nouser");

	      exit();
      	}
         



      }



    }

  }


  else {
  	header("Location: ../login.php");

  	exit();

  }