<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        //false (true/false) => tipo variável boolean
        //null e empty => valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;



        //valores null
        if(is_null($funcionario1)) {
            echo 'Sim a variável é null';

        }else {
            echo 'Sim a variável não é null';
        }

        echo '<br>';

        if(empty($funcionario2)) {
            echo 'Sim a variável é vazia';

        }else {
            echo 'Sim a variável não é vazia';
        }

        echo '<br>';

        if(is_null($funcionario3)) {
            echo 'Sim a variável é false';

        }else {
            echo 'Sim a variável não é false';
        }



    ?>

</body>

</html>