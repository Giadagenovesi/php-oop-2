<?php
require_once __DIR__ . "/Category.php";

class Product {
    //Attributi
    public $image;
    public $prodName;
    public $price;
    public $quantity;
    public $available;
    public $category;

    /**
     * @param string $_prodName
     * @param number $_price
     * @param string $_category
     * @param string $_image
     */
    function __construct($_prodName, $_price, Category $_category, $_image)
    {
        $this->prodName = $_prodName;
        $this->price = $_price;
        $this->category =  $_category;
        $this->image = $_image;
    }

    public function get_Product() {
        return "Prodotto: {$this->prodName}, Prezzo: {$this->price}"; 
    }

}