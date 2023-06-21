<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $listaCoisas = [];

        $listaCoisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango',
         'Uva' => ['Uva vermelha', 'Uva verde', 'Uva roxa']);
        
        $listaCoisas['pessoas'] = [ 1 => 'João', 2 => 'José', 3 => 'Maria'];

        echo '<pre>';
        print_r($listaCoisas);
        echo '</pre>';

        echo '<hr>';

        echo $listaCoisas['pessoas'][2];

    ?>

</body>

</html>