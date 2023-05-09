<?php 
class Fruits{
 public $name;
 public $color;

 function __construct($name, $color){
 $this->name = $name;
 $this->color = $color;
 }

 function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruits("apple", "red");

$apple->get_name();
$apple->get_color();

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color()
?>