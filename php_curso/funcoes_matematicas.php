<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $num = 7.3;
        echo $num .'<br>';

        echo 'Arredondamento para cima (Ceil):  ' .ceil($num);

        echo '<br />';

        echo 'Arredondamento para baixo (Floor):  ' .floor($num);

        echo '<br />';

        echo 'Arredondamento com base na fração(superior a 5 pra cima) (Round):  ' .round($num);

        echo '<br />';

        echo 'Gera um valor aleatório (Rand):  ' .rand(1, 100);

        echo '<br />';

        echo 'Maior valor aleatório (Rand):  ' .getrandmax();

        echo '<br />';

        echo 'Raiz quadrada de 81 (sqrt):  ' .sqrt(81);

    
    ?>

</body>

</html>