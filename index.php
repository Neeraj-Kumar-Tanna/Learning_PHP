<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning php</title>
</head>
<body>
    <form action="index.php" method="post">
        <label >X : </label>
        <input type="text" name="x">
        <br>
        <input type="submit" value="calculate">
        <br>
    </form>
</body>
</html>

<?php
    //GET and POST
    $x = $_POST["x"];
    $circumference = round(2*pi()*$x , 2);
    $area = round(pi()*pow($x , 2) , 2);
    $volume = round(4/3*pi()*pow($x, 3) , 2);

    echo "circumference : {$circumference} <br>";
    echo "area : {$area} <br>";
    echo "volume : {$volume} <br>";
    
?>