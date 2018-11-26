<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "raidfinder";

$mysqli = NEW MySQLi($servername,$dbUsername,$dbPassword,$dbName);


$resultNew = $mysqli->query("SELECT players.idUsers AS id
FROM players
WHERE players.gameid = '1' AND players.roleid = '3'  ");

while($rows = $resultNew->fetch_assoc())
{
    $id = $rows['id'];
echo "<p>id: $id</p>";
}

?>
