 



<!DOCTYPE html>
<html>
 
<body >

 <!-- particles.js container -->  
  

 	<?php 	



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM generation_scheduals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>generation_id</th>
    <th>schaduale_id</th>
    <th>schaduale_fitness</th>
    <th>schaduale_classes</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>".$row["generation_id"]."</td>
        <td>".$row["schaduale_id"]." </td>
        <td>".$row["schadual_fitness"]." </td>
        <td>".$row["schadual_classes"]." </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


   ?> 
  

   





 



</body>
</html>

 