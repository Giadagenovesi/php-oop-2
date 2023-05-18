<?php 
require_once __DIR__. "/Product.php";
require_once __DIR__. "/Category.php";


class Food extends Product {

    public $flavor;
    public $type;

    
    function __construct($_image, $_prodName, $_price, Category $_category)
    {
        parent::__construct($_prodName, $_price, $_category, $_image);
    }

}