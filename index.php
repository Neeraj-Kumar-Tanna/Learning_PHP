<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning_php</title>
</head>
<body>

    <form action="index.php" method="post">
        <label >UserName : </label>
        <input type="text" name="username" placeholder="Enter name">
        <label > Password : </label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Login">
    </form>
    
</body>
</html>

<?php
    
    if(isset($_POST["login"])){
        if(empty($_POST["username"]) && empty($_POST["password"]) ){
            echo "username and password are missing <br>";
        }
        else if(empty($_POST["username"])){
            echo "username is missing <br>";
        }
        else if(empty($_POST["password"])){
            echo "password is missing <br>";
        }
        else{
            echo "hellooo {$_POST["username"]}";
        }
    }
?>