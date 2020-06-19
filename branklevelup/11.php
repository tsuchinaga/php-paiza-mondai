<?php
$n = (int)trim(fgets(STDIN));
$aryN = [];
for ($i = 0; $i < $n; $i++) {
    $d = explode(" ", trim(fgets(STDIN)));
    $aryN[$d[0]] = $d[1];
}

$m = (int)trim(fgets(STDIN));
$aryM = [];
for ($i = 0; $i < $m; $i++) {
    $d = explode(" ", trim(fgets(STDIN)));
    $aryM[$d[0]] = $d[1];
}

foreach ($aryN as $n => $b) {
    printf("%s %s\n", $n, $aryM[$b]);
}
