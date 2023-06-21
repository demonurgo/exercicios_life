<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $num = 1;

        echo 'Inicio do loop <br>';
        while($num < 10) {
            echo "$num <br>";

            $num++;

            if($num == 3) {
                 break;
            }
           

        }
        echo 'Fim do loop';

        echo '<hr>';

        echo 'Inicio do loop <br>';
        while($num < 10) {
            

            $num++;

            if($num == 4 || $num == 7) {
                continue;
            }
            echo "$num <br>";

        }
        echo 'Fim do loop';


    ?>

</body>

</html>