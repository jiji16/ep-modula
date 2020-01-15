<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"

$sql = "SELECT *
FROM visiteur WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($lname, $fname, $lmail, $subject, $datenvoie, $heurenvoie, $adip);
$stmt->fetch();
$stmt->close();
echo "<table>
<tr>
<th>lname</th>
<th>fname</th>
<th>lmail</th>
<th>subject</th>
<th>datenvoie</th>
<th>heurenvoie</th>
<th>adip</th>
</tr>";
mysqli_close($con);
?>
