<?php
$m = (int)trim(fgets(STDIN));
if ($m <= 5) print("raw\n");
else if ($m <= 7) print("soft boiled\n");
else if ($m <= 15) print("hard boiled\n");
