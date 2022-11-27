<?php

define("PI", 3.14159);

echo PI . "<br>";

// constants are global

define("names", [
	"Tim",
	"Sarah",
	"Sean",
	"Aaron",
	"Joe",
	"Billy",
]);

echo names[0] . "<br>";
echo names[count(names) - 1];