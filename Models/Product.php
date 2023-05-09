<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Porpic.php';

class Product {

    use Propic;

    public $name;
    public $price;
    public $description;
    public $stock;
    public $weight;
    public $category;
    public $image;

    public function __construct(string $name, int $price, Category $category, int $stock, string $image){
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->stock = $stock;
        $this->image = $image;
    }

    public function getClassName(){
        return get_class();
    }

}