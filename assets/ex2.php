<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 2</title>
</head>
<body>
<div class = "container">
<?php
$array = array();

for($i = 0; $i < 40; $i++){
    $array[$i] = rand(1,50);
}

echo('<h3>Array: <h3>');
foreach($array as $var){
    echo($var. ', ');
}

echo ('<h3>Menor valor: <h3>'.min($array));
?>
</div>
</body>
</html>