<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
       <link rel="stylesheet" href ="../CSS/Login.css">
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form method="post" action="">

        <label>ID</label>
        <input type="text" name="id" value="<?php echo $id  ?>">

        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name  ?>">
       

        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password ?>">
    

        <button type="submit" id="login_button">Login</button>
    </form>

    <?php if (!empty($success_msg)) { ?>
        <div class="success"><?php echo $success_msg; ?></div>
    <?php } ?>

</div>

</body>
</html>