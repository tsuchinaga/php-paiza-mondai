<?php
$n = (int)trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    switch (trim(fgets(STDIN))) {
        case "forward":
            print("Sunny\n");
            break;
        case "reverse":
            print("Rainy\n");
            break;
        case "sideways":
            print("Cloudy\n");
            break;
    }
}
