<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        

        function calcularIR($salario) {
            if($salario <= 1903.98) {
                $IR =  0;
            }else if($salario > 1903.98 && $salario < 2826.65) {
                $IR = ($salario * 0.075);

            }else if($salario >= 2826.65 && $salario < 3751.05) {
                $IR = ($salario * 0.015);

            }else if($salario >= 3751.05 && $salario <= 4664.68) {
                $IR = ($salario * 0.225);

            }else if($salario > 4664.68) {
                $IR = ($salario * 0.275);

            }else{

            }
            return $IR;
        }



         $resultado = calcularIR(5000);

         echo $resultado;


    
    ?>

</body>

</html>