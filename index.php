<?php
// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

//  TODO L'e-commerce vende ** prodotti ** per animali.

// I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.

// I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, 
// prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 



class Category
{
    public $type;
    public $icon;

    public function __construct(string $_type, string $_icon)
    {
        $this->type = $_type;
        $this->icon = $_icon;
    }
}

class Product
{
    public $image;
    public $title;
    public $price;
    public $category;


    public function __construct(string $_image, string $_title, float $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }
}


class Food extends Product
{
    public $expiration;

    public function __construct(string $_image, string $_title, float $_price, Category $_category, string $_expiration)
    {
        parent::__construct($_image, $_title, $_price, $_category);
        $this->expiration = $_expiration;
    }
}


class Toys extends Product
{


    public function __construct(string $_image, string $_title, float $_price, Category $_category, string $_expiration)
    {
        parent::__construct($_image, $_title, $_price, $_category);
    }
}


class Kennel extends Product
{


    public function __construct(string $_image, string $_title, float $_price, Category $_category, string $_expiration)
    {
        parent::__construct($_image, $_title, $_price, $_category);
    }
}


$dog_type = new Category("Cane", '<i class="fa-solid fa-dog"></i>');
$cat_type = new Category("Gatto", '<i class="fa-solid fa-cat"></i>');

$products = [
    new Food("link-img", "Patè", 0.99, $cat_type, "10-31-2024")
];


foreach ($products as $product) {
    var_dump($product);
}

// $test_dog = new Product("link img", "Osso", 4.21, $dog_type);
// $test_cat = new Product("link img", "Snack", 2.99, $cat_type);


// var_dump($test_dog);
// var_dump($test_cat);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-2</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
</body>

</html>