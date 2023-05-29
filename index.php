<?php
    //Punto 6, maneras de imprimir un texto con echo, printf y sprintf
    //echo
    echo "Texto a imprimir";
    //printf
    $texto = "Hola";
    printf("\n%s Mundo",$texto);
    //sprintf
    $mensaje = sprintf("\n%s capos del php",$texto);
    echo $mensaje;
?>