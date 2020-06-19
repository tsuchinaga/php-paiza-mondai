<?php
$c = trim(fgets(STDIN));
$s = trim(fgets(STDIN));
$ans = 0;
foreach (str_split($s) as $sc) {
    if ($c === $sc) $ans++;
}
printf("%d\n", $ans);
