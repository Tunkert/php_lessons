<?php

function factorial($num) {
	if ($num === 1 || $num === 0) {
		return 1;
	}
	return $num * factorial($num - 1);
}

echo factorial(5) . "<br>";