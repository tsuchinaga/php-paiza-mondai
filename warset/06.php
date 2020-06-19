<?php
$s = explode(" ", trim(fgets(STDIN)));
printf("%s.%s.\n", substr($s[0], 0, 1), substr($s[1], 0, 1));
