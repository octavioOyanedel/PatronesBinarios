<?php

    define("LARGO",36);

    class MatrizBinaria {

        //atributos

        //metodos
        public function __construct(){}

        public function crearMatriz(&$numeros,&$bits){

            for ($i=0; $i < sizeof($numeros); $i++) {

                $array  = array();
                $this->prepararArray($array);

                for ($j=0; $j < sizeof($numeros[$i]); $j++) {

                    $posicion = $numeros[$i][$j] - 1;
                    $array[$posicion] = 1;

                }

                $bits[$i] = $array;

            }

        }

        public function prepararArray(&$array){

            for ($i=0; $i < LARGO; $i++) {

                $array[$i] = 0;

            }

        }

        public function __destruct(){}

    }//fin clase

?>
