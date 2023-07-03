<!-- Напиши пример работы функции `getMiddle()`, которая возвращает средний символ или средние два символа из заданной строки? -->










































<?php


function getMiddle($text) {
	$start = floor((strlen($text) - 1) / 2);
  	$len = strlen($text) % 2 ? 1 : 2;
	return substr($text, $start, $len);
}




$string = "Lorem ipsum dolor sit amet";
$result3 = getMiddle($string);
echo $result3; //Output - "do"


?>