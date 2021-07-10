<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 1</title>
</head>
<body>
<div class = "container">
<?php
    $array = array();
    $array1 = array();
    $soma = array();

    for($i = 0; $i < 10; $i++){
        
        $array[$i] = rand(0,50);
        $array1[$i] = rand(0,50);

        $soma[$i] = $array[$i] + $array1[$i];
    }
    echo('<h3>Array 0: <h3>');
    foreach($array as $var){
        echo($var. ', ');
    }
    echo('<h3>Array 1: <h3>'); 
    foreach($array1 as $var){
        echo($var. ', ');
    }
    echo('<h3>Soma: <h3>');
    foreach($soma as $var){
        echo($var. ', ');
    }

?>
</div>
</body>
</html>