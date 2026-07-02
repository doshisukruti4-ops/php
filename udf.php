<?php

//simple	
function home()
{
	echo "hello my homies";

}
home();
echo "<br>";


//with argument
function s1($a,$b)
{
	echo $a + $b;
}
s1(6,7);
echo "<br>";

//call by reference
function minus(&$num)
{
	echo $num=$num-20;
}
$x=55;
minus($x);
echo"<br>";
echo $x;
echo "<br>";

//call by values
function multiplication($no)
{
	echo $no=$no*4;
}
$y=5;
multiplication($y);
echo "<br>";
echo $y;

echo "<br>";

//default argument
function ds1($z,$r,$c=67)
{
	echo $z +$r +$c;
	
}
echo ds1(1,2);


//nesting 
function one($name)
{
	echo $name;
}
function two()
{
	echo "<br>";
	one ("this is 1st function");
}

two();
//variable

function krishna( $name)
{
	echo "<br>";
	echo $name;

}
$k="krishna";
$k("yadav ");

?>