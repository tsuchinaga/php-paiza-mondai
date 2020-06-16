<?php
$n = (int)trim(fgets(STDIN));

$persons = [];
for ($i = 0; $i < $n; $i++) {
    list($g, $s) = explode(" ", trim(fgets(STDIN)));
    $persons[] = ["g" => $g, "s" => $s];
}

while (count($persons) > 0) {
    $maxIdx = 0;
    foreach ($persons as $key => $val) {
        if ($persons[$maxIdx]["s"] < $val["s"] || ($persons[$maxIdx]["s"] == $val["s"] && $persons[$maxIdx]["g"] < $val["g"])) {
            $maxIdx = $key;
        }
    }
    printf("%d %d\n", $persons[$maxIdx]["g"], $persons[$maxIdx]["s"]);
    unset($persons[$maxIdx]);
}

