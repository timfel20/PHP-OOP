<?php 
class Fruit{
 public $name;
 public $color;

 function set_name($name){
    $this->name = $name;
 }

 function get_name(){
    return $this->name;
 }

 function set_color($color){
    $this->color = $color;
 }

 function get_color(){
    return $this->color;
 }
}

$apple = new Fruit();

$apple->set_name("apple");
$apple->set_color("green");

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>