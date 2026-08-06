<?php
$variable = NULL;
echo nl2br("$variable\n");
#############
// $a isn't defined
var_dump($a);  //Outputs a warning and then NULL
$a = "papa";
unset($a);
var_dump($a);
echo (is_null($a));
echo($a === NULL);