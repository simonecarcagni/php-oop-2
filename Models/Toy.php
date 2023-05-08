<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Toy extends Product{

    public $material;

    public function __construct(string $name, int $price, Category $category, int $stock, string $image ,string $material){
        $this->material = $material;

        parent::__construct($name, $price, $category, $stock, $image, $stock);
    }

    public function getClassName(){
        return get_class();
    }

}