<!DOCTYPE html>
<hrml>
<head>
    <title>Registration Form</title>
</head>
<link rel="stylesheet" href="../CSS/designreg.css">
<body>
    <form id="form1" method="post">
        <img src="11879738.png" alt="registration" srcset="" width="60px" height= "50px" id="regimage">
        <center>

    <h2>Register NOW!</h2>
    </center>
  

     <label style="font-family: Times New Roman,Times, serif;" >Student-ID:</label>
    <input type="number"id="id" name="id" required>
    <label style="font-family: Times New Roman,Times, serif;" >Name:</label>
    <input type="text"id="name" name="name" required>

    <label style="font-family: Times New Roman,Times, serif;" >E-mail:</label>
    <input type="text"id="email" name="email" required>

    <label style="font-family: Times New Roman,Times, serif;" >Phone-Number:</label>
    <input type="number"id="phonenumber" name="phonenumber" required>

    <label style="font-family: Times New Roman,Times, serif;" >Password:</label>
    <input type="password"id="password" name="password" required>

    <label style="font-family: Times New Roman,Times, serif;" >Confirm password:</label>
    <input type="password"id="c_password" name="c_password" required>

    <button type="submit" id="button">Register</button>




    </form>

    <div id="error" name="error">
    </div>

    <?php

    include '../PHP/validationofreg.php';

    ?>
    
    
</body>
</html>