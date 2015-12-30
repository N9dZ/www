<?php

$arr = array(1, 2, 3, false, 4, 5);
while (list($key, $val) = each($arr)){
    echo "$key => $val<br>";
}

?>