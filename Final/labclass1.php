<!DOCTYPE html>
<head>
    <title>Array Check</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<center>
    <h1>Array</h1>
</center>

<?php

$vehicle = array("car", "plane", "truck", "ship");


foreach($vehicle as $value){
    echo "$value <br>";
}


echo "<br>Is the element 'car' present? <br>";

if (in_array("car", $vehicle)) {
    echo "Yes, 'car' exists in the array.";
} else {
    echo "No, 'car' is not in the array.";
}

?>

</body>
</html>
