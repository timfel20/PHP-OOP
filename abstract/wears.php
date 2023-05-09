<?php 
   abstract class Wears{
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    abstract public function myStyle() : string;

    /* in bastract method, the class contains empty function. Like i have here  */
   }
?>