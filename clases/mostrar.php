<?php

    class Mostrar{

        //atributos

        //metodos
        public function __construct(){}

// NOTE: muestra array de 2 dimensiones
        public function verMatriz($matriz){

            for ($i=0; $i < sizeof($matriz); $i++) {

    			for ($j=0; $j < sizeof($matriz[$i]); $j++) {

    				if($matriz[$i][$j] == -1){

    					echo "[nl]";

    				}else {

    					echo $this->formatearNumero($matriz[$i][$j]);

    				}

    			}

    			echo "</br>";

    		}

        }

        public function verArray($array){

            for ($i=0; $i < sizeof($array); $i++) {

                echo $this->formatearNumero($array[$i]);

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

        public function __destruct(){}

    }//fin clase

?>
