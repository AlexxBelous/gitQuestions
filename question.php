<!-- Как с использованием функции array_search() можно найти индекс элемента "orange" в массиве $fruits и вывести его значение? -->










































<?php


$fruits = ['apple', 'banana', 'orange', 'grape'];

$index = array_search('apple', $fruits);

if ($index !== false) {
    echo "Index of the found element: $index";
} else {
    echo "Item not found";
}




?>