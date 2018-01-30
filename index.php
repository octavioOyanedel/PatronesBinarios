<?php

    require_once("clases/coleccion.php");

    $coleccion = new Coleccion();
    $coleccion->crearMatrizNumerica();
    //$coleccion->verMatrizNumerica();
    $coleccion->crearMatrizBinaria();
    $coleccion->verMatrizBinaria();
    $coleccion->crearMatrizPatron();
    $coleccion->verMatrizPatron();

?>
