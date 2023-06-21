<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        //in_array() true ou false para a existencia do que esta sendo procurado
        //array_search()

        $listaFrutas = ['Banana', 'Maçã', 'Morangos', 'Uva'];
        $listaPessoas = ['João', 'Maria', 'José', 'Marilene'];


        /*
        echo '<pre>';
        print_r($listaFrutas);
        echo '</pre>';

        $existe =  in_array('Maçã', $listaFrutas);
        //true -> texto = 1
        //false -> texto = null

        echo array_search('Uva', $listaFrutas);

        echo '<br>';

        if($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não o valor pesquisado não existe no array';
        }*/

        $listaCoisas = [
            'frutas' => $listaFrutas,
            'pessoas' => $listaPessoas,];

        echo '<pre>';
        print_r($listaCoisas);
        echo '</pre>';

        echo in_array('Maria', $listaCoisas['pessoas'])

        

    ?>

</body>

</html>