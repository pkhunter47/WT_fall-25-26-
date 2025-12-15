<!DOCTYPE html>
<head>
    <title>Asiignment Validation</title>
</head>
<body>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <button type="submit">Submit</button>

        <br><br>

        <label>Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <button type="submit">Submit</button><br><br>

        <label>Date of birth:</label><br>
       
        <input type="text" name="dd" size="2"> /
        <input type="text" name="mm" size="2"> /
        <input type="text" name="yyyy" size="4">

        <br>

        <button type="submit">Submit</button>

        <br><br>

        <label>Gender: </label><br>
     
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other

        <br>

        <button type="submit">Submit</button>
        <br>

        <label>Degree:</label><br>
        <input type="checkbox" name="degree" value="SSC">SSC
        <input type="checkbox" name="degree" value="HSC">HSC
        <input type="checkbox" name="degree" value="BSc">BSc
        <input type="checkbox" name="degree" value="MSc">MSc
        <br>
        <button type="submit">Submit</button>
        <br>

        Blood Group:
        <select name="blood">
        <option value="">Select</option>
        <option>A+</option>
        <option>B+</option>
        <option>O+</option>
        <option>AB+</option>
        </select>

        <br>

        <button type="submit">Submit</button>


    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];

        $error="";


        if(empty($_POST["name"])){

            $error="Name cannot be empty";

            echo $error;

            exit;

        }
        elseif (str_word_count($_POST["name"]) < 2) {
            $error="Name must contain at least two words";
            echo $error;
            exit;
        }
        elseif (!preg_match("/^[A-Za-z][A-Za-z .-]*$/", $_POST["name"])) {

            $error="Name must contain alphabetical letters";
        
            echo $error;
        exit;
    }

    if (empty($_POST["email"])) {
        echo "Email cannot be empty";
        exit;
    }
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit;
    }





    }








     ?>


    
</body>
</html>