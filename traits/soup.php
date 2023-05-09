<?php
/* as a class can only extend one, trait makes it easier to "extend" more than one class at a time . If we put the classes as traits and use them, we cnas use multiple classes like that */

include_once 'oil.php';
include_once 'pepper.php';
class Soup{
    use oil, pepper;
}

$soup = new Soup();
$soup->instruction1();
echo "<br>";
$soup->instruction2();
?>