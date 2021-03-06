<?php 

require "header.php"

?>

<main>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homemade Delicacies| Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mexicancss.css">
<!--===============================================================================================-->
<style>
	
input[type=text], input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}	

.login100-form-avatar {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto;
}
.login100-form-avatar img {
  width: 100%;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  
  position: relative;
  z-index: 1;
}




 @font-face {
    font-family: myFont;
    src: url(font/GreatVibes-Regular.ttf);
}






@font-face {
    font-family: myFonts;
    src: url(font/Absolut_Pro_Medium_reduced.ttf);
}

.heading{
text-align: center; color:white;
font-family: myFont;
font-size: 30pt;

}

.coloraa{

color: #b3003b;
}


.font{


	font-family: myFonts;
}


.op

{opacity: 0.85;}

.login100-form-bgbtnww {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #a64bf4;
  background: -webkit-linear-gradient(right, #b3b3b3, #ffffff, #b3b3b3, #ffffff);
  background: -o-linear-gradient(right, #b3b3b3, #ffffff, #b3b3b3,#ffffff);
  background: -moz-linear-gradient(right, #b3b3b3, #ffffff, #b3b3b3,#ffffff);
  background: linear-gradient(right,#b3b3b3,#ffffff,#b3b3b3,#ffffff);
  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

</style>
</head>
<body>



<?php




 $user=$_SESSION['userId'];


echo $user."kjsdhsjhskejfskgjhfjsuegvjshfuidbhajgnjsdnksjgn";



                       ?>

	
	<div class="limiter">

</div>
		<div class="container-login100" style="background-image: url('image/sushi.jpg');">
			<div class="wrap-login100 op">

				<form class="login100-form validate-form " action="include/signup.inc.php" method="post">

					<div class="login100-form-avatar">
						<img src="image/spatula.png" alt="AVATAR">
					</div>
					<br>
					<span class="login100-form-title p-b-26 ">
						<h4 class=" font">index</h4>
					</span>
					
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="uid">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pwd">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pwd-repeat">
						<span class="focus-input100" data-placeholder="Re-enter password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="signup-submit">
								Signup
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don???t have an account?
						</span>

						<a class="txt3" href="#">
							Sign Up
						</a>
					</div>
				</form>


			</div>
		</div>

	
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
</main>

<?php
require "footer.php";

?>