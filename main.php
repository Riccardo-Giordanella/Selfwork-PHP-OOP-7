<?php


require_once 'Mark1.php';
require_once 'CustomIronman.php';

$army = [];
$numberOfIronmen = rand(5, 15); // Genera un numero random di Ironman

for ($i = 0; $i < $numberOfIronmen; $i++) {
    if (rand(0, 1)) {
        $army[] = new Mark1();
    } else {
        $army[] = new CustomIronman('Custom Model', 'Red and Gold', 'Repulsor Rays', ['Flight', 'Super Strength']);
    }
}

foreach ($army as $ironman) {
    $ironman->display();
}

echo "Total Ironman created: " . IronmanArmor::getCount() . "\n";


?>