<?php

// let's do Fizzbuzz

$i = 1;

while ($i < 101) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "<p>Fizzbuzz</p>";
	} else if ($i % 3 == 0) {
		echo "<p>Fizz</p>";
	} else if ($i % 5 == 0) {
		echo "<p>Buzz</p>";
	} else {
		echo "<p>" . $i . "</p>";
	}
	$i++;
}