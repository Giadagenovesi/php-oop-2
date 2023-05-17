<?php 

class Category {
    public $name;

    /**
     * @param string $_name
     */
    function __construct($_name)
    {
        $this->name = $_name;
    }
}