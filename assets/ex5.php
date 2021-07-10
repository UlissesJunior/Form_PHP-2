<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 5</title>
</head>
<body>
<div class = "container">
<?php
    $nomes = array();
    $prices = array();
    $newNames = array();
    $searchs = array();
    $higherPrices = array();
    $under = 0;
    $soma = 0;

    for($i = 0; $i < 5; $i++){
        $nomes[$i] = $_POST['nome' . $i];
        $prices[$i] = $_POST['price' . $i];
    }

    foreach($prices as $var){
        if($var < 50){
            $under++;
        } else if($var >= 50 && $var <= 100) {

            $searchs[] = $var;
            
        } else{
            $higherPrices[] = $var;
        }
    }

    echo('<h3>Número de Produtos abaixo de R$50: ' . $under);

    echo('<h3>Nomes de Produtos entre R$50 e R$100: ');
    foreach($searchs as $var1){
        $key = array_search($var1, $prices);
        echo($nomes[$key] . '; ');
    }

    for($i = 0; $i < count($higherPrices); $i++){
        $soma += $higherPrices[$i]; 
    }

    $media = $soma / count($higherPrices);
    echo('<h3> Média: ' . $media);
?>
</div>
</body>
</html>