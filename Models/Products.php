<?php

class Products {
    //Attributi
    public $image;
    public $prodName;
    public $price;
    public $quantity;
    public $available;
    public $category;

    function __construct($_prodName, $_price, $_category, $_image)
    {
        $this->prodName = $_prodName;
        $this->price = $_price;
        $this->category =  $_category;
        $this->image = $_image;
    }

}