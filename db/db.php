<?php
require_once __DIR__ . '/classes/Categoria.php';
require_once __DIR__ . '/classes/Accessorio.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/Prodotti.php';


$cane = new Categoria ('Cane');
$gatto = new Categoria ('Gatto');
$pesce = new Categoria ('Pesci');
$uccello = new Categoria ('Uccelli');
?>