<?php

$x = "a";
$y = 1237;

echo "Before swap:\n";
echo "X: {$x} - Y: {$y}\n";

[$x,$y] = [$y,$x];

echo "After swap:\n";
echo "X: {$x} - Y: {$y}\n";

?>
