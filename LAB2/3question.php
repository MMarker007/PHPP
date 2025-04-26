<?php 

$array=array('a', 'b', 'c', 'd', 'e');
print_r(($array));
echo "<br>";
print(array_map('strtoupper', $array));
?>