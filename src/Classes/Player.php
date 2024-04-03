<?php

namespace App\Classes;

class Player {

    public string $name;
    public int $balance;
    public array $properties;
    public bool $isJailed;

    public function __construct($name)
    {
        $this->name = $name;
        $this->balance = 1000000;
        $this->properties = [];
        $this->isJailed = false;
    }

    public function incrBalance($amount, $from) :int
    {
        $this->balance =+ $amount;
        return $this->balance;
    }

    public function decrBalance($amount, $to) :int
    {
        $this->balance =- $amount;
        return $this->balance;
    }
    
    public function addProperty($amount)
    {

    }

    public function removeProperties($amount)
    {

    }

    public function isJailed() :bool
    {
        return $this->isJailed;
    }

    public function jailPlayer()
    {
        $this->isJailed = true;
    }

    public function unJailPlayer()
    {
        $this->isJailed = false;
    }





}