<?php
require_once __DIR__ . './partials/header.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Toys.php';
require_once __DIR__ . './Models/Kennel.php';
require_once __DIR__ . './Models/Category.php';
include __DIR__ . './Exception.php';



$food1 = new Food('Bocconcini con pollo', 3.50, 8, new Category("Gatto"), "https://www.spesasprint.it/img/prodotti/big/57165.jpg?v=2", "Pollo");
$food2 = new Food('Crocchette di manzo', 18, 4, new Category("Cane"), "https://www.damoreno.ch/media/catalog/product/cache/5b5d7988e9af9f38308c6dd6deb78357/3/0/3010470154476_1ntfebazhkbzboao.jpg", "Manzo");
$toy1 = new Toys('Pallina rimbalzante', 5.20, 11, new Category("Cane"), "https://ae01.alicdn.com/kf/H29af1bcda7c148a3ae3b88cf5505ccc8h/Accendi-palline-per-cani-lampeggiante-palla-elastica-LED-palla-molare-palla-incandescente-Pet-colore-luce-palla.jpg_Q90.jpg_.webp", "Plastica");
$toy2 = new Toys('Tiragraffi', 22.50, 2, new Category("Gatto"), "https://www.agrizoo2.it/wp-content/uploads/2022/05/48534_2.png", "Sisal");
$kennel1 = new Kennel('Cuccia avvolgente', 13.80, 6, new Category('Gatto'), 'https://m.media-amazon.com/images/I/51ARMnCOFmL._SL500_.jpg', 'Grigio Chiaro');
$kennel2 = new Kennel('Cuccia luxury', 29, 1, new Category('Cane'), 'https://www.original-legno.com/wp-content/uploads/2021/08/Cuccia_in_legno_Oasi_con_veranda_per_cani_barboncino.webp', 'Marrone');
$product = [];
array_push($product, $food1, $food2, $toy1, $toy2, $kennel1, $kennel2);

$food1->setWeight(3);
$food2->setWeight(18);
?>

<body>

<div class="container">
    <div class="row">
    <?php foreach ($product as $obj) { ?>
        <div class="col-4 my-4">
            <div class="card h-100">
                <img src="<?php echo $obj->img ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-title fs-4 fw-bold">
                        <?php echo $obj->name ?>
</p>
                    <p class="card-text">
                        Prezzo:
                        <?php echo $obj->price ?>€
                    </p>
                    <p class="card-text">
                        Quantità:
                        <?php echo $obj->quantity ?> rimanenti
                    </p>
                    <p class="card-text">
                        Peso:
                        <?php echo $obj->getWeight() ?> kg
                    </p>
                    <p class="card-text">
                        Tipo:
                        <?php echo get_class($obj) ?>
                    </p>
                    <p class="card-text">
                        Categoria:
                        <?php echo $obj->category->type; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php 
        try {
            echo multiplication('ciao');
            } catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
                                } ?>

</body>