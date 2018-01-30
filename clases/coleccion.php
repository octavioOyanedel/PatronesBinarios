<?php

    require_once("matriz_numerica.php");
    require_once("matriz_binaria.php");
    require_once("matriz_patron.php");
    require_once("mostrar.php");

    class Coleccion{

        //atributos
        private $matrizNumerica;
        private $matrizBinaria;
        private $matrizPatron;

        //metodos
        public function __construct(){

            $this->matrizNumerica = array();
            $this->matrizBinaria = array();
            $this->matrizPatron = array();

        }

        public function crearMatrizPatron(){

            $matrizPatron = new MatrizPatron();
            $matrizPatron->crearMatriz($this->matrizBinaria,$this->matrizPatron);

        }

        public function crearMatrizBinaria(){

            $matrizBinaria = new MatrizBinaria();
            $matrizBinaria->crearMatriz($this->matrizNumerica,$this->matrizBinaria);

        }

        public function crearMatrizNumerica(){

            $matrizNumerica = new MatrizNumerica();
            $matrizNumerica->crearMatriz($this->matrizNumerica);

        }

        public function verMatrizNumerica(){

            $mostrar = new Mostrar();
            $mostrar->verMatriz($this->matrizNumerica);

        }

        public function verMatrizBinaria(){

            $mostrar = new Mostrar();
            $mostrar->verMatriz($this->matrizBinaria);

        }

        public function verMatrizPatron(){

            $mostrar = new Mostrar();
            $mostrar->verMatriz($this->matrizPatron);

        }

        public function __destruct(){}

    }//fin clase

?>
