<?php
$id="";
$email="";
$password="";

$success_msg="";

$id_error="";
$email_error="";
$password_error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=trim($_POST["id"]);
    $email=trim($_POST["email"]);
    $password=trim($_POST["password"]);

    $isValid=true;

    if(empty($id)){
        $id_error="ID is required";
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
        
        $success_msg="Login successful!";
    }
}





?>