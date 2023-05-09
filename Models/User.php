<?php

require_once __DIR__ . '/../Traits/Propic.php';

class User {

    use Propic;

    public $name;
    public $surname;
    public $age;

    public function __construct(string $name, string $surname, int $age){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
}