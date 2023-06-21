<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*$numeros = array();

        

        while (count($numeros) <= 5) {

            $num = rand(1,60);

            if(!in_array($num,$numeros)) {
                $numeros[] = $num;
            }
        }

        print_r($numeros);*/

        function gerarNumeros() {
            $numeros = [];

            do{
                $numero = rand(1,60);

                if(!in_array($numero, $numeros)) {
                    $numeros[] = $numero;
                }
            } while(count($numeros) < 6);

            return$numeros;
        }

        $megaSena = gerarNumeros();

        echo 'Os números da mega sena são: ';
        foreach($megaSena as $numero) {
            echo "$numero ";
        }




    ?>
 
</body>

</html>