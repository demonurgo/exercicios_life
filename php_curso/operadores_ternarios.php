<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $usuario_possui_cartao_loja = true;
    $valor_compra = 500;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;


    //EVITAR FAZER ISSO
    $valor_frete_aux = $usuario_possui_cartao_loja == true && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

    $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

    $valor_frete = $valor_frete_aux;



    /*
    if ($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
        $valor_frete = 0;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 300) {
        $valor_frete = 10;
    } else if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
        $valor_frete = 25;
    } else {
        $recebeu_desconto_frete = false;
    }*/

    ?>


    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja?

        <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>

        <?php
        /*
        if ($usuario_possui_cartao_loja == true) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
    */
        ?>

    </p>

    <p>Valor da compra <?= $valor_compra ?></p>

    <p>Recebeu desconto?
        <?php

        $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
        echo $teste;


        /*
        if ($recebeu_desconto_frete == true) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
    */
        ?>


    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>

</html>