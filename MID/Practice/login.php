<!DOCTYPE html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <center>
    <h1 id="head1">Welcome to Login</h1>
</center>
<br><br>


<form id="form2">
    <h2 id="head2">Login Form</h2>

    <label style="font-family: Times New Roman,Times, serif;" >E-mail:</label>
    <input type="text"id="email">

    <label style="font-family: Times New Roman,Times, serif;" >Password:</label>
    <input type="password"id="password">
 



    </select>
     <button type="submit"id="button" onclick="return handle()">Login</button>

</form>

<div id="error"></div>
<div id="output"></div>

<script>
    function handle(){
       // var name=document.getElementById("name").value.trim();
        //var id=document.getElementById("id").value.trim();
        var email=document.getElementById("email").value.trim();
        var password=document.getElementById("password").value.trim();
        //var confirm_password=document.getElementById("c_password").value.trim();
        //var department=document.getElementById("department").value.trim();
        
        var errorDiv=document.getElementById("error");
        var outputDiv=document.getElementById("output");


    if( email == "")
{
    
  errorDiv.innerHTML= "pelase fill the login";
  return false;
 
}



else{
    errorDiv.innerHTML="";
    outputDiv.innerHTML="Registration Succesfull!!";
    window.location.href="Register.php";
    return false;
}

 


    }




</script>


</body>
</html>