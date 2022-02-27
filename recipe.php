<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Homemade Delicacies</title>
    <link rel="icon" type="image/png" href="spatula.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style type="text/css">

    

#hidden{
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
<body>



<!-- NAVIGATION BAR -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="homepage.php"><img height="35px" width="auto" style="margin:0 auto;position:relative;top:-5px;" src="lverlogo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="productdisplay.php"><form action="productdisplay.php" method="POST"><button type="submit" name="skincare" id="rembutton">Skincare</button></form></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productdisplay.php"><form action="productdisplay.php" method="POST"><button type="submit" name="lips" id="rembutton">Lip Lacquers</button></form></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productdisplay.php"><form action="productdisplay.php" method="POST"><button type="submit" name="perfume" id="rembutton">Perfumes</button></form></a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="skinform.php">Skin Form</a></li>
        <li><a href="#"><form action="extraforms.php" method="POST"><button id="rembutton" type="submit" name="faq">FAQ</button></form></a></li>
        <li><a href="#"><form action="extraforms.php" method="POST"><button id="rembutton" type="submit" name="feed">Feedback</button></form></a></li>

<?php

  if(isset($_SESSION['user_name'])){
echo '
      </ul>
  <form id="formlog" class="navbar-form navbar-right" action="logout.php" method="POST">
    <button type="submit" name="logout">Logout</button>
  </form>
  <ul class="nav navbar-nav navbar-right"><li><a>Hi there <span style="font-family:Font;color:#bb005f">' . $_SESSION["user_first"] . '</span>!</a></li></ul>';
  }
else {

  echo '        <li><a href="signup.php">Sign Up</a></li>
      </ul><form id="formlog" class="navbar-form navbar-right" action="dblogin.php" method="POST">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" name="login">Login</button>
        </form>';
}
  ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<h1 style="color:transparent;">Select the type of Product</h1>

<!-- imp -->
<p id="hidden" style="color:transparent;"></p>

<div id="tour" class="bg-1">
  <div style="background-color:rgba(103, 34, 67, 0.4);border:5px solid white;" class="container">
    <h1 style = "color:white;"class="text-center">Browse for Products</h1><hr>
    <select class="customsel" id="selects">

    <option value="skin">Skincare</option>
    <option value="lips">Lips</option>
    <option value="perfume">Perfume</option>
</select><br><br>
<p style="color:white;">Select a type of product to begin!</p>  <br>
    <div id="hiddenn" class="row text-center">
        <?php

            if (isset($_POST['skincare'])) {echo '<div class="col-sm-4">
        <div class="thumbnail">
          <img src="lver-medskinmois.jpg" alt="mois" width="300" height="300">
          <p>Moisturizer | Medium Skin</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="medmois">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lver-oilyskinmois.jpg" alt="mois" width="300" height="300">
          <p>Moisturizer | Oily Skin</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="medmois">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lver-dryskinmois.jpg" alt="mois" width="300" height="300">
          <p>Moisturizer | Dry Skin</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="medmois">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lver-medcla.png" alt="mois" width="300" height="300">
          <p>Clay Mask | Medium Skin</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="dryclay">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lver-oilycla.png" alt="mois" width="300" height="300">
          <p>Clay Mask | Oily Skin</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="dryclay">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lver-drycla.png" alt="mois" width="300" height="300">
          <p>Clay Mask | Dry Skin</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="dryclay">View Product</button></form>
        </div>
      </div>
      ';}
            if (isset($_POST['lips'])) {echo '<div class="col-sm-4">
        <div class="thumbnail">
          <img src="lipgorg.png" alt="mois" width="300" height="300">
          <p>Lip Lacquer | "Gorgeoeus"</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="liprose">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="liprose.png" alt="mois" width="300" height="300">
          <p>Lip Lacquer | "Rosetta"</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="liprose">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lipcherry.png" alt="mois" width="300" height="300">
          <p>Lip Lacquer | "Cherry"</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="liprose">View Product</button></form>
        </div>
      </div>';}
            if (isset($_POST['perfume'])) {echo '<div class="col-sm-4">
        <div class="thumbnail">
          <img src="classicper.jpg" alt="mois" width="300" height="300">
          <p>Perfume | "Classic"</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="classic">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="laceper.jpg" alt="mois" width="300" height="300">
          <p>Perfume | "Lace"</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="classic">View Product</button></form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="goldper.jpg" alt="mois" width="300" height="300">
          <p>Perfume | "Gold"</p>
          <form action="singleproduct.php" method="POST">
          <button class="btn" data-toggle="modal" data-target="#myModal" name="classic">View Product</button></form>
        </div>
      </div>





       ';}

        ?>
    </div>
  </div>
</div>



<script type="text/javascript">

    var xlm = new XMLHttpRequest();
    xlm.open("GET", "products.json", true);
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
                var product_value= select_option.value;
                var products = arr.products;
                len = products.length;
                p_hide.style.display= "block";
                select_hide.style.display= "block";
                var product_names;

                for(i = 0; i < products.length; i++){

                    if(products[i].product == product_value){
                            
                            var cdiv = document.createElement("div");
                            cdiv.setAttribute("class", "col-sm-4");
                            
                            var div = document.createElement("div");
                            div.setAttribute("class", "thumbnail");
                            
                            document.getElementById("hiddenn").appendChild(cdiv); 

                            cdiv.appendChild(div);

                            var img = document.createElement("img");
                            img.setAttribute("src", products[i].location); 

                            img.style.width = '300px';
                            img.style.height = '500px'; 

                             div.appendChild(img);

                             var p = document.createElement("p");
                             var ptext = document.createTextNode(products[i].name);   

                             p.appendChild(ptext); 

                             div.appendChild(p);

               var formm = document.createElement("form");

               formm.setAttribute("action", "singleproduct.php");
               formm.setAttribute("method", "POST");

               div.appendChild(formm);

                             var button = document.createElement("button");

                             button.setAttribute("class", "btn"); 
                             button.setAttribute("data-toggle", "modal"); 
                             button.setAttribute("data-target", "#myModal"); 
               button.setAttribute("name", products[i].href);
                              var btext = document.createTextNode("View Product");   

                             button.appendChild(btext); 

                             formm.appendChild(button);       

                    }
                }
            }

         }

    };

</script>

<!-- FOOTER -->

<nav class="navbar navbar-default">
  <div style="" class="container-fluid">
      <ul style="font-family:Font;" class="nav navbar-nav">
        <li><a href="#"><form action="extraforms.php" method="POST"><button id="rembutton" type="submit" name="privacy">Privacy Policy</button></form></a></li>
        <li><a href="#"><form action="extraforms.php" method="POST"><button id="rembutton" type="submit" name="terms">Terms & Conditions</button></form></a></li>
        <li><a href="#"><form action="extraforms.php" method="POST"><button id="rembutton" type="submit" name="feed">Feedback</button></form></a></li>
        <li><a href="#"><img style="width:22px;height:22px" src="fb.png"></a></li>
        <li><a href="#"><img style="width:20px;height:20px" src="insta.png"></a></li>
        <li><a href="#"><img style="width:20px;height:20px" src="twitter.png"></a></li></ul>
        <ul class="nav navbar-nav navbar-left:">
          <h6 style="color:grey;">We are a Pakistan based skincare and makeup company that wants the utmost best for its consumers! We care about your skin just as much as you care about your money, so trust us and we'll surely never disappoint you.</h6></ul>
      <ul class="nav navbar-nav navbar-right">
      <h6 style="margin:20px 0px;color:grey;">Copyright &copy 2019 LaViEnRose Cosmetics PK, Inc. All rights reserved.</h6></ul>
  </div>
</nav>

<body>
</html>