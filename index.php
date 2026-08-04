<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning php</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Name : </label>
        <input type="text" name="name">
        <br>
        <label >age : </label>
        <input type="number" name="age">
        <br>
        <input type="submit" >
    </form>
</body>
</html>

<?php
    //GET and POST
    $name = $_POST["name"];
    $age = $_POST["age"];
    echo " name : {$name} , age : {$age}";
?>