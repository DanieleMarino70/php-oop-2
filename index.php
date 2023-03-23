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

    public function __construct(string $_type)
    {
        $this->type = $_type;
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


$test = new Product("link img", "Osso", 4.21, new Category("Cane"));

var_dump($test);
