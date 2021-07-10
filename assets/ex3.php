<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 3</title>
</head>
<body>
<div class = "container">
<?php
    $array = array();
    $arrayD = array();

    for($i = 0; $i < 50; $i++){
        $array[$i] = rand(1,50);
    }

    echo('<h3>Array: <h3>');
    foreach($array as $var){
        echo($var. '; ');
    }

    for($i = 0; $i < 50; $i++){
        $arrayD[$i] = $array[$i] / max($array);
    }

    echo('<br><br>Array Dividido: ');
    foreach($arrayD as $var){
        echo($var. '; ');
    }

?>
</div>
</body>
</html>