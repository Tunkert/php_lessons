<?php

$my_str = "This is my string.";

echo(strlen($my_str)); // shows the length of my string
echo "<br>";
echo(str_word_count($my_str));
echo "<br>";
echo(strrev($my_str));
echo "<br>";
echo(strpos($my_str, "my")); // returns the character position of the first string
echo "<br>";
echo str_replace("string", "phrase", $my_str);
echo "<br>";

$my_other_str = "This is another string.               ";
echo chop($my_other_str);
echo "!!!";
echo "<br>";

// get a character from an ascii value
echo chr(65);

$num_1 = 4;
$num_2 = 5;
echo "<br>";

printf("%d is less than %d", $num_1, $num_2);

?>