<?php
class Abecedario extends Animal{
    public $nombre;
    public function __construct($_nombre){
        $this->nombre = $_nombre;
    }
    public function roar(){
        echo $this->nombre."ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
}




?>
