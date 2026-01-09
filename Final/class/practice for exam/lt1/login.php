<?php

session_start();

if(isset($_SESSION["username"])){
    header("Location:dashboard.php");
    exit();

}
else{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user=$_POST["username"];
        $pass=$_POST["password"];

        if($user=="admin" && $pass=="admin123"){

        $timezone = new DateTimeZone("Asia/Dhaka");
        $datetime = new DateTime();
            $_SESSION["username"]=$user;
            $_SESSION["login-time"]= $datetime->setTimezone($timezone)->format("Y-m-d H:i:s");
            $_SESSION["user-role"]="administrator";
            header("Location:dashboard.php");
            exit();

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" name="loginform">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>