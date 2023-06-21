<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        
    $texto = 'curso Completo de PHP';

        //string to lower
        echo $texto. '<br>';
        echo strtolower($texto);

        echo '<hr>';

        //string to upper
        echo strtoupper($texto);

        echo '<hr>';

        //upper case first
        echo ucfirst($texto);

        echo '<hr>';

        //string length
        echo strlen($texto);

        echo '<hr>';

        //string replace
        echo str_replace('PHP', 'Javascript', $texto);

        echo '<hr>';

        //string replace
        echo substr($texto, 0, 14);
    
    ?>

</body>

</html>