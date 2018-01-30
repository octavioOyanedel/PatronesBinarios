<?php

    require_once("datos/consulta.php");

    class MatrizNumerica{

        //atributos

        //metodos
        public function __construct(){}

        public function crearMatriz(&$matriz){

            $consulta = new Consulta();
            $resultados = $consulta->consultar($consulta->getSql());
            $k = 0;

            while ($fila = mysqli_fetch_row($resultados)) {

                $array = array();

                for ($i=1; $i < sizeof($fila); $i++) {

                    $j = $i - 1;
                    $array[$j] = $fila[$i];

                }

                $matriz[$k] = $array;
                $k++;

            }

            mysqli_free_result($resultados);

        }

        public function __destruct(){}

    }//fin clase

?>
