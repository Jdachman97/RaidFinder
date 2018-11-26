<html>
<head>
    <title> Login </title>
    
    <link rel = "stylesheet" type="text/css" href="loginStyle.css">
    <body>
 <!-- top navigation    -->   
    <div class = "logo"> 
              <img src= "logo.png">
            </div>
            <ul class = "navigation" >
                <li> <a href ="home.html"> HOME </a></li>
                <li class = "active" > <a href ="index.php"> LOGIN </a></li>
             <li> <a href ="roleSearch.html"> ROLE SEARCH </a>
                </li>
                <li> <a href ="profile.php"> PROFILE </a>
                 
            </ul>
        
<!-- Login   --> 
<div class = "loginbox">        
        <h1>LOGIN</h1>

<?php
   
require "header.php";
?>

<main>
    <?php
    if(isset($_SESSION['userId'])) {
         echo '<p class="login-status">You are logged in</p>';
        echo ($_SESSION['userId']);
    }
    else {
        echo '<p class="login-status">You are logged out</p>';
    }
    ?>


</main>

<?php
require "footer.php";
?>
    
        </div>     
    </body>
    </head> 
</html>