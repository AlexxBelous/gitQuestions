<!-- Напиши программу, которая будет подсчитывать количество повторяющихся элементов в массиве и выводить результаты -->










































<?php

// Original array
$array = [2, 4, 6, 2, 4, 8, 4, 2];

// Initialize an empty array to count repetitions
$counts = [];

// Count repetitions
foreach ($array as $element) {
    if (isset($counts[$element])) {
        $counts[$element]++;
    } else {
        $counts[$element] = 1;
    }
}

// Output the results
foreach ($counts as $element => $count) {
    echo "Element $element repeats $count time(s).<br>";
}


?>