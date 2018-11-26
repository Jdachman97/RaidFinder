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
                <li  > <a href ="index.php"> LOGIN </a></li>
             <li class = "active"> <a href ="roleSearch.html"> ROLE SEARCH </a></li>
                 
            </ul>
        
<!-- Login   --> 
<div class = "loginbox">        
        <h1>Overwatch</h1>
        <h3>DPS </h3>



<main>
   <?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "raidfinder";

$mysqli = NEW MySQLi($servername,$dbUsername,$dbPassword,$dbName);


$resultNew = $mysqli->query("SELECT players.idUsers AS id
FROM players
WHERE players.gameid = '1' AND players.roleid = '2'  ");

while($rows = $resultNew->fetch_assoc())
{
    $id = $rows['id'];
echo "<p>id: $id</p>";
}

?>
