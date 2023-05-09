<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Propic.php';

class Product {

    use Propic;

    public $name;
    public $price;
    public $description;
    public $stock;
    public $weight;
    public $category;

    public function __construct(string $name, int $price, Category $category, int $stock){
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->stock = $stock;

    }

    public function getClassName(){
        return get_class();
    }

}