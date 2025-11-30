<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form creation</title>
</head>
<style>
    #form{
        width: 300px;
        height: 450px;
        background-color:  lightskyblue;
        margin: 0 auto;
        
        
    }
    #text1{
        text-align:center;
    }
   #name,#password,#c_password,#email,#number{
    width: 95%;
    margin-top: 5px;
    border-radius: 5px;
    box-shadow: dimgray;
    font-family: 'Times New Roman', Times, serif;
}
#button{

    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    margin-top: 30px;
    margin-left: 5px;
    background-color: slateblue;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    width: 100px;
    height: 30px;
    
} 
#box{
    width:250px;
    height: 90px;
    margin-left: 20px;
    margin-top: 10px;
    background-color:rgb(149, 244, 182);
}

</style>
<body>
    <center>
        <h1>Registration</h1>
    </center>

    <form id = "form" onsubmit="return handle()">
        <h2 id="text1">Student Registration</h2>
         <label>Full name:</label>
        <input type="text" id="name" required>
        <label>Email:</label>
        <input type="text" id="email">
        <label>Phone number:</label>
        <input type="number" id="number">
        <label>Password:</label>
        <input type="password" id="password">
        <label>Confirm Password:</label>
        <input type="password" id="c_password">


        <button type="submit" id="button">Register</button>

        <div id="box">

        </div>




    </form>

    <script>
        function handle(){
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var phone = document.getElementById("number").value.trim();
            var pass = document.getElementById("password").value.trim();
            var cpass = document.getElementById("c_password").value.trim();


            var box = document.getElementById("box");

            if(name===""|| email===""||phone===""||pass===""||cpass===""){
                box.innerHTML = "please fill the form!";
                return false;

            }
            if(!email.includes("@")){
                box.innerHTML="please write email correctly";
                return false;

            }
            if(pass !== cpass || pass.length < 3){
                box.innerHTML="write pass correctly";
                return false;
                

            }
            else{
                box.innerHTML=`
                Name: ${name}<br>
                Email: ${email}<br>
                Phone: ${phone}
                
                `;
                return false;
            }

            


        }
    </script>
    
</body>
</html>