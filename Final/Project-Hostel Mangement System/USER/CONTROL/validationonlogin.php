<?php

include '../MODEL/db.php';
$name="";
$email="";
$password="";

$success_msg="";

$name_error="";
$email_error="";
$password_error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=trim($_POST["name"]);
    $email=trim($_POST["email"]);
    $password=trim($_POST["password"]);

    $isValid=true;

    if(empty($name)){
        $name_error="Name is required";
        $isValid=false;
    }

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error="Email is required and must be a valid email address";
        $isValid=false;
    }

    if(empty($password) || strlen($password)<6){
        $password_error="Password is required and must be at least 6 characters long";
        $isValid=false;
    }

    if($isValid){

        $conn = openConn();
        $result = getuserforlogin($conn, $email, $password);

        if ($result->num_rows == 0) {
            $email_error="No user found with this email and password";
            $conn->close();
            return;
        } else {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION["username"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["phonenumber"] = $row["phonenumber"];
            $_SESSION["blood"] = $row["blood"];
            $conn->close();
        }
        
        $success_msg="Login successful!";
    }
    $conn->close();
}





?>