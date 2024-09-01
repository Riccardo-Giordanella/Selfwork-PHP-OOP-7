<?php

require_once 'IronmanArmor.php';

class CustomIronman extends IronmanArmor {
    private $color;
    private $weapon;
    private $specialAbilities;
    private $energyLevel;
    private $defenseLevel;

    public function __construct($model, $color, $weapon, $specialAbilities = [], $energyLevel = 100, $defenseLevel = 100) {
        parent::__construct($model);
        $this->color = $color;
        $this->weapon = $weapon;
        $this->specialAbilities = $specialAbilities;
        $this->energyLevel = $energyLevel;
        $this->defenseLevel = $defenseLevel;
    }

    public function display() {
        echo "This is Ironman Armor: " . $this->model . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Weapon: " . $this->weapon . "\n";
        echo "Special Abilities: " . implode(', ', $this->specialAbilities) . "\n";
        echo "Energy Level: " . $this->energyLevel . "%\n";
        echo "Defense Level: " . $this->defenseLevel . "%\n";
    }

    public function takeDamage($amount) {
        $this->defenseLevel -= $amount;
        if ($this->defenseLevel < 0) {
            $this->defenseLevel = 0;
        }
    }

    public function repairArmor($amount) {
        $this->defenseLevel += $amount;
        if ($this->defenseLevel > 100) {
            $this->defenseLevel = 100;
        }
    }
}


?>