<?php

    require_once("numerica.php");
    require_once("porcentaje.php");
    require_once("binaria.php");

    class Coleccion{

        //atributos
        private $numerica;
        private $porcentaje;
        private $binaria;

        //metodos
        public function __construct(){

            $this->numerica = new Numerica();
            $this->porcentaje = new Porcentaje();
            $this->binaria = new Binaria();

        }

        public function crearColecciones(){

            $this->numerica->crearColeccion();
            $this->porcentaje->crearColeccion($this->numerica->getColeccion());
            $this->binaria->crearColeccion();

        }

        public function verNumerica(){

            $this->numerica->verColeccion();

        }

        public function verPorcentaje(){

            $this->porcentaje->verColeccion();

        }

        public function __destruct(){}

    }//fin clase

?>
