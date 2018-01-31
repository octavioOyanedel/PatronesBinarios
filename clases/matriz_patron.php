<?php

    require_once("mostrar.php");
    // NOTE: patron debe arrojar al menos 7 numeros
    //12 = 8, 6 sino 2 si
    //13 = 10, 8 sino 2 si
    //14 = 15,
    define("PATRON",12);

    class MatrizPatron {

        //atributos
        private static $posicion;
        private static $cont = 0;
        private static $contIgual = 0;

        //metodos
        public function __construct(){

            MatrizPatron::$posicion = 1;

        }

        public function crearPatron(&$bits){

            $n = sizeof($bits);

            $this->verControl();

            // NOTE: recorrer matriz binaria por columnas

            for ($i=0; $i < sizeof($bits[0]); $i++) {

                $fila = array();
                $k = 0;

                for ($j=0; $j < sizeof($bits); $j++) {

                    $fila[$k] = $bits[$j][$i];
                    $k++;

                }

                $this->crearPatrones($fila,$n,$bits);

            }

            $total = MatrizPatron::$contIgual + MatrizPatron::$cont;
            echo "</br>";
            echo "TOTAL: ".$total." EVALUAR: ".MatrizPatron::$contIgual." ACIERTOS: ".MatrizPatron::$cont;

        }


        public function crearPatrones($fila,$n,$bits){

            $mostrar = new Mostrar();
            $patron = array();
            $patron0 = array();
            $patron1 = array();

            $inicio = sizeof($fila) - PATRON;
            $k = 0;

            for ($i=$inicio; $i < sizeof($fila); $i++) {

                $patron[$k] = $fila[$i];
                $k++;

            }

            $this->copiarPatron($patron,$patron0);
            $this->copiarPatron($patron,$patron1);
            $this->crearPatron0($patron0);
            $this->crearPatron1($patron1);
            $this->buscarPatron($fila,$patron0);
            $this->buscarPatron($fila,$patron1);
            //$mostrar->verArray($patron0);
            //$mostrar->verArray($patron1);
            $this->compararSioNo($patron0,$patron1,MatrizPatron::$posicion,$n,$bits);
            MatrizPatron::$posicion++;

        }

        public function compararSioNo($patron0,$patron1,$numero,$n,$bits){

            $candidato = 0;

            if ($patron0[PATRON + 1] > $patron1[PATRON + 1]) {

                $candidato = 0;

            }

            if ($patron0[PATRON + 1] < $patron1[PATRON + 1]) {

                $candidato = $numero;
                MatrizPatron::$cont++;

            }

            if ($patron0[PATRON + 1] == $patron1[PATRON + 1]) {

                $candidato = $this->evaluarBinomial($numero,$n,$bits);
                MatrizPatron::$contIgual++;

            }

            echo $this->formatearNumero($candidato);

        }

        public function evaluarBinomial($numero,$n,$bits){

echo $numero,"</br>";

            $aciertos = $this->contarNumero($numero,$bits);

        }

        public function contarNumero($numero,$bits){

            $cont = 0;

            for ($i=0; $i < sizeof($bits); $i++) {

                for ($j=0; $j < sizeof($bits[$i]); $j++) {

                    if($bits[$i][$j] == $numero){

                        $cont++;

                    }

                }

            }

            return $cont;

        }

        public function verControl(){

            for ($i=0; $i < 36; $i++) {

                echo $this->formatearNumero($i + 1);

            }

            echo "</br>";

        }

        public function formatearNumero($numero){

            if ($numero > 9) {

                return "[".$numero."]";

            }else{

                return "[".str_pad($numero, 2, "0", STR_PAD_LEFT)."]";

            }

        }

        public function buscarPatron($fila,&$patron){

            $fin = sizeof($fila) - PATRON;

            for ($i=0; $i < $fin; $i++) {

                if ($this->compararPatrones($fila,$patron,$i)) {

                    $this->incrementar($patron);

                }

            }

        }

        public function incrementar(&$patron){

            $suma = $patron[PATRON + 1] + 1;
            $patron[PATRON + 1] = $suma;

        }

        public function compararPatrones($fila,$patron,$inicio){

            $fin = ($inicio + PATRON);
            $k = 0;

            for ($i=$inicio; $i <= $fin; $i++) {

                if ($fila[$i] != $patron[$k]) {

                    return false;

                }

                $k++;

            }

            return true;

        }

        public function copiarPatron($patron,&$patronCandidato){

            for ($i=0; $i < sizeof($patron); $i++) {

                $patronCandidato[$i] = $patron[$i];

            }

        }

        public function crearPatron0(&$patron0){

            $patron0[PATRON] = 0;
            $this->crearSuma($patron0);

        }

        public function crearPatron1(&$patron1){

            $patron1[PATRON] = 1;
            $this->crearSuma($patron1);

        }

        public function crearSuma(&$patron){

            $patron[PATRON + 1] = 0;

        }

        public function __destruct(){}

    }//fin clase

?>
