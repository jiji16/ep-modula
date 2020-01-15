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
echo "Connected successfully";


/*

// sql to create table
//$sql = "CREATE TABLE MyGuests5 (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " ;
}
*/
$date = date("d-m-Y");
$heure = date("H:i");


	$ip=$_SERVER['REMOTE_ADDR'];


if (isset ($_POST['envoyer'])){
                $sth = $dbh->prepare("INSERT INTO visiteur (firstname,lastname,email,message,datenvoie,heurenvoie,adip) VALUES(?,?,?,?,$date ,$heure,$ip)");
                $sth->execute(array($_POST['lname'], $_POST['fname'], $_POST['lmail'],$_POST['subject']));
	echo "insertion réussite " ;
            }



header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 

$variable1 = (isset($_GET["lname"])) ? $_GET["lname"] : NULL;
$variable2 = (isset($_GET["fname"])) ? $_GET["fname"] : NULL;
$variable3 = (isset($_GET["lmail"])) ? $_GET["lmail"] : NULL;
$variable4 = (isset($_GET["subject"])) ? $_GET["subject"] : NULL;
if ($variable1 && $variable2 && $variable3 && $variable4){
	
	echo "Formulaire bien envoyé";
} else {
	echo "Problème d'envoie, réassayer plus tard";
}
$conn->close();
?>
