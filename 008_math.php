<?php

echo max(2, 3) . "<br>";
echo min(2, 3) . "<br>";
echo pi() . "<br>";
echo abs(-10) . "<br>";
echo sqrt(16) . "<br>";
echo round(pi(), 2) . "<br>"; // round pi to two decimal places
echo rand(1, 10) . "<br>"; // returns a random number between 1 and 10 (including 1 and 10)

echo cos(pi() / 4) . "<br>";
echo sin(pi() / 4) . "<br>";
echo tan(pi() / 4) . "<br>";

echo hypot(3, 4) . "<br>";

echo pow(2, 3) . "<br>";

echo decbin(4) . "<br>";
echo decbin(2) . "<br>";

echo decoct(16) . "<br>";
echo decoct(14) . "<br>";

echo deg2rad(45) . "<br>";

echo rad2deg(2 * pi()) . "<br>";

echo intdiv(10, 3) . "<br>";

echo ceil(3.1) . "<br>";
echo floor(3.9) . "<br>";

echo base_convert(4, 10, 2) . "<br>"; // converts from base 10 to base 2 - binary