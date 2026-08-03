<?php
#region scalar type
$isOk = true; # boolean defination
echo $isOk . '<br />';
$isOk = false; 
echo $isOk .'<br />' . 'printed something above me' .'<br />';

$myAge = 123; # integer defiantion
echo $myAge . '<br />';

$mySalary = 121321.2322; # float defiantion
echo $mySalary . '<br />';
#endregion

#region type reflection 
// gettype
$hamada = "ncsajNZDkjcnsiuvniknfdi";
echo gettype($hamada);
echo "<br />". gettype($isOk) ."<br />" . gettype($mySalary) ."<br />";
// vardump
var_dump($hamada); echo '<br />';
var_dump($myAge);
#endregion

#region compound types (arrays)
$companies = [1,2,3,0.4,-3,'a',"my big mambo",true];
echo '<br>';
print_r($companies);
echo '<br>';


function sum($x,$y) {
    return $x + $y;
}

$sum = sum(1,2);
echo $sum .'<br />';
