<?php
require_once __DIR__ . '/Categoria.php';

class Prodotti {
    private $prezzo;
    private $name;
    private $imgUrl;
    private $categoria;

    public function __construct ($prezzo, $name, $imgUrl, $categoria){
        $this->prezzo = $prezzo;
        $this->name = $name;
        $this->imgUrl = $imgUrl;
        $this->categoria = $categoria;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getName(){
        return $this->name;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    

}


?>