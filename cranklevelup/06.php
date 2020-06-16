<?php
$h = (int)trim(fgets(STDIN));

$a = [0, 0];
$b = [0, 0];

$i = 0;
while ($h > 0) {
    $i++;

    $da = 1;
    $db = 1;
    if ($i > 2) {
        $da = $b[0] + $b[1];
        $db = $a[0] + $a[1] * 2;
    }
    $h -= $db;

    list($a[0], $a[1], $b[0], $b[1]) = [$a[1], $da, $b[1], $db];
}
print("$i\n");
