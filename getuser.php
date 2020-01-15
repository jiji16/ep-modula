<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','myDB');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


mysqli_select_db($con,"myDB");
$sql="SELECT * FROM visiteur WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>lname</th>
<th>fname</th>
<th>lmail</th>
<th>subject</th>
<th>datenvoie</th>
<th>heurenvoie</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lmail'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['datenvoie'] . "</td>";
	echo "<td>" . $row['heurenvoie'] . "</td>";
	
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>