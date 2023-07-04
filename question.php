<!-- Отсортируй массив строк по их длине, где первое слово самое короткое, а последующие длинные. -->










































<?php


$randomWords = ['hello', 'friendship', 'people', 'shop', 'road', 'table', 'meeting', 'car'];

function sortByLength($toSort)
{
    usort($toSort, fn ($a, $b) => strlen($a) - strlen($b));
    return $toSort;
}

$sortedWord = sortByLength($randomWords);

echo implode(', ', $sortedWord);



?>