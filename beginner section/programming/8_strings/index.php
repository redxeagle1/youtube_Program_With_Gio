<?php

$first_name = "John";
$last_name = "smither";

echo nl2br("$first_name[0]\n"); // Output: J
echo nl2br("positvie indexing :  $first_name[3]\n"); // Output: n
echo nl2br("printing the string full length\n");
var_dump($first_name);
// echo nl2br("$first_name[10]\n"); # this will give us a warning
echo nl2br("\nnegative indexing : {$first_name[-1]}"); // Output : h

// Nowdoc
// this is an identifier 
$texty = <<<TEXT
Line 1
Line 2
Line 3
TEXT;
echo nl2br("\n".$texty);

echo nl2br("\n\n\n\n");

$texty = <<<'IDENTIFEIR'
Line 1
Line 2
Line 3
"hamada"
$first_name
IDENTIFEIR;
echo nl2br($texty."\n");

// here is an html content example
echo nl2br("\n\n\n\n");

$texty = <<<TEXT
<p>this is my dystiny</p> <h1>heellooooooo</h1>
TEXT;
echo nl2br("\n".$texty);
