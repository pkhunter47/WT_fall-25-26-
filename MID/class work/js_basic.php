<!DOCTYPE html>
<html>
<head>
    <title>
        JS basic
    </title>
</head>
<style>

    div{
        width: 520px;
  height: 950px;
  padding: 10px,20px;
  border: 5px solid gray;
  margin: 0;
  background-color:white;
    }
    body{
        background-color:pink;
    }
</style>

<body>
<center>
<div>  
<h1 id="demo" style="color:Red">Welcome to Js Class </h1>
<p> Lets Start the Class Today</p>
 
 
<script>
   var name="Robin Hood";
   let number=120;
   var num_2= 270.0;
   const last_name="Khan";
 
document.write("Hello World");
console.log("Hello Console");
alert("Hello Alert");
 
//var body=document.getElementById("demo");
//body.innerHTML="GOOD Bye";
//document.getElementById("demo").innerHTML("Hi protik");
 
console.log("the dt of name: ",typeof name);
console.log("the dt of num1: ",typeof number);
console.log("the dt of num2: ",typeof num_2);
console.log(typeof undefined);
console.log("the dt of Lname: ",typeof last_name);
 
let sum = number+num_2;
console.log("The sum is : ",sum);
 
</script>
 
</div>
</center>
</body>
 
</html>