<?php
$n = (int)trim(fgets(STDIN));

$ary = [];
for ($i = 0; $i < $n; $i++) {
    $s = explode(" ", trim(fgets(STDIN)));
    $ary[(int)$s[1]] = $s[0];
}
ksort($ary);

foreach ($ary as $item) {
    printf("%s\n", $item);
}
