<?php
# Lab Challenge #4
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i is divisible to 3 and 5";
        echo '<br>';
    } elseif ($i % 3 == 0) {
        echo "$i is divisible to 3";
        echo '<br>';
    } elseif ($i % 5 == 0) {
        echo "$i is divisible to 5";
        echo '<br>';
    } else {
        echo "$i";
        echo '<br>';
    }
}

