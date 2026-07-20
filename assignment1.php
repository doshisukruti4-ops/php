// 1. make table by using echo statement..
    <?php
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
?>

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

 
 //7.find maxium and minimum value from get or post method 

<html>
<head>
    <title>Maximum and Minimum Number</title>
</head>
<body>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Enter Third Number:
    <input type="number" name="num3" required><br><br>

    <input type="submit" value="Find Max & Min">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $max = max($num1, $num2, $num3);
    $min = min($num1, $num2, $num3);

    echo "<h3>Results</h3>";
    echo "Maximum Number = " . $max . "<br>";
    echo "Minimum Number = " . $min;
}
?>

</body>
</html>




 //8.  accpet two value from user and perform any operation.
 
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition (+)</option>
        <option value="sub">Subtraction (-)</option>
        <option value="mul">Multiplication (*)</option>
        <option value="div">Division (/)</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            echo "Result = " . $result;
            break;

        case "sub":
            $result = $num1 - $num2;
            echo "Result = " . $result;
            break;

        case "mul":
            $result = $num1 * $num2;
            echo "Result = " . $result;
            break;

        case "div":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result = " . $result;
            } else {
                echo "Division by zero is not allowed.";
            }
            break;

        default:
            echo "Invalid Operation";
    }
}
?>

</body>
</html>
    
//9. Accept any string, display 3 radio buttons with font choice, when user select
any font display the accepted string with that font on next page. You can also
give font color.

<html>
<head>
    <title>Font Selection</title>
</head>
<body>

<form action="display.php" method="post">
    Enter String:
    <input type="text" name="str" required><br><br>

    Select Font:<br>
    <input type="radio" name="font" value="Arial" required> Arial<br>
    <input type="radio" name="font" value="Courier New"> Courier New<br>
    <input type="radio" name="font" value="Times New Roman"> Times New Roman<br><br>

    Select Font Color:
    <input type="color" name="color" value="#0000ff"><br><br>

    <input type="submit" value="Display">
</form>

</body>
</html>
