<?php
echo PHP_INT_MAX . "<br>";
echo "\n";
echo PHP_INT_MIN . "<br>";
echo "\n";
echo PHP_INT_SIZE . "<br>";
echo "\n";

$my_int = 56;
$my_float = 3.14;

echo is_integer($my_int); // will echo 1 if true
echo "<br>";
echo is_integer($my_float);
echo " - the output of is a float an integer.";
echo "<br>";
echo is_float($my_float);
echo "<br>";
// we can also do
var_dump(is_float($my_float));
echo "<br>";

echo PHP_FLOAT_MAX;
echo "<br>";
echo PHP_FLOAT_MIN;
echo "<br>";
echo PHP_FLOAT_DIG;
echo "<br>";

echo var_dump(is_nan(asin(5000))); // returns true becauase 5000 is way out of the range of sine

?>