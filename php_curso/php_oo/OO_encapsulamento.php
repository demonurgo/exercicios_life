<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        
        }

        private function executarMania() {
            echo 'Assobiar';
        }
        
        protected function responder() {
            echo 'oi';
        }

        public function executarAcao() {
            $x =rand(1, 10);

            if($x >= 1 && $x <= 5){
                $this->executarMania();

            }else{
                $this->responder();
            }          
            echo '<br>';
            echo $x;
        
        }

    }

    class Filho extends Pai {
        public function __construct() {
            //exibir métodos
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        private function executarMania() {
            echo 'Cantar';
        }

        protected function responder() {
            echo 'Olá';
        }


        public function x() {
            $this->executarMania();
        }

    }

    $filho= new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->executarAcao();
    echo '<br>';
    $filho->x();





    /*
    $pai = new Pai();
    echo $pai->executarAcao();*/




?>