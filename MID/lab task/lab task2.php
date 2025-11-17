<!DOCTYPE html>

<head>
    <title>Participant Registration</title>
    <style>
    body{
    background-color: rgb(161, 209, 249);;
}
#form1{
   

    background-color: aliceblue;
    margin: 0 auto;
    box-shadow:  0 0 10px rgba(0,0,0,0.1);
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    height: 400px;
  
}
#name,#email,#number,#password,#c_password{
     width: 95%;
    margin-top: 5px;
    border-radius: 5px;
    box-shadow: dimgray;
    font-family: 'Times New Roman', Times, serif;
}
#button{
    background-color:blue;
    margin-top:10px;
    color:white;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 5px;
}
#output-box{
    width:300px;
    height:100px;
    margin-top:10px;
    border-radius:5px;
    background-color:rgb(149, 244, 182);

}


    </style>
</head>
<body>
    <form id="form1">
        <center>
        <h2>Participant Register</h2>
        </center>
        <label>Full name:</label>
        <input type="text" id="name">
        <label>Email:</label>
        <input type="text" id="email">
        <label>Phone number:</label>
        <input type="number" id="number">
        <label>Password:</label>
        <input type="password" id="password">
        <label>Confirm Password:</label>
        <input type="password" id="c_password">

        <button type="submit" id="button">Register</button>

        <div id="output-box"></div>

        



    </form>
    
</body>
</html>