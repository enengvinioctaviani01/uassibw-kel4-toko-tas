<?php
/**
 * using mysqli_connect for database connection
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "la_vira";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//// Create database
//$sql = "CREATE DATABASE La_Vira";
//if ($mysqli->query($sql) === TRUE) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . $mysqli->error;
//}

//$mysqli->close();

$sql = "SELECT * from user";
$result = $conn->query($sql);

foreach($result as $i){
    echo 'no: '.$i['id'].'; username: '.$i['username'].'; password: '.$i['password'].'; Full Name: '.$i['full_name'];
    echo '<br/><br/>';
}

$conn->close();


?>
