<?php

namespace App\Classes;

class Property {
    public string $name;
    public int $price;
    public int $rent;

    public function __construct($name, $price, $rent) {
        $this->name = $name;
        $this->price = $price;
        $this->rent = $rent;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getRent(): int {
        return $this->rent;
    }
}
