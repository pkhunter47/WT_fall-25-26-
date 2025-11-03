<!DOCTYPE html>
<head>
    <title>Student Registration Information</title>
</head>
<style>
div {
  width: 520px;
  height: 950px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
  background-color:white
}
body{
    background-color:plum
}

</style>
<body>
    <center>
    <div>
    <table>
    <h1 style="color:Red; font-size:30px">Student Registration Information</h1>
    <hr color="Red">
    <br>
    <tr>
        <td>First Name:</td>

    </tr>
    <tr>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Last Name:</td>

    </tr>
    <tr>
        <td><input type="text"></td>
    </tr>

    <tr>
        <td>Student ID:</td>

    </tr>
    <tr>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Program/Major:</td>

    </tr>
    <tr>
        <td><select name="sub" id="sub">
            <option value="CSE">BSc in CSE</option>
                        <option value="EEE">BSc in EEE</option>
                                    <option value="BBa">BSc in BBA</option>
                                                <option value="English">BSc in ENGLISH</option>
        </select></td>
    </tr>
    <tr>
        <td>Department:</td>

    </tr>
    <tr>
        <td><select name="Select Department" id="sub">
            <option value="">Select Department</option>
                        <option value="Cse">FST</option>
                         <option value="EEE">FEE</option>
                                    <option value="BBA">FAE</option>
                                                <option value="English">FBE</option>
        </select></td>
    </tr>

    <tr>
        <td>Phone:</td>
    </tr>
        <tr>
        <td><input type="number"></td>
    </tr>

        <tr>
        <td>University Email:</td>
    </tr>
        <tr>
        <td><input type="text"></td>
    </tr>

            <tr>
        <td>create password(min 8 characters):</td>
    </tr>
        <tr>
        <td><input type="password"></td>
    </tr>

       <tr>
        <td>confirm password:</td>
    </tr>
        <tr>
        <td><input type="password"></td>
    </tr>
       <tr>
        <td>Semester Selection:</td>
    </tr>
        <tr>
        <td>
      <input type="radio"name="pc">Summer 2024
            <input type="radio"name="pc">Fall 2024
                  <input type="radio"name="pc">Spring 2025
                        <input type="radio"name="pc">Other/Special Term

    
    </td>
    </tr>
</table>

    <tr>
        <td>Requested credit Load(Max 15)</td>
    </tr>
    <br>
    <tr>
        <input type="number" placeholder="e.g., 9 or 12">
    </tr>
    <br>
    <input type="checkbox">I reqire academic advising before final registration.
    <br>

    <h2 style="color:Red;font-size:30px">Course Selection</h2>
    <hr color="Red">
    <br>
    <td>
        <input type="checkbox">MATH 1201(Calculus 1)
        
        <input type="checkbox">CS 2105 (Data Structures)
        
        <input type="checkbox">ECON 1001(Microeconomics)
        
        <input type="checkbox">PHY 1102(PHYSICS LAB)
    </td>
    <br>
    
        Comments/Special Requests
    
    <br>
    
        <input type="text">
        <br>
        <input type="submit">
    


    



    
    </div>
    </center>
</body>
</html>