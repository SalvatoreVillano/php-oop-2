<?php
require_once __DIR__ . './partials/header.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Toys.php';
require_once __DIR__ . './Models/Kennel.php';
require_once __DIR__ . './Models/Category.php';


$food1 = new Food('Bocconcini con pollo', 3.50, 8, new Category("Gatto"), "https://www.spesasprint.it/img/prodotti/big/57165.jpg?v=2", 4.25, "Pollo");
// var_dump($food1);
?>

<body>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img src="<?php echo $food1->img ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-title fs-4 fw-bold">
                        <?php echo $food1->name ?>
</p>
                    <p class="card-text">
                        Prezzo:
                        <?php echo $food1->price ?>€
                    </p>
                    <p class="card-text">
                        Quantità:
                        <?php echo $food1->quantity ?> rimanenti
                    </p>
                    <p class="card-text">
                        Tipo:
                        <?php echo get_class($food1) ?>
                    </p>
                    <p class="card-text">
                        Categoria:
                        <?php echo $food1->category->type; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>