<!-- Напиши function, которая используется для поиска всех вхождений подстроки ($needle) в строке ($haystack), включая вложенные вхождения.

Функция должна принимает несколько аргументов: $haystack (исходная строка), $needle (искомая подстрока), $offset (начальное смещение для поиска, по умолчанию равно 0) и $results (ссылка на массив, в котором сохраняются позиции вхождений). -->










































<?php

function foundMark($haystack, $needle, $offset = 0, $results = array()) {                
    $offset = strpos($haystack, $needle, $offset);
    if($offset === false) {
        return $results;            
    } else {
        $results[] = $offset;
        return foundMark($haystack, $needle, ($offset + 1), $results);
    }
}



$string = 'This is the string in which you need to find the letter F';
$search = 'F';
$found = foundMark($string, $search);

if($found) {
    foreach($found as $pos) {
        echo 'Letter "'.$search.'" found in string - "'.$string.'" at position <b>'.$pos.'</b><br />';
    }    
} else {
    echo 'Letter "'.$search.'" not found in string - "'.$string.'"';
}



?>


<!-- Внутри функции используется функция strpos для поиска первого вхождения подстроки. Если вхождение не найдено ($offset === false), функция возвращает массив $results, который содержит позиции найденных вхождений подстроки. В противном случае, функция добавляет текущую позицию ($offset) в массив $results и рекурсивно вызывает саму себя, увеличивая смещение на 1, чтобы искать следующее вхождение.

Код в конце предоставляет пример использования функции strpos_recursive. Он ищет все вхождения подстроки 'a' в строке 'This a a a is some string' и выводит позиции найденных вхождений. -->