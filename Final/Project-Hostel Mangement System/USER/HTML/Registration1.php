<!DOCTYPE html>
<hrml>
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

    <br>

   <label style="font-family: Times New Roman,Times, serif;" >Blood Group:</label>

    <select name="blood" id="blood">Blood Group:
        <option value="Select group">Select group</option>
        <option value="A+">A+</option> 
        <option value="B+">B+</option>
        <option value="AB+">AB+</option> 
        <option value="O+">O+</option>
        <option value="A-">A-</option> 
        <option value="B-">B-</option>
        <option value="AB-">AB-</option> 
        <option value="O-">O-</option>
    
    
    </select>

    <button type="submit" id="button">Register</button>




    </form>

    <div id="error" name="error">
    </div>

    <?php

    include '../PHP/validationonreg.php';

    ?>
    
    
</body>
</html>