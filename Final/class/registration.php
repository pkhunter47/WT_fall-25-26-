<?php

include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    if(empty($username)||empty($email)||empty($password)){
        $error="All fields are required.";

    }
    else{
        $hasshed_password=password_hash($password,PASSWORD_BCRYPT);

        $sql="INSERT INTO users (username,email,password) VALUES ('$username','$email','$hasshed_password')";

        if($conn->query($sql)){
            $success="Registration successful!";
        }
        else{
            $error="Error: ".$conn->error;

        }
    }




}




?>

<!DOCTYPE html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="">
        Username: <input type="text" name="username"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Register">
    </form>
    <p style="color:green;"><?php echo $success;?></p>
    <p style="color:red;"><?php echo $error;?></p>
</body>
</html>