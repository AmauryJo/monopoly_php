<?php

namespace App\Classes;

class Property {
    public string $name;
    public int $price;
    public int $rentPrice;

    public function __construct($name, $price, $rentPrice) {
        $this->name = $name;
        $this->price = $price;
        $this->rentPrice = $rentPrice;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getRent(): int {
        return $this->rentPrice;
    }
}
