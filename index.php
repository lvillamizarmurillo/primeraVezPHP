<?php
    //PHP INTERMEDIO
    //Programación orientada a objetos
    //clases
    class Capibara{
        private $nombre;
        protected $edad;

        public function __construct($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($nombre){
            $this->edad = $edad;
        }
        public function saludar(){
            echo "Hola, mi nombre es ".$this->nombre." y mi edad es: ".$this->edad;
        }
    }
    $alumno = new Capibara("Chancho",25);
    $alumno->getNombre();//Se omite con el constructor
    $alumno->getEdad();//Se omite con el constructor
    $alumno->saludar();
?>