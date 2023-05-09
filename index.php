<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';

$cat = new Category('Gatto','fa-solid fa-cat');
$dog = new Category('Cane','fa-solid fa-dog');

$collar = new Product('Collare', 10, $dog, 40, '/img/dog-collar.jpg');

$kibble = new Food('Croccantini', 15, $cat, 10, '/img/dog-fod.jpg', 300);

$ball = new Toy('Pallina', 12, $dog, 20, '/img/dog-ball.jpg', 'Gomma');

$productList = [
    $collar,
    $kibble,
    $ball
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <div class="container">
            <div class="row ">

                <?php foreach($productList as $product){ ?>
                <div class="col-4 m-auto">
                    <div class="card">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->name; ?>
                            </h5>
                            <p class="card-text">
                                <i class="<?php echo $product->category->icon; ?>"></i>
                                <?php echo 'Prezzo:' . ' ' . $product->price; ?>  € -  
                                <?php echo $product->getClassName();?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>