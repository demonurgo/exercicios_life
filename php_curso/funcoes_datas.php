<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    /*
        //Recuperação da data atual
        echo date('D  d / m / Y  H:i');

        //
        echo '<br>';
        date_default_timezone_get();
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br>';
        echo date('D  d / m / Y  H:i');

    */

    $data_inicial = '2023-06-20';
    $data_final = '2023-07-20';

    //timestamp
    //01/01/1970

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    echo $data_inicial. ' - ' . $time_inicial;
    echo '<br>';
    echo $data_final. ' - ' . $time_final;
    
    $diferenca_times = $time_final - $time_inicial;
    echo '<br>';
    echo"A diferença de segundos entre as datas é: $diferenca_times";

    echo '<br>';

    $segundos_existem_dia = 24 * 60 * 60;
    echo '<br>';
    echo "Um dia possui $segundos_existem_dia segundos";

    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

    echo '<br>';
    echo "A diferença de dias entre as datas é: $diferenca_de_dias_entre_as_datas";
    


    ?>

</body>

</html>