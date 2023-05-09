<?php

   interface Countries{
     public function language();
   }
?>
<!-- The difference between interfaces and abstract classes are:

Interfaces cannot have properties, just methods while abstract classes can have both
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time -->