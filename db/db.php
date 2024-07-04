<?php
require_once __DIR__ . '/../classes/Categoria.php';
require_once __DIR__ . '/../classes/Accessorio.php';
require_once __DIR__ . '/../classes/Cibo.php';
require_once __DIR__ . '/../classes/Gioco.php';
require_once __DIR__ . '/../classes/Prodotti.php';


$cane = new Categoria ('Cane');
$gatto = new Categoria ('Gatto');
$pesce = new Categoria ('Pesci');
$uccello = new Categoria ('Uccelli');


$prodotti = [
    new Cibo (15.99, 'Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', 'Cane', 1200, 600),
    new Cibo (15.99, 'Almo Nature Holistic Maintenance', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg','Cane', 1600, 200),
    new Cibo (4.99, 'Almo NAture Cat daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Gatto', 250, 1500),
    new Cibo (3.99, 'Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Pesci', 600, 150),
    new Accessorio(78.99, 'Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Uccelli', 'far volare gli uccelli'),
    new Gioco (7.99, 'Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Gatto', 'stoffa'),

]

?>


