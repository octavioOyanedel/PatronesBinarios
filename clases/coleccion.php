<?php

    require_once("numerica.php");
    require_once("binomial.php");
    require_once("binaria.php");

    class Coleccion{

        //atributos
        private $numerica;
        private $binomial;
        private $binaria;

        //metodos
        public function __construct(){

            $this->numerica = new Numerica();
            $this->binomial = new Binomial();
            $this->binaria = new Binaria();

        }

        public function crearColecciones(){

            $this->numerica->crearColeccion();
            $this->binomial->crearColeccion($this->numerica);
            $this->binaria->crearColeccion();

        }

        public function verNumerica(){

            $this->numerica->verColeccion();

        }

        public function __destruct(){}

    }//fin clase

?>
