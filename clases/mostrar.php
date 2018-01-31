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

    					echo "[n]";

    				}else {

    					echo "[".$matriz[$i][$j]."]";

    				}

    			}

    			echo "</br>";

    		}

        }

        function verArray($array){

            for ($i=0; $i < sizeof($array); $i++) {

                echo $array[$i]." ";

            }

            echo "</br>";

        }

        public function __destruct(){}

    }//fin clase

?>
