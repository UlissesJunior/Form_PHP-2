<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 7</title>
</head>
<body>
    <div class="container">
        <?php
            for($i = 0; $i < 3; $i++){
                $input = $_POST['input' . $i];
        
                switch($i){
                    case '0':
                        echo('<h3>Nome: ' . $input);
                        break;
                    case '1':
                        echo('<h3>Email: ' . $input);
                        break;
                    case '2':
                        echo('<h3>Cidade: ' . $input);
                }
            }
        ?>
    </div>
</body>
</html>