<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("Location:login.php");
    exit();

}else{
    echo "NAME: " . $_SESSION["username"] . "<br>";
    echo"TIME: " . date("h:i:sa") . "<br>";
    echo"Role: " . $_SESSION["user-role"] . "<br>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="dashboard.php">Dashboard</a>
    <a href="logout.php">Logout</a>


    
</body>
</html>