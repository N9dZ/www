<?php

$arr1 = array(1, 2, 3, 4, 5);
while ($v = current($arr1)) {
	echo $v, '<br />';
	next($arr1);
}
echo '<br />-#-#-#-#-#-#-#<br />';
$arr2 = array(1, 2, 3, false, 4, 5);
while (list($key, $val) = each($arr2)){
    echo "$val<br />";
}

?>