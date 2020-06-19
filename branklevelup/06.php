<?php
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$ans = 0;
for ($i = 0; $i <= strlen($t) - strlen($s); $i++) {
    if ($s === substr($t, $i, strlen($s))) $ans++;
}
printf("%d\n", $ans);
