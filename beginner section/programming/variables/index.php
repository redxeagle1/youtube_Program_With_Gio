<?php
## deine
define ("PI_NUMEBR", 3.14);
echo PI_NUMEBR;
echo "<br>";
## const
const PI = 3.14;
## dynamic constant 
$paid = "PAID";
define("STATUS_".$paid , $paid);
echo STATUS_PAID;
## variable variables
$foo = "bar";
$$foo = "baz";

echo "<br>" , $foo, $bar ; 