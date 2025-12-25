<?php
$id="";
$name="";
$password="";

$success_msg="";

$id_error="";
$name_error="";
$password_error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=trim($_POST["id"]);
    $name=trim($_POST["name"]);
    $password=trim($_POST["password"]);

    $isValid=true;

    if(empty($id)){
        $id_error="ID is required";
        $isValid=false;
    }

    if(empty($name) || !preg_match("/^[a-zA-Z ]*$/", $name)){
        $name_error="Name is required and should contain only letters and spaces";
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