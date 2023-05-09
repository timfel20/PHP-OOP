<?php 
require_once 'carOne.php';
class CarTwo extends CarOne{
    public function message() {
        echo "about my car";
        echo "<br>";
      }
}

$aboutCar = new CarTwo("red", "automatic", "fast");
echo $aboutCar->get_all();
?>