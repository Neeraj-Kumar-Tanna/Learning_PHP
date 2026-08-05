<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning_php</title>
</head>
<body>
    <form action="index.php" method="post" >
        <label >enter the country name : </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
    <!-- <form action="index.php" method="post">
        <h3>add country and language</h3>
        <label>country : </label>
        <input type="text" name="add_country"> <br>
        <label >language : </label>
        <input type="text" name="add_language"> <br>
        <input type="submit" value="add to array">
    </form> -->
</body>
</html>

<?php
    $array_a = array(
    "usa"         => "English",
    "india"       => "Hindi",
    "china"       => "Chinese",
    "korea"       => "Korean",
    "japan"       => "Japanese",
    "france"      => "French",
    "germany"     => "German",
    "spain"       => "Spanish",
    "italy"       => "Italian",
    "portugal"    => "Portuguese",
    "russia"      => "Russian",
    "brazil"      => "Portuguese",
    "mexico"      => "Spanish",
    "canada"      => "English & French",
    "australia"   => "English",
    "pakistan"    => "Urdu",
    "bangladesh"  => "Bengali",
    "nepal"       => "Nepali",
    "sri lanka"   => "Sinhala & Tamil",
    "thailand"    => "Thai",
    "vietnam"     => "Vietnamese",
    "turkey"      => "Turkish",
    "egypt"       => "Arabic",
    "saudi arabia"=> "Arabic",
    "south africa"=> "Zulu, Xhosa, English, etc."
    );


    $lang = $_POST["country"];
    echo "Language : {$array_a[$lang]}";

    // $array_a[$_POST["add_country"]] = $_POST["add_language"];
    // echo "country : {$_POST["add_country"]} <br>";
    // echo "language added : {$_POST["add_language"]} ";


    // array_pop($array_a);
    // array_shift($array_a);
    // $reversed = array_reverse($array_a);

    // echo "REVERSED : <BR>";
    // foreach($reversed as $key => $value){
    //     echo "country : {$key} language : {$value} <br>";
    // }


    // echo "NORMAL : <BR>";
    // foreach($array_a as $key => $value){
    //     echo "country : {$key} language : {$value} <br>";
    // }
?>