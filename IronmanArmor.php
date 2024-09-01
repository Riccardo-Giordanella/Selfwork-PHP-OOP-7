<?php

abstract class IronmanArmor {
    protected $model;
    protected static $count = 0;

    public function __construct($model) {
        $this->model = $model;
        self::$count++;
    }

    abstract public function display();

    public static function getCount() {
        return self::$count;
    }
}


?>