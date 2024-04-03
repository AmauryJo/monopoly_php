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

    public function isJailed() :bool
    {
        return $this->isJailed;
    }

    public function incrBalance($amount, $from) :int
    {
        $this->balance =+ $amount;
        return $this->balance;
    }

    public function decrBalance($amount, $to) :int
    {
        $tempBalance = $this->balance =- $amount;

        if ($tempBalance < 0){
            throw new \RuntimeException('Solde non suffisant');
        }
        else{
            $this->balance =- $amount;
            return $this->balance;
        }

    }
    
    public function addProperty()
    {

    }

    public function removeProperties()
    {

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