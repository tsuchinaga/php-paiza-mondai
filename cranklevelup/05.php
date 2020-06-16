<?php
list($p, $q, $r) = explode(" ", trim(fgets(STDIN)));

$pq = [];
for ($i = 0; $i < $p; $i++) {
    list($j, $k) = explode(" ", trim(fgets(STDIN)));
    $pq[$j] = $k;
}

$qr = [];
for ($i = 0; $i < $q; $i++) {
    list($j, $k) = explode(" ", trim(fgets(STDIN)));
    $qr[$j] = $k;
}

for ($i = 1; $i <= $p; $i++) {
    printf("%d %d\n", $i, $qr[$pq[$i]]);
}
