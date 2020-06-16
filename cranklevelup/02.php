<?php
$n = (int)trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    list($t, $h, $m) = explode(" ", trim(fgets(STDIN)));
    list($th, $tm) = explode(":", $t);

    $tm = $tm + $m;

    $th = $th + $h + $tm / 60;
    $tm %= 60;

    $th %= 24;

    printf("%02d:%02d\n", $th, $tm);
}
