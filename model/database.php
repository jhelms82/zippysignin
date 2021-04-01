<?php
//local development server connection
// $dsn = 'mysql:host=localhost;dbname=zippy';
//$username = 'root';
//$password = 'sesame';

// Heroku connection

$dsn = 'mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uwcd6qpi5gyusjg7';
$username = 'pdriq8cuqelatgsw';
$password = 'q3toexl46xesn7ap';

try {
    //local development server connection
    //if using a $password, add it as 3rd parameter
//    $db = new PDO($dsn, $username, $password);

    // Heroku connection
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include('../view/error.php');
    exit();
}
?>