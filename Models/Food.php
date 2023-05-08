<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product{

    public $calories;

    public function __construct(string $name, int $price, Category $category, int $stock, string $image, int $calories){
        $this->calories = $calories;

        parent::__construct($name, $price, $category, $stock, $image, $stock);
    }

    public function getClassName(){
        return get_class();
    }

}