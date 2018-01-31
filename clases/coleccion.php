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
        private $matrizPatron0;
        private $matrizPatron1;


        //metodos
        public function __construct(){

            $this->matrizNumerica = array();
            $this->matrizBinaria = array();

        }

        public function crearMatrizPatron(){

            $matrizPatron = new MatrizPatron();
            $matrizPatron->crearPatron($this->matrizBinaria);

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

        public function __destruct(){}

    }//fin clase

?>
