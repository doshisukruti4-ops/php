<?php   <?php

#string functions
 echo chr(100);
 #echo ord(a);
 echo strtoupper("ram");
 echo "<br>";
 echo strtolower("SITA");
 echo "<br>";
 echo strlen("ram sita");
 echo "<br>";
 $s=trim(" kavita ");
echo strlen($s);
echo "<br>";
echo strrev("prit");
echo "<br>";
echo strcmp("ram","shyam");


#math functions
echo abs(-65);
echo "<br>";
echo ceil(87.5);
echo "<br>";
echo floor(55.8);
echo "<br>";
echo round(66.9);
echo "<br>";
echo fmod(55,11);
echo "<br>";
echo min(33,56,87);
echo "<br>";
echo max(66,88.22);
echo "<br>";
echo pow(4,2);
echo "<br>";
echo sqrt(25);


#built in function
$arr=[2,5,6,7,4];
echo sort($arr);
echo rsort($arr);
echo asort($arr);
echo arsort($arr);
print_r($arr);

echo current($arr);
echo "<br>";
echo end($arr);
echo "<br>";
echo next($arr);
echo "<br>";
echo prev($arr);
$uni=["aatmiya","university"];
$t=array_merge($arr,$uni);
print_r($t);
array_shift($uni);
print_r($uni);
array_push($uni);
print_r($uni);
array_unshift($arr);
print_r($arr);



?>
?>