<?php
require_once __DIR__ . '/Prodotti.php';
class Cibo extends Prodotti {

    private $peso;
    private $calorie;

    public function __construct($prezzo, $name, $imgUrl, $categoria, $peso, $calorie){
        parent::__construct($prezzo, $name, $imgUrl, $categoria);
        $this->peso = $peso;
        $this->calorie = $calorie;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCalorie(){
        return $this->calorie;
    }

}


?>