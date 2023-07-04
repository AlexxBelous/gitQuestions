<!--  Сделай подсчет всех символов в строке, без пробелов -->










































<?php


$str = "I'll be home at about 8 o'clock in the evening";

$strWithoutSpaces = str_replace(' ', '', $str);
$length = strlen($strWithoutSpaces);
echo $length; // 37


?>