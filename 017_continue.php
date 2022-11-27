<?php

// print 1 through 10 and skip 7
for ($i = 1; $i < 11; $i++) {
	if ($i === 7)
		continue;
	echo $i . "<br>";
}