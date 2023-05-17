<?php 
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";

$prod1 = new Product("Cuccia", 60, new Category('Cane'), "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg");
$prod2 = new Product("Lettiera", 20, new Category('Gatto'), "https://patatofriendly.com/wp-content/uploads/2020/11/Lettiera-robotizzata-per-gatti-grandi.jpg");
$prod3 = new Product("Crocchette", 19, new Category('Gatto'), "https://www.gardenstuff.it/49009-large_default/crocchette-per-gatto-adulto-sterilizzato-natural-trainer-prosciutto-15-kg.jpg");
$prod4 = new Product("Pollo di gomma", 10, new Category('Cane'), "https://img.fruugo.com/product/9/65/439896659_max.jpg");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header> 
        <div class="container d-flex justify-content-center align-items-center">
            <div class="mx-4">
                <i class="fa-solid fa-paw"></i>
            </div>
            <h1 class="text-center">Animal commerce</h1>
            <div class="mx-4">
                <i class="fa-solid fa-paw"></i>
            </div>
        </div> 
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-4 py-5">
                <div class="col">
                    <div class="card" >
                        <img src="<?php echo $prod1->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod1->prodName  ?></h5>
                            <p class="card-text"><?php echo $prod1->price; ?></p>
                            <p class="card-text"><?php echo $prod1->category->category?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <img src="<?php echo $prod2->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod2->prodName  ?></h5>
                            <p class="card-text"><?php echo $prod2->price; ?></p>
                            <p class="card-text"><?php echo $prod2->category->category?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <img src="<?php echo $prod3->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod3->prodName  ?></h5>
                            <p class="card-text"><?php echo $prod3->price; ?></p>
                            <p class="card-text"><?php echo $prod3->category->category?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" >
                        <img src="<?php echo $prod4->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod4->prodName  ?></h5>
                            <p class="card-text"><?php echo $prod4->price; ?></p>
                            <p class="card-text"><?php echo $prod4->category->category?></p>
                        </div>
                    </div>
                </div>
                
            </div> 
        </div>

    </main>
    
    
</body>
</html>