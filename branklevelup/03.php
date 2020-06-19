<?php
list($a, $b) = explode(" ", trim(fgets(STDIN)));
printf("%s\n", substr(trim(fgets(STDIN)), $a-1, $b-($a-1)));
