<?php
    //PHP INTERMEDIO
    // //Programación orientada a objetos
    // //clases
    // class Capibara{
    //     private $nombre;
    //     protected $edad;

    //     public function __construct($nombre,$edad){
    //         $this->nombre = $nombre;
    //         $this->edad = $edad;
    //     }
    //     public function getNombre(){
    //         return $this->nombre;
    //     }
    //     public function setNombre($nombre){
    //         $this->nombre = $nombre;
    //     }
    //     public function getEdad(){
    //         return $this->edad;
    //     }
    //     public function setEdad($nombre){
    //         $this->edad = $edad;
    //     }
    //     public function saludar(){
    //         echo "Hola, mi nombre es ".$this->nombre." y mi edad es: ".$this->edad;
    //     }
    // }
    // $alumno = new Capibara("Chancho",25);
    // $alumno->getNombre();//Se omite con el constructor
    // $alumno->getEdad();//Se omite con el constructor
    // $alumno->saludar();
    // //Herencia
    // class Transporte{
    //     public function __construct(protected int $ruedas, protected int $capacidad){

    //     }
    //     public function getInfo() : string{
    //         return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas.";
    //     }
    //     public function getRuedas() : int {
    //         return $this->ruedas;
    //     }
    // }
    // class Bicicleta extends Transporte{
    //     public function getInfo() : string{
    //         return "El transporte tiene ".$this->ruedas." ruedas y una capacidad de ".$this->capacidad." personas Y NO GASTA GASOLINA.";
    //     }
    // }
    // class Automovil extends Transporte{
    //     public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){

    //     }
    //     public function getTransmision(){
    //         return $this->transmision;
    //     }
    // }
    // $mercedes = new Automovil(4,5,"Manual");
    // echo $mercedes->getInfo();
    // echo $mercedes->getTransmision();
    // $bmx = new Bicicleta(2,1);
    // echo $bmx->getInfo();
    //Clases abstractas
    abstract class Animal{
        abstract public function hacerSonido();
    }
    class Capibara extends Animal{
        public function __construct(){

        }
        public function hacerSonido(){
            echo "Glu, glu, glu.";
        }
    }
    class Camello extends Animal{
        public function __construct(){

        }
        public function hacerSonido(){
            echo "every go to the disco.";
        }
    }
    $chompiras = new Capibara();
    $tripaSeca = new Camello();
    $chompiras->hacerSonido();
    $tripaSeca->hacerSonido();
?>