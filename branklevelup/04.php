<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));
$s = trim(fgets(STDIN));
printf("%s\n", substr($s, 0, $a - 1) . strtoupper(substr($s, $a - 1, $b - ($a - 1))) . substr($s, $b));
