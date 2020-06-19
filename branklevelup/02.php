<?php
$n = (int)trim(fgets(STDIN));
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    if ($a == $b) $sum += $a * $b;
    else $sum += $a + $b;
}
print("$sum\n");
