<?php

$x = "a";
$y = 1237;

echo $x."<br>".$y;

echo "<br><br>";

[$x,$y] = [$y,$x];

echo $x."<br>".$y;

?>
