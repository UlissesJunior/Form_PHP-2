<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 8</title>
</head>
<body>
<div class = "container">
<?php
$valores = array(0, 10, 3, 1, 7, 55, 15, 21, 99);

echo('<h3>Valores Pares: <h3>');

for($i=0; $i < count($valores); $i++){
    
    if($valores[$i] % 2 == 0){
        echo('<h3>' . $valores[$i]);
    }
}
?>
</div>
</body>
</html>