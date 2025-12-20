 <?php

    include '../PHP/validationonreg.php';

    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<link rel="stylesheet" href="../CSS/designforreg.css">
<body>
    <form id="form1" method="post">
        <img src="11879738.png" alt="registration" srcset="" width="60px" height= "50px" id="regimage">
        <center>

    <h2>Register NOW!</h2>
    </center>
  

     <label style="font-family: Times New Roman,Times, serif;" >Student-ID:</label>
    <input type="number"id="id" name="id" value="<?php echo $id; ?>">
 

    <label style="font-family: Times New Roman,Times, serif;" >Name:</label>
    <input type="text"id="name" name="name" value="<?php echo $name; ?>">
    

    <label style="font-family: Times New Roman,Times, serif;" >E-mail:</label>
    <input type="text"id="email" name="email" value="<?php echo $email; ?>">
    

    <label style="font-family: Times New Roman,Times, serif;" >Phone-Number:</label>
    <input type="number"id="phonenumber" name="phonenumber" value="<?php echo $phonenumber; ?>">
    

    <label style="font-family: Times New Roman,Times, serif;" >Password:</label>
    <input type="password"id="password" name="password" value="<?php echo $password; ?>">
    

    <label style="font-family: Times New Roman,Times, serif;" >Confirm password:</label>
    <input type="password"id="c_password" name="c_password" value="<?php echo $c_password; ?>">
    

    <br>

   <label style="font-family: Times New Roman,Times, serif;" >Blood Group:</label>
        <select name="blood" id="blood">
            <option>Select group</option>

            <option value="A+" <?php if($blood=="A+") echo "selected"; ?>>A+</option>
            
            <option value="B+" <?php if($blood=="B+") echo "selected"; ?>>B+</option>
            <option value="AB+" <?php if($blood=="AB+") echo "selected"; ?>>AB+</option>
            <option value="O+" <?php if($blood=="O+") echo "selected"; ?>>O+</option>
            <option value="A-" <?php if($blood=="A-") echo "selected"; ?>>A-</option>
            <option value="B-" <?php if($blood=="B-") echo "selected"; ?>>B-</option>
            <option value="AB-" <?php if($blood=="AB-") echo "selected"; ?>>AB-</option>
            <option value="O-" <?php if($blood=="O-") echo "selected"; ?>>O-</option>
        </select>

    <button type="submit" id="button">Register</button>

    <div class="error">
    <?php
        echo $id_error;
        echo "<br>";
        echo $name_error;
        echo "<br>";
        echo $email_error;
        echo "<br>";            
        echo $phonenumber_error;
        echo "<br>";
        echo $password_error;
        echo "<br>";
        echo $blood_error;
    ?>
</div>



    </form>
    

    <?php 
    
    if (!empty($success_msg)) { ?>
        <div class="success"><?php echo $success_msg; ?></div>
    <?php } ?>
    
</body>
</html>