<?php

    class Binomial{

        //atributos
        private $binomial;

        //metodos
        public function __construct(){

            $this->binomial = array();

        }

        public function crearColeccion($numerica){



        }

        public function binomial($n,$k,$p,$q){

            return $this->combinatoria($n,$k) * pow($p,$k) * pow($q,($n-$k));

        }

        public function factorial($numero){

            $factorial = 1;

            for ($i=1; $i <= $numero; $i++) {

                $factorial =  $factorial * $i;

            }

            return $factorial;

        }

        public function combinatora($n,$k){

            return ($this->factorial($n)/(($this->factorial($n - $k)) * $this->factorial($k)));

        }


        public function __destruct(){}

    }//fin clase

?>
