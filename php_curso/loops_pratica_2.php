<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $funcionarios = [['nome' => 'João', 'salario' => 2500, 'data de nascimento' => '19/04/2001'],
                         ['nome' => 'Maria', 'salario' => 4000],
                         ['nome' => 'José', 'salario' => 1000]];

        echo '<pre>';
           print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";

            }

            echo '<hr>';
        }

    ?>

</body>

</html>