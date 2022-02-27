<!DOCTYPE html>
<html lang="en">

<head>
	<title>Homemade Delicacies| Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mexicancss.css">
<!--===============================================================================================-->



<style>#hidden{
		display: none; }

.btn-default:active{background-color:#800040; outline: none;
.form-control:focus{border-color: #800040;  box-shadow: none;} box-shadow: none !important;}
.btn-default:hover{background-color: #bb005f;}

body {
	 margin-top: 50px;
    background-size: cover;
    background-attachment: fixed; 
    background: url(shineyy.jpg);
    overflow-x: hidden;
}

@font-face {
  font-family: Font;
  src: url(Pacifico-Regular.ttf);
}

.navbar-default{background-color:white;}

#formlog input{
    border: 1 px;
    border-color: #ed7dac;
    padding-top: 140px;
    height: 30px;
    padding: 0px 10px;
    margin-right: 10px;
    font-family: : arial;
    font-size: 14px;
    color: grey;
    line-height: 30px;
    background-color: white;
      box-shadow: none;
  outline: none;
}

#formlog button{
    width:60px;
    height: 30px;
    border: none;
    font-family: : arial;
    font-size: 14px;
    color: white;
    line-height: 30px;
    background-color: #bb005f;
    cursor: pointer;
      box-shadow: none;
  outline: none;
}

#formlog button:hover{
  background-color: #800040;
}

#formlog button:active{
  box-shadow: none;
  outline: none;
}

#formlog input:focus{
  background-color: #f3f3f3;
  border-color: #bb005f;  
  box-shadow: none;
  outline: none;}


 h1{
    margin: -30px 0 40px 0;
    font-family: Font;
    color: #800040;
  }
  .container {
    background: white;
    padding: 80px 120px;
  }
 
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
 
  }

  .bg-1 {
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}

  .thumbnail {
    padding: 0 0 15px 0;
    border: 1 px solid;
    border-color: #800040;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #800040;
    color: white;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #800040;
    background-color: #fff;
    color: #800040;
  }

  #rembutton{
  background: none;
  color: inherit;
  border: none;
  padding: 0;
  font: inherit;
  cursor: pointer;
  outline: inherit;
}

.customsel{
	border: 2 px;
    border-color: #800040;
    padding-top: 140px;
    height: 40px;
    width:200px;
    padding: 0px 10px;
    margin-right: 10px;
    font-family: Font;
    font-size: 20px;
    color: #800040;
    line-height: 40px;
    background-color: white;
    box-shadow: none;
    outline: none;
}

#bla {
  color:inherit;
  text-decoration: none; }
</style>





</head>


<script src="angular-1.3.14.js"></script>

<body>
 <?php 

require "header.php";

?>

<div class="" >
             <div style="width: 100%;" class="">
<div class="" style="padding: 0px;margin: 0px;"><h2 style="text-align: center; color:#b3003b;padding: 0px;"><hr style="border:1px solid #b3003b;"> Recipies 
  <hr style="border:1px solid #b3003b;"></h2></div></div>
			<div>

<p id="hidden" style="color:transparent;"></p>

<div id="tour" class="bg-1" style=" border: 3px solid #b3003b; opacity:0.92; background-image: url('image/me.jpg');">
  <div style="background-color:#b3003b; border:0px solid white;" class="container">
  
    <select class="customsel" id="selects">
     
	<option value="chinese">Chinese</option>
	<option value="mexican">Mexican</option>
	<option value="pakistani">Pakistani</option>
</select><br><br>
    <div id="hiddenn" class="row text-center">
   

        <div class="col-sm-4">
        <div class="thumbnail">
        	<a href="">
          <img src="image/f3.jfif" alt="mois" width="300" height="300"></a>
          <p>Chicken Burrito</p>
          <form action="RecipePage.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="chinese">View</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/kebab.jpg" alt="mois" width="300" height="300">
          <p>Stuffed Chicken Burrito</p>
          <form action="RecipePage.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="chinese">View</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/burger.jpg" alt="mois" width="300" height="300">
          <p>Beef Burger with Potato Wedges</p>
          <form action="RecipePage.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="chinese">View</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/kebab.jpg" alt="mois" width="300" height="300">
          <p>Chicken Roll Paratha</p>
          <form action="RecipePage.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="mexican">View</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/f3.jfif" alt="mois" width="300" height="300">
          <p>Beef Shawarma</p>
          <form action="RecipePage.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="mexican">View</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/choc.jpg" alt="mois" width="300" height="300">
          <p>Chocolate Dessert</p>
          <form action="RecipePage.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="pakistani">View</button></form>
        </div>
      </div>
      
    
    

    	
    </div>
  </div>

</div>
	


<script type="text/javascript">

	var xlm = new XMLHttpRequest();
	xlm.open("GET", "recipes.json", true);
	xlm.send();

	xlm.onload=function(){
		if(xlm.status == 200){

			var arr = JSON.parse(xlm.responseText);
			var select_option=document.getElementById("selects");
			var select_hide=document.getElementById("hiddenn");
			var p_hide=document.getElementById("hidden");
			

			select_option.addEventListener("click", f1);

			function f1(){
				list = document.getElementById("hiddenn");

				while (list.hasChildNodes()) {
				    list.removeChild(list.lastChild);
				}

				var recipe_value= select_option.value;

				var recipes = arr.recipes;
				len = recipes.length;
				p_hide.style.display= "block";
				select_hide.style.display= "block";
				var recipe_names;
              
				for(i = 0; i <len; i++){

					if(recipes[i].recipe == recipe_value){
							
							var cdiv = document.createElement("div");
							cdiv.setAttribute("class", "col-sm-4");
        					
							var div = document.createElement("div");
							div.setAttribute("class", "thumbnail");
							
							document.getElementById("hiddenn").appendChild(cdiv); 

							cdiv.appendChild(div);

							var img = document.createElement("img");
							img.setAttribute("src", recipes[i].location); 

							img.style.width = '300px';
							img.style.height = '300px'; 

							 div.appendChild(img);

							 var p = document.createElement("p");
							 var ptext = document.createTextNode(recipes[i].name);   

							 p.appendChild(ptext); 

               

							 div.appendChild(p);

               var formm = document.createElement("form");

               formm.setAttribute("action", "RecipePage.php");
               formm.setAttribute("method", "POST");

               div.appendChild(formm);

							 var button = document.createElement("button");

							 button.setAttribute("class", "btn"); 
							 button.setAttribute("data-toggle", "modal"); 
							 button.setAttribute("data-target", "#myModal"); 
               button.setAttribute("name", recipes[i].href);
							  var btext = document.createTextNode("View Product");   

							 button.appendChild(btext); 

							 formm.appendChild(button);       

					}
				}
			}

		 }

	};

</script>


<?php 

require "footer.php";

?>
</body>

</html>