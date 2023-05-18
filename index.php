<?php 
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Accessories.php";
require_once __DIR__ . "/Models/db.php";

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
            <div class="row row-cols-4 py-5 g-4">
                <?php foreach ($products as $prod) {?>
                <div class="col">
                    <div class="card" >
                        <img src="<?php echo $prod->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prodotto: <?php echo $prod->prodName  ?></h5>
                            <p class="card-text">Prezzo: <?php echo $prod->price; ?> Euro</p>
                            <p class="card-text"><?php echo $prod->category->category?></p>
                        </div>
                    </div>
                </div> 
            <?php }; ?>    
            </div> 
        </div>

    </main>
    
    
</body>
</html>