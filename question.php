<!-- Напиши программу, которая будет проверять длину введенной в форму пользователем строки и выводить сообщение о количестве символов. -->













































<form method="POST" action="">
    <label for="inputString">Input string:</label>
    <input type="text" id="inputString" name="inputString">
    <input type="submit" value="Confirm">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputString = $_POST['inputString'];
    $length = strlen($inputString);
    echo "entered string contains $length symbols.";
}
?>

