<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters setters
        function setNome($nome){        
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }


        //metodos
        function resumirCadFunc(){
            return "$this->nome tem $this->numFilhos filho(s) e seu telefone é $this->telefone.";
        }

        /*function modificarNumFilhos($numFilhos){
            //afetar atributo do objeto;
            $this->numFilhos = $numFilhos;
        }

        function modificarNome($nome){
            $this->nome = $nome;
        }
        
        function modificarTelefone($telefone){
            $this->telefone = $telefone;
        }*/

    }

    $y = new Funcionario();

    $y->setNome('José');
    $y->setNumFilhos(5);
    $y->setTelefone('81 9665-4343');

    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s), e seu telefone é:  ' . $y->getTelefone();

    //echo $y->resumirCadFunc();

    echo '<br>';

    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(2);
    $x->setTelefone('81 98635-5453');

    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s), e seu telefone é:  ' . $x->getTelefone();
    

?>