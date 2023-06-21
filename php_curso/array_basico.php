<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        //sequenciais(numericos)
        echo "<h1>Arrays Sequenciais</h1>";
        $listaFrutas = array('Banana', 'Maçã', 'Uva', 'Morango');
        $listaFrutas = ['Banana', 'Maçã', 'Uva', 'Morango'];
        $listaFrutas [] = 'Banana';

        echo '<pre>';
        var_dump($listaFrutas);
        echo '</pre>';

        echo '<hr>';

        echo '<pre>';
        print_r($listaFrutas);
        echo '</pre>';

        echo '<hr>';

        print_r($listaFrutas[2]);

        echo '<hr>';

        //associativos
        echo "<h1>Arrays Associativos</h1>";
        $listaFrutas2 = array('a' => 'Banana',
                             'b' => 'Maçã',
                             'x' => 'Uva',
                             '2' => 'Morango');

        
         $listaFrutas2['w'] = 'abacaxi';


        echo '<pre>';
        var_dump($listaFrutas2);
        echo '</pre>';

        echo '<hr>';

        echo $listaFrutas2['w'];


    ?>

</body>

</html>