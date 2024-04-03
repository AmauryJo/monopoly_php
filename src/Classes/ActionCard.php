<?php

class ActionCard{

    public string $name;
    public string $description;
    public string $type;



    public function __construct($name, $description, $type)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        
    }

    public function chanceCard()
    {
        
    }

    public function communityCard()
    {
        
    }
}