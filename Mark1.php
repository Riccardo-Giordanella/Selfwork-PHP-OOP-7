<?php

require_once 'IronmanArmor.php';

class Mark1 extends IronmanArmor {
    public function __construct() {
        parent::__construct('Mark 1');
    }

    public function display() {
        echo "This is Ironman Armor: " . $this->model . "\n";
    }
}


?>