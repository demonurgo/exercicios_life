<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //gettype() => retorna o tipo da variável
    $valor = 10.57;

    $float = (float) $valor;
    $string = (string) $valor;
    $inteiro = (int) $valor;
    $boolean = (bool) $valor;

    echo $valor. ' ' .gettype($valor);

    echo '<br>';

    echo $valor. ' '. gettype($float);

    echo '<br>';

    echo $valor. ' ' .gettype($string);

    echo '<br>';

    echo $inteiro. ' '. gettype($inteiro);

    echo '<br>';

    echo $boolean. ' '. gettype($boolean);

    ?>

</body>

</html>