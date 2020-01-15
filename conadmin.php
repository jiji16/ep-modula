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
 $username = "admin";
  $password = "admin";
    
    
if( isset($_POST['username']) && isset($_POST['password']) ){
 
        if($_POST['username'] == $username && $_POST['password'] == $password)
  


    
     
    
 
		{
			echo "Success";
            
                
        }
        else{ // Sinon
            echo "Failed";
        }
    }
?>

