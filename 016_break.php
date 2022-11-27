<?php

// print 1 through 7

for ($i = 1; $i < 100; $i++) {
	echo $i . "<br>";
	if ($i === 7) {
		break;
	}
}