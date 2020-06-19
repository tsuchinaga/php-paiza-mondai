<?php
$x = trim(fgets(STDIN));
$y = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

if ($x <= $c && $c <= $y) print("true\n");
else print("false\n");
