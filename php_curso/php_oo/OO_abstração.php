<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //metodos
        function resumirCadFunc(){
            return "$this->nome tem $this->numFilhos filho(s) e seu telefone é $this->telefone.";
        }

        function modificarNumFilhos($numFilhos){
            //afetar atributo do objeto;
            $this->numFilhos = $numFilhos;
        }

        function modificarNome($nome){
            $this->nome = $nome;
        }
        
        function modificarTelefone($telefone){
            $this->telefone = $telefone;
        }

    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '<br>';
    
    echo '<h2>Funcionário Maria</h2>';
    $y->modificarNome('Maria');
    $y->modificarTelefone('81 99615-1072');
    $y->modificarNumFilhos(4);

    echo $y->resumirCadFunc();
    echo '<hr>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br>';

    echo '<h2>Funcionário José</h2>';
    $x->modificarNome('José');
    $x->modificarTelefone('81 98812-0041');
    $x->modificarNumFilhos(5);

    echo $x->resumirCadFunc();
?>