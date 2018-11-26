<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    
    
    </head>

<body>
    <table>
    <tr>
        <th>Users</th>
        
        
        
        
        
        </tr>
    <?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "raidfinder";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT uidUsers from users";
        $result = $conn-> query($sql);
    if ($result-> num_rows>0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["uidUsers"] ."</td></tr>";
        }
        echo "</table>";
    }  
        else {
            echo "0 result";
        }
    $conn-> close();
        ?>
    
        
    
    
    
    </table>
    
    
    </body>

</html>