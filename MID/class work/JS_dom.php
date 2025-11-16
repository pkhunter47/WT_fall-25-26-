<!DOCTYPE html>
<html>
<head>
    <title>Switch mode example</title>
</head>
<body>
    <center>  
          <h1 id="pagetitle">Light Mode</h1>
    <button id="switchbutton" onclick="toggle()">Switch</button>
    

</center>


<script>
 function toggle(){

    

var body=document.body;
var title=document.getElementById("pagetitle");
var button=document.getElementById("switchbutton");

if(body.style.backgroundColor=="black"){
    body.style.backgroundColor="white";
    body.style.color="black";
    title.innerHTML="Light Mode";
    button.innerHTML="Switch to Darkk Mode";


}
else{
        body.style.backgroundColor="black";
    body.style.color="white";
    title.innerHTML="Dark Mode";
    button.innerHTML="Switch to light Mode";
}

    }






</script>
</body>
</html>