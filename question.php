<!-- Добавь в конец массива имена. Например Olga и Max-->










































<?php

$nameArray = ['Alex', 'Nina', 'Ben', 'Ron'];

echo '<pre>';
var_dump($nameArray);
echo '</pre>';


$nameArray[] = 'Olga';

echo '<pre>';
var_dump($nameArray);
echo '</pre>';


array_push($nameArray, 'Max');

echo '<pre>';
var_dump($nameArray);
echo '</pre>';

?>