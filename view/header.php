

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <main>
        <header>
<?php
session_start();


if (!isset($_SESSION['name'])) {
    $url = "view/register.php";
    echo "<a href=$url>Register</a>";

} else {
    $userid = $_GET['name'];
    $_SESSION['name'] = $userid;
    echo "<h2>My name is $userid  <a href='view/logout.php'>(Log Out)</a></h2>";

}?>


            
       <h1>Zippy Used Autos</h1>
        </header>