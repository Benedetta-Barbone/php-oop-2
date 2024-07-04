<?php
require_once __DIR__ . '/Prodotti.php';

class Accessorio extends Prodotti {
    private $utilità;


    public function __construct($prezzo, $name, $imgUrl, $categoria, $utilità){
        parent::__construct($prezzo, $name, $imgUrl, $categoria);
        $this->utilità = $utilità;
    }

    public function getPeso(){
        return $this->utilità;
    }
}


?>