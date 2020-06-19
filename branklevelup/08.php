<?php
$n = (int)trim(fgets(STDIN));
$ary = [];
for ($i = 0; $i < $n; $i++) {
    $s = explode(" ", trim(fgets(STDIN)));
    if (isset($ary[$s[0]])) $ary[$s[0]] += (int)$s[1];
    else $ary[$s[0]] = (int)$s[1];
}

while (count($ary) > 0) {
    $max = null;
    $maxI = null;
    foreach ($ary as $k => $v) {
        if ($max === null || $max < $v) {
            $max = $v;
            $maxI = $k;
        }
    }
    printf("%s %d\n", $maxI, $max);
    unset($ary[$maxI]);
}
