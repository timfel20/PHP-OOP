<?php 
class CarOne{
    public $color;
    protected $type;
    private $speed;

    function __construct($color, $type, $speed){
        $this->color = $color;
        $this->type = $type;
        $this->speed = $speed;
    }

    private function get_color(){
      return $this->color;
    }

    protected function get_type(){
        return $this->color;
    }

    public function get_speed(){
    return $this->color;
    }

    public function get_all(){
        echo "the  car i got yesterday is {$this->color} in color, {$this->speed} and it's {$this->type}";
    }
}
?>