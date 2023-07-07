<!-- Какая функция в PHP позволяет проверить наличие определенного значения в массиве? 
Напиши function, который использует эту функцию для проверки наличия числа 42 в массиве $numbers. 
Код должен выводить на экран - "Целевое число найдено в массиве.",
или -  "Целевое число не найдено.".

-->










































<?php

function isNumberExists($numbers, $targetNumber)
{
    if (in_array($targetNumber, $numbers)) {
        return "The target number is found in the array.";
    } else {
        return "The target number is not found.";
    }
}

$numbers = [10, 25, 30, 42, 50];
$targetNumber = 42;

echo isNumberExists($numbers, $targetNumber);


?>