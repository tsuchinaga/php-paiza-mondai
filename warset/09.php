<?php
list($n, $m) = explode(" ", trim(fgets(STDIN)));
$dots = [];
for ($i = 0; $i < $n; $i++) {
    $s = trim(fgets(STDIN));
    $dot = [];
    for ($j = 0; $j < $m; $j++) {
        $dot[] = substr($s, $j, 1);
    }
    $dots[] = $dot;
}

$point = point($n, $m, $dots);

$ans = [];
if (vertical($n, $m, $dots) || horizontal($n, $m, $dots)) $ans[] = "line";
if (point($n, $m, $dots)) $ans[] = "point";
if (count($ans) > 0) $ans[] = "symmetry";
else $ans[] = "none";
printf("%s\n", implode(" ", $ans));



function vertical($n, $m, $dots)
{
    // 各行で左右から真ん中まで比較する
    for ($i = 0; $i < $n; $i++) {
        $li = 0;
        $ri = $m - 1;
        $is_sync = true;

        while ($li < $ri) {
            if ($dots[$i][$li] !== $dots[$i][$ri]) return false;
            $li++;
            $ri--;
        }
    }
    return true;
}

function horizontal($n, $m, $dots)
{
    // 各列で上下から真ん中まで比較する
    for ($i = 0; $i < $m; $i++) {
        $ui = 0;
        $di = $n - 1;

        while ($ui < $di) {
            if ($dots[$ui][$i] !== $dots[$di][$i]) return false;
            $ui++;
            $di--;
        }
    }
    return true;
}

function point($n, $m, $dots)
{
    // 一番前と一番後ろから比較していく
    $max = $n * $m - 1;
    for ($i = 0; $i <= $max; $i++) {
        if ($dots[(int)($i / $m)][(int)($i % $m)] !== $dots[(int)(($max-$i) / $m)][(int)(($max-$i) % $m)]) return false;
    }
    return true;
}
