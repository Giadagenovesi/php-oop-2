<?php 
require_once __DIR__. "/Product.php";

class FAccessories extends Product {

    function __construct($_image, $_prodName, $_price, Category $_category)
    {
        parent::__construct($_prodName, $_price, $_category, $_image);
    }

}