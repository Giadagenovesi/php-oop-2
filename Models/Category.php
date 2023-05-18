<?php 

class Category {
    public $category;

    /**
     * @param string $_name
     */
    function __construct($_category)
    {
        $this->category = $_category;
    }
}