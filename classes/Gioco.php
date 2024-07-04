<?php
require_once __DIR__ . '/Prodotti.php';
class Gioco extends Prodotti {

    private $materiale;


    public function __construct($prezzo, $name, $imgUrl, $categoria, $materiale){
        parent::__construct($prezzo, $name, $imgUrl, $categoria);
        $this->materiale = $materiale;
    }

    public function getPeso(){
        return $this->materiale;
    }
}


?>