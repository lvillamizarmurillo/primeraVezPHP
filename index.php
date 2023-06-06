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
    // //Punto 9 Números y operadores
    // $numero1 = 20;
    // $numero2 = 30;
    // $numero3 = 30;
    // $numero4 = "30";
    // var_dump($numero1 > $numero2);
    // echo "<br/>";
    // var_dump($numero1 < $numero2);
    // echo "<br/>";
    // var_dump($numero1 >= $numero2);
    // echo "<br/>";
    // var_dump($numero1 <= $numero2);
    // echo "<br/>";
    // var_dump($numero2 == $numero3);
    // echo "<br/>";
    // var_dump($numero2 == $numero4);
    // echo "<br/>";
    // var_dump($numero2 === $numero4);
    // echo "<br/>";
    // // -1 si izquierda es menor
    // // 0 si es igual
    // // 1 si izquierda es mayor
    // var_dump($numero1 <=> $numero2);
    // echo "<br/>";
    // var_dump($numero2 <=> $numero3);
    // echo "<br/>";
    // var_dump($numero2 <=> $numero1);
    // echo "<br/>";

    // //cadenas de texto

    // $nombreCliente = "Armando Cóidigo";
    // //conocer la extensión de un string
    // echo strlen($nombreCliente);
    // var_dump($nombreCliente);
    // //eliminar espacios en blanco
    // $nuevoTexto = trim($nombreCliente);
    // echo strlen($nuevoTexto);
    // //convertirlo a mayusculas
    // echo strtoupper($nombreCliente);
    // //Punto 10 Arrays y arreglos
    // //indexados
    // $nombres = ["Juan","Santiago","Pedro"];
    // var_dump($nombres);
    // echo "<hr>";
    // //asociativo
    // $edades = array("Juan"=>35,"Santiago"=>37,"Pedro"=>45);
    // var_dump($edades);
    // echo "<hr>";
    // //array multidimensiponal(Matris)
    // $kamikase = array(
    //     "Juan" => array("edad"=>23,"ciudad"=>"Madrid","pais"=>"España"),
    //     "Santiago" => array("edad"=>37,"ciudad"=>"Paris","pais"=>"Francia"),
    //     "Pedro" => array("edad"=>43,"ciudad"=>"Bogota","pais"=>"Colombia")
    // );
    // var_dump($kamikase);
    // echo "<hr>";
    // $kamikase["Santiago"]["altura"] = 1.76;
    // var_dump($kamikase["Santiago"]);
    // echo "<hr>";
    // //array_flip(): Intercambia las claves con sus valores correspondientes en un array.
    // $ejemploFlip = array("Canguro"=>10,"Rinoceronte"=>20,"Capibara"=>30);
    // var_dump(array_flip($ejemploFlip));
    // echo "<hr>";
    // //array_fill(): Rellena un array con un valor especificado.
    // $ejemploFill = array_fill(2,3,"Chamoi");
    // var_dump($ejemploFill);
    // echo "<hr>";
    // //array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
    // $ejemploFilter = array(6=>"Zorriyo",8=>"Quimioterapia",9=>"Cristian Nodal");
    // var_dump(array_filter($ejemploFilter,function($k){return $k >7;},ARRAY_FILTER_USE_KEY));
    // echo "<hr>";
    // //array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
    // $ejemploMap = [100,300,450,560];
    // var_dump(array_map(function($n){return $n*0.1;},$ejemploMap));
    // echo "<hr>";
    // //array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
    // $ejemploReduce = array(800,600,300);
    // var_dump(array_reduce($ejemploReduce,function ($na,$so){$na += ($so*0.1);return $na;}));
    // echo "<hr>";
    // //array_key_exists(): Comprueba si una clave existe en un array.
    // $ejemploKeyExists = array("Chompa"=>23,"Kamusari"=>32);
    // $rta = array_key_exists("Chompa",$ejemploKeyExists) ? $rta = "Existe Chompa" : $rta = "No chingue";
    // var_dump($rta);
    // echo "<hr>";
    // //in_array(): Comprueba si un valor existe en un array.
    // $ejemploInArray = array("Cobra"=>"Kai","Champu"=>"Pantene");
    // $rta = ((in_array("Kai",$ejemploInArray))&&(in_array("Pantene",$ejemploInArray))) ? $rta = "Kai y Pantene" : "No existe pana";
    // var_dump($rta);
    // echo "<hr>";
    // //array_rand(): Devuelve una o varias claves aleatorias de un array.
    // $ejemploRand = array("Sopa"=>"Macako","Archipielago"=>"Compa","Que"=>"So");
    // var_dump(array_rand($ejemploRand,2));
    // echo "<hr>";
    // //array_unique(): Elimina los valores duplicados de un array.
    // $ejemploUnique = array("Que"=>"So","Exodo",3,"Exodo"=>"So","3");
    // var_dump(array_unique($ejemploUnique));
    // echo "<hr>";
    // //array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
    // $ejemploIntersect1 = array("Piña","Plata"=>"o Plomo",3,10.5);
    // $ejemploIntersect2 = array("calle"=>"o Plomo",10.5,"3");
    // var_dump(array_intersect($ejemploIntersect1,$ejemploIntersect2));
    // echo "<hr>";
    // //array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
    // $ejemploDiff1 = array("Pato","Chupa",3,"ssj1"); 
    // $ejemploDiff2 = array("Pato","Chupa","hielo","3"); 
    // var_dump(array_diff($ejemploDiff1,$ejemploDiff2));
    // echo "<hr>";
    // //array_push(): Agrega uno o más elementos al final de un array.
    // $ejemploPush = array("Sopas");
    // array_push($ejemploPush,"Macarrones","Queso");
    // var_dump($ejemploPush);
    // echo "<hr>";
    // //array_pop(): Extrae y elimina el último elemento de un array.
    // $ejemploPop = array_pop($ejemploDiff1);
    // var_dump($ejemploPop);
    // echo "<hr>";
    // //array_reverse(): Revierte el orden de los elementos en un array.
    // $ejemploReverse = array("Pollo","Caldo","Chimba","Piña");
    // var_dump(array_reverse($ejemploReverse));
    // echo "<hr>";
    // //array_sum(): Devuelve la suma de todos los valores de un array numérico.
    // $ejemploSum = array(8,6,9.5,10.5);
    // var_dump(array_sum($ejemploSum));
    // echo "<hr>";
    // //array_product(): Devuelve el producto de todos los valores de un array numérico.
    // $ejemploProduct = array(9*10*0.1);
    // var_dump(array_product($ejemploProduct));
    // echo "<hr>";
    // //array_chunk(): Divide un array en fragmentos más pequeños.
    // $ejemploChunk = array("Kamote","Kaguama","Chimpance",4);
    // var_dump(array_chunk($ejemploChunk,2));
    // echo "<hr>";
    // //array_keys(): Devuelve todas las claves de un array.
    // $ejemploKeysValues = array("Champu"=>"Minora","Menora"=>"Valentina",3=>"Oso");
    // var_dump(array_keys($ejemploKeysValues));
    // echo "<hr>";
    // //array_values(): Devuelve todos los valores de un array.
    // var_dump(array_values($ejemploKeysValues));
    // echo "<hr>";
    // //array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
    // //Punto 11 Iset and Empty
    // $nombre = "Login";
    // var_dump(isset($nombre));
    // var_dump(empty($nombre));
    // $oso = null;
    // var_dump(isset($oso));
    // var_dump(empty($oso));
    // //Punto 12 Estructuras de control
    // //if
    // $num1 = 8;
    // $num2 = 5;
    // if($num1 < $num2){
    //     echo "<h1>Si</h1>";
    // }else{
    //     echo "<h1>No</h1>";
    // };
    // $autenticado = true;
    // $admin = false;
    // if($autenticado && $admin){
    //     echo "Usuario autenticado correctamente";
    // }else{
    //     echo "Usuario no autenticado, inicia sesión";
    // }
    // //if anidados
    // $cliente = [
    //     'nombre' => 'Laura',
    //     'saldo' => 0,
    //     'informacion' => [
    //         'tipo' => 'regular'
    //     ]
    // ];
    // echo "<br>";
    // if( !empty($cliente) > 0){
    //     echo "El arreglo del cliente no esta vacio";
    // }else{
    //     echo "No hay saldo";
    // };
    // echo "<br>";
    // //else if
    // if( $cliente['saldo'] >0 ){
    //     echo "El cliente tiene saldo";
    // } else if($cliente['informacion']['tipo'] === "Premium"){
    //     echo "El cliente es premium";
    // } else{
    //     echo "El cliente definido o no tiene saldo o no es premium";
    // };
    // //Punto 12.2 Estructuras repetitivas
    // //while
    // // $i = 1;
    // // while($i < 11){
    // //     echo i . "<br>";
    // //     $i++;
    // // };
    // // echo "<br>";
    // //do while
    // $i = 100;
    // do{
    //     echo $i . "<br>";
    //     $i++;
    // }while($i<10);
    // //For Each
    // $clientes =array('Samuel','Daniela','Valentina');
    // foreach($cliente as $cliente):
    //     echo $cliente . "<br/>";
    // endforeach;
    // $cliente = [
    //     'nombre' => 'Laura',
    //     'saldo' => 200,
    //     'tipo' => 'Premium'
    // ];
    // foreach($cliente as $key =>$valor):
    //     echo $key . " - " . $valor ."<br/>";
    // endforeach;
    // $producto = [
    //     [
    //         'nombre' => 'Terreneitor',
    //         'precio' => 10000,
    //         'disponible' => true
    //     ],
    //     [
    //         'nombre' => 'Heladeria Kreisel Supra',
    //         'precio' => 5000,
    //         'disponible' => true
    //     ],
    //     [
    //         'nombre' => 'Max 3 turbo',
    //         'precio' => 2000,
    //         'disponible' => false
    //     ]
    // ];
    //Punto 13 Funciones
    declare(strict_types=1);
    function sumar(int $numero1 = 0, int $numero2){
        echo $numero1 + $numero2;
    };
    sumar(10,5);
    //retornando un valor
    function usuarioAutenticado(bool $autenticado) : ? string{
        if($autenticado){
            return "El usuario esta autenticado";
        }else{
            return null;
        };
    };
    $usuario = usuarioAutenticado(false);
    echo $usuario;

    function datos():void{
        var_dump(func_get_args());
        var_dump(...func_get_args());
        // extract(...func_get_args());
    };

    datos(["nombre"=> (string) "miguel", "edad"=> (int) 23, "casa"=> (bool) true], ["bebe"=> "a"]);
        file_get_contents();
    $nombre = "Miguel";
   
    $fn = function () use($nombre):string{
        $nombre = "Andres";
        return $nombre;
    };
    echo $fn();
    echo $nombre;
    $fn = function():bool{
        return true;
    };

    echo $fn();

    function saludar(string $nombre): ?string{
        if($nombre=="Miguel"){
            return "Hola que mas";
        }else{
            return null;
        }
        
    }

    echo saludar('Pepito');
?>