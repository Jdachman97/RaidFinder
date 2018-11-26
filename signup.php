<html>
<head>
   
    
    <link rel = "stylesheet" type="text/css" href="loginStyle.css">
    <body>
 <!-- top navigation    -->   
    <div class = "logo"> 
              <img src= "logo.png">
            </div>
            <ul class = "navigation" >
                <li> <a href ="home.html"> HOME </a></li>
                <li class = "active" > <a href ="index.php"> LOGIN </a></li>
             <li> <a href ="roleSearch.html"ga> ROLE SEARCH </a></li>
                 
            </ul>
        
<!-- Login   --> 
<div class = "loginbox">        
     


<?php
require "header.php";
?>



<main>
     <div class = "signupform">

    <form action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
    <button type="submit" name= "signup-submit">Signup</button>
    </form>
    </div>
</main>

<?php
require "footer.php";
?>
        </div>
    </body>
    </head>
</html>