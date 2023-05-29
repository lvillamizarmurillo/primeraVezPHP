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
    // //punto 7 variables y constantes
    // //numérica
    // $numero = 26;
    // //texto
    // $nombre = "Ludwing";
    // //booleano
    // $es_valido = true;
    // //var_dump imprime el tipo de dato y contenido de la variable
    // echo var_dump($nombre);
    // //constantes
    // //numérica
    // define("PI", 3.14);
    // //texto
    // define("SALUDO","Hola compañeros del yutu");
    // //booleano
    // define("ES_INCORRECTO",false);
    // //Punto 8 Tipos de datos
    // //booleano
    // $logueado = true;
    // var_dump($logueado);
    // //Enteros
    // $numero = 10;
    // var_dump($numero);
    // //Floats
    // $flotante = 12.3;
    // var_dump($flotante);
    // //Strings
    // $cadenaTexto = "Jorge";
    // var_dump($cadenaTexto);
    // //array
    // $array = [];
    // var_dump($array);
    //Punto 9 Números y operadores
    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";
    var_dump($numero1 > $numero2);
    echo "<br/>";
    var_dump($numero1 < $numero2);
    echo "<br/>";
    var_dump($numero1 >= $numero2);
    echo "<br/>";
    var_dump($numero1 <= $numero2);
    echo "<br/>";
    var_dump($numero2 == $numero3);
    echo "<br/>";
    var_dump($numero2 == $numero4);
    echo "<br/>";
    var_dump($numero2 === $numero4);
    echo "<br/>";
    // -1 si izquierda es menor
    // 0 si es igual
    // 1 si izquierda es mayor
    var_dump($numero1 <=> $numero2);
    echo "<br/>";
    var_dump($numero2 <=> $numero3);
    echo "<br/>";
    var_dump($numero2 <=> $numero1);
    echo "<br/>";

    //cadenas de texto

    $nombreCliente = "Armando Cóidigo";
    //conocer la extensión de un string
    echo strlen($nombreCliente);
    var_dump($nombreCliente);
    //eliminar espacios en blanco
    $nuevoTexto = trim($nombreCliente);
    echo strlen($nuevoTexto);
    //convertirlo a mayusculas
    echo strtoupper($nombreCliente);
?>