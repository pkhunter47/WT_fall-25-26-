<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST["id"];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phonenumber= $_POST['phonenumber'];
    $password= $_POST['password'];
    $c_password= $_POST['c_password'];
    $blood=$_POST["blood"];
    $error="";


   
    if ($password !== $c_password) {

        $error="Passwords are not  correct!";
        echo $error;
        exit();
        
    }
   
    if(!preg_match("/^[a-zA-Z ]*$/",$name)){
        echo "Names are allowed only";
        exit();

    }
    if(empty($_POST["blood"])){
        $error="Select your blood group";
        echo $error;
        exit(); 

    }

    else{


    echo "<h2>Registration Successful</h2>";


    echo "Student ID: " . $id . "<br>";
    echo "Name: " .$name. "<br>";
    echo "Email: " .$email. "<br>";
    echo "Phone Number: " .$phonenumber. "<br>";
    echo "Password: " .$password. "<br>";
    echo "Blood Group:" .$blood. "<br>";

    exit();

    }
}
?>
