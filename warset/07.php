<?php
$n = (int)trim(fgets(STDIN));
$nums = [];
for ($i = 0; $i < $n; $i++) {
    $a = (int)trim(fgets(STDIN));
    if ($a%2 === 1) $nums[] = $a;
}
sort($nums);
foreach ($nums as $v) printf("%d\n", $v);
