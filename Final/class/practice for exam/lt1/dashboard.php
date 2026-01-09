<?php
session_start();
if(!isset($_SESSION["username"]))
{

header("Location:login.php");
exit();

}
else{
    echo "Welcome to the Dashboard, " . $_SESSION["username"] . "! and the time is " . date("h:i:sa");
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
    <a href="view_profile.php">view profile</a>
    <a href="logout.php">Logout</a>

    
</body>
</html>