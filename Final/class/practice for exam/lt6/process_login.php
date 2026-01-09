<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user=$_POST["username"];
    $pass=$_POST["password"];

    if($user=="student" && $pass=="student123"){
        $_SESSION["username"]=$user;
        
        if(isset($_POST["remember_me"])){
            setcookie("username",$user,time()+60*60*7);


            

        }
        header("Location: dashboard.php");
        exit();
    }

      
        
        else{
        $error="Invalid Id and pass";
        echo $error ."<br>";
        echo "<a href='login.php'>Back to Login</a>";
           
        }


    }
    



?>