<?php
$a = 12;
$b = 22;
$c = 42;
$d = 0;
$d = ($a>=$b? $a:$b);
$d = ($d>=$c? $d:$c);

echo ($d);
?>