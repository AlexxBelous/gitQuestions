<!-- Напиши function duplicates, которая принимает один аргумент $arr, представляющий собой массив, и возвращает массив, содержащий все повторяющиеся элементы из исходного массива. -->










































<?php

function duplicates($arr)
{
    $dub = [];
    foreach ($arr as $key => $value) {
        if ($key != array_search($value, $arr, TRUE) and !in_array($value, $dub)) $dub[] = $value;
    }
    return $dub;
}



$array1 = [1, 2, 3, 2, 4, 4, 5];
$result1 = duplicates($array1);
print_r($result1);


$array2 = ['apple', 'banana', 'cherry', 'banana', 'durian'];
$result2 = duplicates($array2);
print_r($result2);




?>