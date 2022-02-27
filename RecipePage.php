<!DOCTYPE html>


<html>

<head>

<title>Homemade Delicacies</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/RecipePagecss.css">

<style>




</style>


</head>

<body>

<?php 

require "header.php";

?>



<!--header close-->

<div class="row"><div class="col-12 bgimg" style="height: 1000px; padding: 100px;">


<div class="col-11 op" style="height: 850px;background-color: white; border: 2px solid #b3003b;">
<br>

<img class="relative col-9" src="image/eggbg.jpg" style="height: 350px; margin-right: 500px;" >

 

<div class="col-9"><h1 id="color" class="center re"><u>Fried Egg</u></h1></div>
  
<div  class="col-10 r" style="height: 320px; border: 1px solid #b3003b; ">
 <table class="ab ba" style="background-color:white;"><tr><td class="tc1">Name of Dish : </td><td class="tc2"> Fried Egg (circular)</td></tr>

  <tr><td class="tc1">  Cuisine : </td><td class="tc2">Mexican</td></tr>
  <tr><td class="tc1">  Duration : </td><td class="tc2">2 minutes</td></tr>
  <tr><td class="tc1">  Expected Price : </td><td class="tc2">Rs 20</td></tr>
  <tr><td class="tc1">   Number of Ingredients: </td><td class="tc2">1</td></tr>
  <tr><td class="tc1">  Ingredients : </td><td class="tc2">2 eggs</td></tr>
  <tr><td class="tc1">  Instructions : </td><td class="tc2"> Turn on stove heat pan for a minute. put oil in pan and place 2 cookie cutters and crack 
  the eggs in the cookie cutters. Fry according to preference and serve.</td></tr></table>


</div>


</div></div></div>



 
<br><br>



</div></div>


<?php  

   if(isset($_SESSION['userId'])){




echo '<div class="container-login100">
      <div class="wrap-login100 op" style="width:100%;">

        <form class="login100-form validate-form " action="include/comment.inc.php" method="post">
          <br>
          <span class="login100-form-title p-b-26 " style="text-align: left;">
            <h4 class=" font">Comment</h4>
          </span>

                      


                      
          
                    <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="comment" style="height:100px;">
            <span class="focus-input100"></span>
          </div>

                       

          

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn" style="align-items: left; width: 20%;">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" type="submit" name="comment-submit" >
                Comment
              </button>
            </div>
          </div>

          
        </form>

       


      </div>
    </div>';


}

else{

}



  ?>



<!--Footer-->

 <?php 

require "footer.php";

?>
</body>


</html>
