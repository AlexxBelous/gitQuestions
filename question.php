<!--  Сделай подсчет всех символов в строке, без пробелов -->










































<?php




function getLengthWithoutSpaces($str)
{
    $strWithoutSpaces = str_replace(' ', '', $str);
    $length = strlen($strWithoutSpaces);
    return $length;
}

$str = "I'll be home at about 8 o'clock in the evening";
$length = getLengthWithoutSpaces($str);
echo $length; // 37

?>