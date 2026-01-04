<?php
function openConn(){
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="wt_project";
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function addUser($conn, $name, $email, $phonenumber, $hashedpassword, $c_password, $blood){
   $sql = "INSERT INTO user_registration (name, email, phonenumber, password, c_password, blood) VALUES ('$name', '$email', '$phonenumber', '$hashedpassword', '$c_password', '$blood')";
   return $conn->query($sql);
}   

function getuserforlogin($conn, $email, $password){
    $sql = "SELECT * FROM user_registration where email='$email' and password='$password'";
    $result = $conn->query($sql);
    return $result;
}

?>