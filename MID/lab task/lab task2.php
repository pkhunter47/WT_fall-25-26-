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
    height: 450px;
  
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
    height:110px;
    margin-top:10px;
    border-radius:5px;
    background-color:rgb(149, 244, 182);
    color:black;

}
#form2{
   

    background-color: aliceblue;
    margin: 0 auto;
    box-shadow:  0 0 10px rgba(0,0,0,0.1);
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    height: 200px;
  
}
#activity{
     width: 95%;
    margin-top: 5px;
    border-radius: 5px;
    box-shadow: dimgray;
    font-family: 'Times New Roman', Times, serif;

}
#activitysubmit{
    background-color:blue;
    margin-top:10px;
    color:white;
    font-family: 'Times New Roman', Times, serif;
    border-radius: 5px;

}
#activitybox{
    width:300px;
    height:50px;
    margin-top:10px;
    border-radius:5px;
    background-color:white

}
#remove{
    margin-left:220px;
    margin-top:15px;
    background-color:red;
    color:white;
}


    </style>
</head>
<body>
    <form id="form1" onsubmit="return handle1()">
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

        <button type="submit" id="button" >Register</button>

        <div id="output-box"></div>
        <div id="error1" style="color:red;"></div>

        



    </form>
    <br>


    <form id="form2" onsubmit="return handle2()">
        <center>
        <h2>Activity section</h2>
        </center>
        <label>Activity Name:</label>
        <input type="text" id="activity">

        <button type="submit"id="activitysubmit">Add activity</button>
        <div id="activitybox">
             <button type="submit"id="remove">Remove</button>

        </div>
        <div id="error2" style="color:red;"></div>



    </form>

    <script>
        function handle1(){

            var name=document.getElementById("name").value.trim();
            var email=document.getElementById("email").value.trim();
            var phone=document.getElementById("number").value.trim();
            var pass=document.getElementById("password").value.trim();
            var cpass=document.getElementById("c_password").value.trim();


            var errorDiv=document.getElementById("error1");
            var outputDiv=document.getElementById("output-box");

        

            if(name===""|| email===""||phone===""||pass===""||cpass===""){
                outputDiv.innerHTML = "No field can be left empty ";
                return false;

            }
            if(!email.includes("@")){
                outputDiv.innerHTML = " Email must contain @ ";
                return false;

            }
            if(pass!=cpass){
                outputDiv.innerHTML = " password doesn't match ";
                return false;
            }
            
                outputDiv.innerHTML = `
                Registration sucesfull <br>
                Name: ${name}<br>
                Email:${email}<br>
                Phone:${phone}
                
                
                `;
                return false;
            
        }

        function handle2(){
             var activityBox = document.getElementById("activity").value.trim();
             var activityBoxDiv= document.getElementById("activitybox");
    

    if(activityBox=== "") {
        activityBoxDiv.innerHTML = " Please enter an activity name";
        return false;

        }
        activityBoxDiv.innerHTML = `
    ${activityBox}
         `;
        return false;

    }


    </script>
    
</body>
</html>