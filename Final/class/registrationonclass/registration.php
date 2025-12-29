<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $id=$_POST["id"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirm_password=$_POST["confirm_password"];
    $dob=$_POST["dob"];

    if(empty($id)||empty($username)||empty($email)||empty($password)||empty($confirm_password)||empty($dob)){
        $error="All fields are required.";
    }
    elseif($password!=$confirm_password){
        $error="Passwords do not match.";
    }
    else{
        $hashed_password=password_hash($password,PASSWORD_BCRYPT);

        $sql="INSERT INTO tbl(id,username,email,password,dob) VALUES ('$id','$username','$email','$hashed_password','$dob')";

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
<html>
<head>
    <title>registration</title>
</head>
<body>
    <center>
        <h2>Registration Form</h2>
    </center>

    <form method="post" action="">
        ID: <input type="text" name="id"><br><br>
        Username: <input type="text" name="username"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        Confirm Password: <input type="password" name="confirm_password"><br><br>
        DOB: <input type="date" name="dob"><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>