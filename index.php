<?php

require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Boolshop
        </h1>
    </header>
    <main>
        <?php foreach ($prodotti as $prodotto) {?>
            <article class="card">                
                <div>
                    <img src=" <?php echo $prodotto->getImgUrl(); ?>" alt="">
                </div>
                <div>
                    <p>
                        <?php echo $prodotto->getPrezzo(); ?>
                    </p>
                    <p>
                        <?php echo $prodotto->getName(); ?>
                    </p>
                    <p>
                        Categoria: <?php echo $prodotto->getCategoria(); ?>
                    </p>
                </div>
            </article>
        <?php } ?>
    </main>
</body>
</html>