<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $x = 1;

        do {
            echo " x = $x ";
            
            $x++;
        }while($x < 9);

        echo '<br>';

        while($x < 9) {
            echo 'entrou no while'; 
        }

    ?>

</body>

</html>