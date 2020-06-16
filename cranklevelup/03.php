<?php
list($n, $m, $k) = explode(" ", trim(fgets(STDIN)));
for ($i = 0; $i < $n; $i++) {
    $nums = explode(" ", trim(fgets(STDIN)));
    $cnt = 0;
    foreach ($nums as $key => $val) {
        if ((int)$k === (int)$val) $cnt++;
    }
    printf("%d\n", $cnt);
}
