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

    public function getBalance() :int
    {
        return $this->balance;
    }

    public function getName() :int
    {
        return $this->name;
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
    
    public function addProperty($)
    {
        $this->properties.array_push()
    }

    public function removeProperties($)
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