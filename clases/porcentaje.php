<?php

    require_once("mostrar.php");

    class Porcentaje{

        //atributos
        private $porcentaje;

        //metodos
        public function __construct(){

            $this->porcentaje = array();

        }

        public function crearColeccion($numerica){

            $total = sizeof($numerica) * sizeof($numerica[0]);

            for ($i=1; $i <= 36; $i++) {

                $porcentaje = $this->encontrarAciertos($numerica,$i)/$total;

                echo round($porcentaje, 3,PHP_ROUND_HALF_UP)."</br>";

            }

        }

        public function encontrarAciertos($numerica,$numero){

            $cont = 0;

            for ($i=0; $i < sizeof($numerica); $i++) {

                for ($j=0; $j < sizeof($numerica[$i]); $j++) {

                    if ($numerica[$i][$j] == $numero) {

                        $cont++;

                    }

                }

            }

            return $cont;

        }

        public function verColeccion(){

            $mostrar = new Mostrar();
            $mostrar->verMatriz($this->porcentaje);

        }

        public function getColeccion(){

            return $this->porcentaje;

        }

        public function __destruct(){}

    }//fin clase

?>
