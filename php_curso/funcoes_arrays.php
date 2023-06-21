<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php


      /////////////////////////////////
     ////////////IS_ARRAY()///////////
    /////////////////////////////////

        $array =['frutas','pessoas','carros','objetos'];

        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'não é um array';
        }


        echo '<hr>';



      /////////////////////////////////
     ////////////ARRAY_KEYS()/////////
    /////////////////////////////////

    $array2 = [1 =>'frutas', 2 => 'pessoas', '4' => 'carros', 'z' => 'objetos'];
    
    echo '<pre>';
    print_r($array2);
    echo '</pre>';

    $chavesArray = array_keys($array2);
    echo '<pre>';
    print_r($chavesArray);
    echo '</pre>';

        echo '<hr>';



      /////////////////////////////////
     ///////////////SORT()////////////
    /////////////////////////////////

    $array3 = ['frutas','pessoas','carros','objetos'];

    echo '<pre>';
    print_r($array3);
    echo '</pre>';

    sort($array3);

    echo '<pre>';
    print_r($array3);
    echo '</pre>';

        echo '<hr>';

        
      /////////////////////////////////
     ///////////////ASORT()///////////
    /////////////////////////////////

    $array4 = ['frutas','pessoas','carros','objetos'];

    echo '<pre>';
    print_r($array4);
    echo '</pre>';

    asort($array4);

    echo '<pre>';
    print_r($array4);
    echo '</pre>';

        echo '<hr>';




      /////////////////////////////////
     ///////////////COUNT()///////////
    /////////////////////////////////

    $array5 = ['frutas','pessoas','carros','objetos'];

    echo '<pre>';
    print_r($array5);
    echo count($array5);
    echo '</pre>';

        echo '<hr>';


      /////////////////////////////////
     //////////ARRAY_MERGE()//////////
    /////////////////////////////////

    $array6 = ['frutas','pessoas','carros','objetos'];

    $array7 = ['jogos','animais','veiculos','utensilios'];

    $novoArray = array_merge($array6, $array7);
    echo '<pre>';
    print_r($novoArray);
    echo '</pre>';

        echo '<hr>';



      /////////////////////////////////
     //////////////EXPLODE()//////////
    /////////////////////////////////

    $string = '26/04/2018';
    $arrayRetorno = explode('/', $string);
    echo '<pre>';
    echo $string;
    print_r($arrayRetorno);
    echo $arrayRetorno[1]. ' - '.$arrayRetorno[0]. ' - '.$arrayRetorno[2];
    echo '</pre>';


    /////////////////////////////////
    //////////////IMPLODE()//////////
    /////////////////////////////////

    $array8 = ['a', 'b', 'c', 'd', 'e', 'f'];
    $stringRetorno = implode(',', $array8);
    echo $stringRetorno;











    ?>

</body>

</html>