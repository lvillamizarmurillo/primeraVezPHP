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
    // //Clases abstractas
    // abstract class Animal{
    //     abstract public function hacerSonido();
    // }
    // class Capibara extends Animal{
    //     public function __construct(){

    //     }
    //     public function hacerSonido(){
    //         echo "Glu, glu, glu.";
    //     }
    // }
    // class Camello extends Animal{
    //     public function __construct(){

    //     }
    //     public function hacerSonido(){
    //         echo "every go to the disco.";
    //     }
    // }
    // $chompiras = new Capibara();
    // $tripaSeca = new Camello();
    // $chompiras->hacerSonido();
    // $tripaSeca->hacerSonido();
    // //Interfaces
    // interface Figura{
    //     public function calcularArea();
    // }
    // interface Figura3D extends Figura{
    //     public function calcularVolumen();
    // }
    // class Cubo implements Figura3D{
    //     public function __construct(private int $lado){}
    //     public function calcularArea(){
    //         return 6*pow($this->lado,2);
    //     }
    //     public function calcularVolumen(){
    //         return pow($this->lado,3);
    //     }
    // }
    // $cubo = new Cubo(5);
    // echo $cubo->calcularArea();
    // echo $cubo->calcularVolumen();
    // //Polimorfismo
    // interface TransporteInterfaz {
    //     public function getInfo() : string;
    //     public function getRuedas() : int;
    // }
    // class Transporte implements TransporteInterfaz{
    //     public function __construct(protected int $ruedas,protected int $capacidad){}
    //     public function getInfo() : string {
    //         return "El transporte cuenta con ".$this->ruedas." ruedas y tiene una capacidad de ".$this->capacidad." personas.";
    //     }
    //     public function getRuedas() : int {
    //         return $this->ruedas;
    //     }
    // }
    // class Automovil extends Transporte implements TransporteInterfaz{
    //     public function __construct(protected int $ruedas,protected int $capacidad,protected string $color){}
    //     public function getInfo(): string{
    //         return "El auto cuenta con ".$this->ruedas." ruedas y tiene una capacidad de ".$this->capacidad." personas. Aparte es de color ".$this->color;
    //     }
    //     public function getColor(){
    //         return "El color es: ".$this->color;
    //     }
    // }
    // $transporte = new Transporte(8,20);
    // $bmw = new Automovil(4,5,"Negro");
    // echo $transporte->getInfo();
    // echo $bmw->getInfo();
    // echo $bmw->getColor();
    // //Autoload
    // function my_autoload($clase){
    //     require __DIR__.'/clases/'.$clase.'.php';
    // }
    // spl_autoload_register('my_autoload');
    // $detalles = new Detalles();
    // $clientes = new Clientes();
    //Namespaces
    namespace App;
    class Detalles{
        public function __construct(){
            echo "Desde la clase de Detalles.php";
        }
    }
    //imagine que es otro archivo :)
    use App\Detalles;
    function my_autoload($clase){
        $fileClass = explode('\\',$clase);
        require __DIR__.'/clases/'.$fileClass[1].'.php';
    }
    spl_autoload_register('my_autoload');
    $detalles = new Detalles();
?>