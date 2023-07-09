<!-- Есть исходная строка, из которой нужно получить подстроку World с помощью substr().
Для этого необходимо использовать три разных аргумент.

 -->














































<?php

$string = "Hello, World!";
$substring = substr($string, 7, 5);
echo $substring; // Output: "World"


$string = "Hello, World!";
$substring = substr($string, -6, -1);
echo $substring; // Output: "World"

$string = "Hello, World!";
$substring = substr($string, 7);
echo $substring; // Выводит: "World!"


?>

