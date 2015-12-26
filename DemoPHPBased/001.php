<?php

$a = 12;
$b = 22;
$c = 42;
$d = 0;

$d = ($a>=$b? $a:$b);
$d = ($d>=$c? $d:$c);

echo ($d);
echo '<br/>=======';
//014
$e = 'super';
$f = 'man';
echo '<br/>';
echo $e , $f; // print the two, so faster than "$e . $f"
echo '<br/>';
echo $e . $f; // link the two and print






?>