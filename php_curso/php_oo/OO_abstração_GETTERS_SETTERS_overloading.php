<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //metodos
        function resumirCadFunc(){
            return $this->__get('nome') . ' tem ' . $this->__get('numFilhos') . ' filho(s) e seu telefone é: ' . $this->__get('telefone');
        }

    }

    $y = new Funcionario();

    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    $y->__set('telefone', '81 99999-9999');
    echo $y->resumirCadFunc();

    echo '<br>';

    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 3);
    $x->__set('telefone', '81 99999-9998');
    echo $x->resumirCadFunc()

?>