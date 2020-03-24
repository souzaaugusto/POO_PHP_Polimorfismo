<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPelo;


    public function alimentar() {
        echo "<p>Comendo fruta<?p>";;
        
    }

    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }

    public function locomover() {
        echo "<p> Voando</p>";
    }
    public function fazerNinho(){
        echo "<p>Fazendo ninho</p>";
    }
    
}

function getCorPelo() {
    return $this->corPelo;
}

 function setCorPelo($corPelo) {
    $this->corPelo = $corPelo;
}


