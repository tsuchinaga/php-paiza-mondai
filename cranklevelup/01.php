<?php
$n = (int)trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    list($s, $a) = explode(" ", trim(fgets(STDIN)));
    printf("%s %d\n", $s, $a + 1);
}
