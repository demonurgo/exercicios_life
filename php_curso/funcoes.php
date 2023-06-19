<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    function exibirBoasVindas() {
        echo 'Bem-vindo ao curso de PHP! <br>';
    }

    exibirBoasVindas();

    function calcularAreaTerreno($largura, $altura) {
        $area = $largura * $altura;
        return $area;
    }

    $resultado = calcularAreaTerreno(20, 10);

    echo $resultado;
    
    ?>

</body>

</html>