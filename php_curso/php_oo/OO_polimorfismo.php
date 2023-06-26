<?php

    class Carro extends Veiculo {

        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }



        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição  volante';
        }

    }    

    class Moto extends Veiculo{

        public $contraPesoGuidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }


        function empinar() {
            echo 'Empinar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem: mão - Engatar embreaghem: Pé';
        }
    }

    class Caminhao extends Veiculo {

    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem: pé - Engatar embreagem: Mão';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF2211', 'azul');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();


    //$carro = new Carro('DEF1122', 'verde');
    //$moto = new Moto('DEF2211', 'azul');

?>