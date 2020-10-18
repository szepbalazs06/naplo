<?php

require_once 'Ember.php';
require_once 'Tanulo.php';
require_once 'Tanar.php';
require_once 'Csoport.php';
require_once 'Factory.php';

//Létrehoz három csoportot, meghatározott tanárokkal és tanulókkal
for ($i = 1; $i < 4; $i++){
    $csoport{$i} = new Csoport();

    $csoport{$i}->setVezeto(Factory::emberFactory("tanar"));
    for ($j = 0; $j < 10; $j++){
        $csoport{$i}->addDiak(Factory::emberFactory("tanulo"));
    }
}

//kiírja egy tanuló adatait
echo $csoport{1}->getDiak(1);
echo "<br>------------------";

//kiírja egy tanuló átlagát
echo "<br>Átlag: ". $csoport{1}->getDiak(1)->atlag();
echo "<br>------------------";

//kiírja egy csoport átlagát
echo "<br>Csoport átlag: ". $csoport{1}->csoportAtlag();
echo "<br>------------------";

//kiírja a csoportok névsorát
echo "<br>Csoport névsor:<br>Vezető: ". $csoport{1};

?>
