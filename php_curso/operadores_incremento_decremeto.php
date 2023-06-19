<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>


    <h3>Pós-incremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br>";
        echo 'O valor contido em A após o incremento é '. $a++ .'<br>';
        echo 'O valor atualizado é '. $a .'<br>';
    
    ?>

    <h3>Pré-incremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br>";
        echo 'O valor contido em A pré o incremento é '. ++$a .'<br>';
        echo 'O valor atualizado é '. $a .'<br>';
    
    ?>

    <h3>Pós-decremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br>";
        echo 'O valor contido em A após o decremento é '. $a-- .'<br>';
        echo 'O valor atualizado é '. $a .'<br>';
    
    ?>

    <h3>Pré-decremento</h3>
    <?php

        $a = 7;

        echo "O valor contido em A é $a <br>";
        echo 'O valor contido em A pré o decremento é '. --$a .'<br>';
        echo 'O valor atualizado é '. $a .'<br>';
    
    ?>

</body>

</html>