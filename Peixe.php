<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;


    public function alimentar() {
        echo "<p>Comendo substancias</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não emiti som</p>";
    }

    public function locomover() {
        echo "<p> Nadando</p>";
    }
    public function soltarBolha(){
        echo "<p>Soltou uma bolha</p>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
