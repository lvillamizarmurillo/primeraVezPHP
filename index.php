<?php
    // //Punto 6, maneras de imprimir un texto con echo, printf y sprintf
    // //echo
    // echo "Texto a imprimir";
    // //printf
    // $texto = "Hola";
    // printf("\n%s Mundo",$texto);
    // //sprintf
    // $mensaje = sprintf("\n%s capos del php",$texto);
    // echo $mensaje;
    //punto 7 variables y constantes
    //numérica
    $numero = 26;
    //texto
    $nombre = "Ludwing";
    //booleano
    $es_valido = true;
    //var_dump imprime el tipo de dato y contenido de la variable
    echo var_dump($nombre);
    //constantes
    //numérica
    define("PI", 3.14);
    //texto
    define("SALUDO","Hola compañeros del yutu");
    //booleano
    define("ES_INCORRECTO",false);
?>