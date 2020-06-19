<?php
$n = (int)trim(fgets(STDIN));
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    $a = (int)trim(fgets(STDIN));
    if ($a >= 5) $sum += $a;
}
print("$sum\n");
