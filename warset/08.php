<?php
$n = (int)trim(fgets(STDIN));
$names = [];
for ($i = 0; $i < $n; $i++) {
    $c = trim(fgets(STDIN));
    if (in_array($c, $names)) print("NO\n");
    else print("YES\n");
    $names[] = $c;
}
