<?php

$a = 12;
$b = 22;
$c = 42;
$d = 0;

$d = ($a>=$b? $a:$b);
$d = ($d>=$c? $d:$c);

echo ($d);
echo '<br/>-#-#-#-#-#-#-#<br/>';
//014
$e = 'super';
$f = 'man';
echo $e , $f; // print the two, so faster than "$e . $f"
echo '<br/>';
echo $e . $f; // link the two and print
echo '<br/>-#-#-#-#-#-#-#<br/>';
//026
function t($a){
	$a += 1;
}
$b = 3;
t($b);
echo 'transfer value in function: ', $b;
echo '<br/>';
function t1(&$a){
	$a += 1;
}
$b = 3;
t1($b);
echo 'reference value in function: ', $b;
echo '<br/>-#-#-#-#-#-#-#<br/>';
//028
$GLOBALS['var1'] = 5;
$var2 = 1;
function get_value(){
	global $var2;
	$var1 = 0;
	return $var2++;
}
get_value();
echo 'Display on screen: ';
echo $var1."\n";
echo $var2;
?>