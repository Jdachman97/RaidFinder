<?php 
session_start();

?>
<!DOCTYPE html> 
<html>

    <body>
    <head>
    <meta charset="utf-8">
        <title> Hello header</title>
    
    
    
    </head>
<body>

    
    <header>
        
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="login-submit">Login</button>
        </form>
       
        <a href="signup.php">Signup</a>
        
       
        <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
        </form>
       
        
    
    
    </header>
    
