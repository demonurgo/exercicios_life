<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>

<body>

    <?php

    $peso = 70;
    $idade = 20;

    $podeDoar = false;

    if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
        $podeDoar = true;
    } else {
    }

    ?>

    <p>Pode Doar sangue?</p>

    <p><?= "Peso: $peso" ?></p>
    <p><?= "idade: $idade" ?></p>
    <p>Pode doar? <?= $podeDoar ? 'Atende aos Requisitos.' : 'Não atende aos requisitos' ?></p>


</body>

</html>