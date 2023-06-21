<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item) {
            echo "$item";

            if($item == 'sofá') {
                echo ' (compre um sofá e ganhe 25% de desconto na compra de 4 almofadas) <br>';
                
            }else if($item == 'mesa') {
                echo ' (compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras) <br>';

            }else if($item == 'cadeira') {
                echo ' (compre uma cadeira e ganhe 25% de desconto na compra de 4 mesas) <br>';

            }else if($item == 'fogão') {
                echo ' (compre um fogão e ganhe 25% de desconto na compra de 4 fósforos) <br>';

            }else if($item == 'geladeira') {
                echo ' (compre uma geladeira e ganhe 25% de desconto na compra de 4 garrafas) <br>';
            }   
            
            echo '<br>';
        }

    ?>

</body>

</html>