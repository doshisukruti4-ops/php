
<?php 
 
 

// 1. make table by using echo statement..
    
    $name="sukruti";
echo "<table border=1>";
echo "<tr>";
echo "<td>name:</td>";
echo "<td>city:</td>";
echo "<td>collage:</td>";
echo "<td>percentage:</td>";
echo "</tr>";


echo "<tr>";
echo "<td>rajvi</td>";
echo "<td>rajkot</td>";
echo "<td>AU</td>";
echo "<td>97%</td>";
echo "</tr>";

echo "<tr>";
echo "<td>prit</td>";
echo "<td>surat</td>";
echo "<td>m.m.kanani</td>";
echo "<td>87%</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>shruti</td>";
 echo "<td>ahmedabad</td>";
 echo "<td>GTU</td>";
 echo "<td>99%</td>";
 echo "</tr>";
 echo "</table>";


//2.variable display by php and html

<html>
<body>

    <?php
$name="Dipak";
$contact=9744324311;
$address="university road";
$pincode=360005;
echo "name:" .$name. "<br>";
echo "contact:". $contact. "<br>";
?>
address: <?php  echo $address; ?> <br>
pincode:<?php  echo $pincode; ?>

</body>
</html>


echo "<table border=1>";
echo "<tr>";
echo "<td>name:</td>";
echo "<td>city:</td>";
echo "<td>collage:</td>";
echo "<td>percentage:</td>";
echo "</tr>";



    ?>
//3.display value an operation in table 

<html>
    <head>

    <style>
        table{
 border-collaps:collaps;
 width:50%;
        }
        </style>
</head>
<body>
        <?php
    $a=100;
    $b=20;
        ?>
        <table border=1>
            <tr>
                <td>operations:</td>
                <td>answers:</td>
            </tr>
            <tr>
                <td>value of A:</td>
                 <td><?php echo $a ; ?></td>
            </tr> 
            <tr>
                <td>value of B:</td>
                <td><?php echo $b ;?></td>
            </tr>
            <tr>
                <td>addition of a and b:</td>
                <td><?php echo $a+$b ?></td>
            </tr>
            <tr>
                <td>substraction of a and b:</td>
                <td><?php  echo $a-$b ?></td>
            </tr>
            <tr>
                <td>multiplication of a and b:</td>
                <Td><?php echo $a*$b ?></td>
    </tr>
    <tr>
                <td>division of a and b:</td>
                <Td><?php echo $a/$b ?></td>
    </tr>

        </table>
</body>
    </html>

// 4.check given no. is even or odd..

    $num=56;
    if($num%2==0)
       echo "number is even";
    else
       echo   "number is odd";
   
    
       5. find maximum value among given value..
   $a=755;
   $b=899;
   $c=122;
   if($a>$b && $a>$c)
       echo "A has maximum value..";
   elseif($b>$a && $b>$c)
       echo "B has maximum value..";
   else
       echo "C has maximum value..";
       
// 5. find maximum value among given value..
 
$a=755;
$b=899;
$c=122;
    if($a>$b && $a>$c)
        echo "A has maximum value..";
    elseif($b>$a && $b>$c)
        echo "B has maximum value..";
    else
        echo "C has maximum value..";

//6.total bill findin by if ..else statement
    <?php
    $purchase = 2500;   // Purchase Amount

    if ($purchase > 2000) {
        $discount = $purchase * 0.15;
    }
    else if ($purchase > 1000) {
        $discount = $purchase * 0.10;
    }
    else if ($purchase > 500) {
        $discount = $purchase * 0.05;
    }
    else {
        $discount = 0;
    }
    $finalbill=$purchase-$discount;
    echo "<br>total bill<br>";
    echo "total purchase=" .$purchase."<br>";
    echo "total discount=".$discount."<br>";
    echo "final bill=".$finalbill."<br>";
   
   ?>
 