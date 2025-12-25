<?php
include("../PHP/validationonlogin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
       <link rel="stylesheet" href ="../CSS/Login.css">
</head>
<body>

<div class="login-box">

    <form method="post" id="login_form" action="">
        <img src="../../images/login.png" alt="login logo" width="80px" height="80px" id="login_image">
        <br>

        <label>ID</label>
        <input type="text" name="id" id="id" value="<?php echo $id  ?>">

        <label>Name</label>
        <input type="text" name="name" id="name" value="<?php echo $name  ?>">
       

        <label>Password</label>
        <input type="password" name="password" id="password" value="<?php echo $password ?>">
    

        <button type="submit" id="login_button">Login</button>
    </form>
<?php
    if(!empty($id_error)){
        echo '<div class="error">'.$id_error.'</div>';
    }
    if(!empty($name_error)){
        echo '<div class="error">'.$name_error.'</div>';
    }
    if(!empty($password_error)){
        echo '<div class="error">'.$password_error.'</div>';
    }
    if(!empty($success_msg)){
        echo '<div class="success">'.$success_msg.'</div>';
    }
    ?>

</div>

</body>
</html>