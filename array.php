<?php
//simple array
$arr=array(10,10.5,"aatmiya");

$arr[1]=56;
$arr[4]="ram";
print_r($arr);
echo "<br>";

echo sort($arr);
print_r($arr);
echo "<br>";

echo rsort($arr);
print_r($arr);

echo "<br>";
echo asort($arr);
print_r($arr);

echo "<br>";
print_r($arr);
echo "<br>";
var_dump($arr);
echo "<br>";
echo arsort($arr);
print_r($arr); 

//multi dimention array

$num=array(array(10,20,30),array("aarti","priya","shila"));
print_r($num);
echo "<br>";
for($i=0;$i<3;$i++)
{
    for ($j=0;$j<3;$j++)
    {
        echo $num[$i][$j];
    }
}

//associative array
$asso=array('name'=>"sukruti",'city'=>"rajkot");
print_r($asso);
foreach($asso as $v)
{
    echo "<br>";
    echo $v;
}
?>