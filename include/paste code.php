		
    	
    
        else{


          

          $sql="INSERT INTO recipe (recipeName,cuisine,duration,numingredient,ingredients,instructions,imageLink,iduser) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


          $stmt=mysqli_stmt_init($conn);

          if(!mysqli_stmt_prepare($stmt, $sql)){

         header("Location: ../upload.php?error=sqlerror");

          exit();

             }

             else{

             

              mysqli_stmt_bind_param($stmt,"ssssssss", $recipeName, $cuisine, $duration ,$numIng, $Ing, $Ins, $imglink, $user);

              mysqli_stmt_execute($stmt);

             header("Location: ../upload.php?upload=success".$sql);

             exit();

             }
        }
        $recipeName= "'".$_POST['recipeName']."'";
 $cuisine= "'".$_POST['cuisine']."'";
 $duration= "'".$_POST['duration']."'";
 $numIng= "'".$_POST['numIng']."'";
 $Ing= "'".$_POST['Ing']."'";
 $Ins= "'".$_POST['Ins']."'";
 $imglink= "'".$_POST['imglink']."'";

$user="'".$_SESSION["iduser"]."'";
