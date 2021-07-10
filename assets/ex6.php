<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 6</title>
</head>
<body>
    <div class="container">
        <div>
            <h2>Exercício 6</h2>   
        </div>
                <div class="inputform">
                    <input type="text" class="validate" name="nome" placeholder="Nome">
                    <div class="underline"></div>
                </div> 
                <div class="inputform">
                    <input type="" class="validate" name="compra" placeholder="Apelido">
                    <div class="underline"></div>
                </div>
                <div class="inputform">
                <select name="" class="selectex6" id="">
                <option value=""></option>
                <?php
                $departa = ["Contabilidade", "Informática", "Limpeza", "Recursos Humanos", "Segurança"];
                foreach ($departa as $var) {
                    echo '<option value="">Departamento de ' . $var .'</option>';
                }
                ?>
                </select> 
                </div>
                <div>
            <button class="send" type="reset">Limpar</button>
            <button class="send" type="submit">Calcular</button>
            </div>
    </div>
</body>
</html>