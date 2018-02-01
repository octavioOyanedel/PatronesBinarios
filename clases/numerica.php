<?php

    require_once("datos/consulta.php");
    require_once("mostrar.php");

    class Numerica{

        //atributos
        private $numerica;

        //metodos
        public function __construct(){

            $this->numerica = array();

        }

        public function crearColeccion(){

            $consulta = new Consulta();
            $resultados = $consulta->consultar($consulta->getSql());
            $k = 0;

            while ($fila = mysqli_fetch_row($resultados)) {

                $array = array();

                for ($i=1; $i < sizeof($fila); $i++) {

                    $j = $i - 1;
                    $array[$j] = $fila[$i];

                }

                $this->numerica[$k] = $array;
                $k++;

            }

            mysqli_free_result($resultados);

        }

        public function verColeccion(){

            $mostrar = new Mostrar();
            $mostrar->verMatriz($this->numerica);

        }

        public function getColeccion(){

            return $this->numerica;

        }

        public function __destruct(){}

    }//fin clase

?>
