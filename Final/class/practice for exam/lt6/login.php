<?php
session_start();

if(isset($_COOKIE["username"])){


$savedusername = $_COOKIE["username"];

$_SESSION["username"] = $savedusername;

}
else{
$savedusername = "";



}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with cokkie and session</title>
</head>
<body>
    <form action="process_login.php" method="post">
        <label >UserName:</label>
        <input type="text" name="username" placeholder="Enter user"><br><br>
        <label >Password:</label>
        <input type="password" name="password" placeholder="Enter password"><br><br>
        <Label>Remember me:</Label>
        <input type="checkbox" name="remember_me" value="1"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>