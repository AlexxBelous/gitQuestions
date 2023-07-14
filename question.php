<!-- Напишите программу на PHP где пользователь может ввести число от 1 до 7. После отправки формы, программа должна обработать введенное число и вывести соответствующий день недели на экран. Воспользуйтесь конструкцией switch для определения дня недели на основе введенного числа.
 -->














































 <!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <h1>Day of the Week</h1>
    <form method="post" action="">
        <label for="day">Enter a number from 1 to 7:</label>
        <input type="number" name="day" id="day" min="1" max="7" required>
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST["day"];

        switch ($day) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
            default:
                echo "Invalid value";
                break;
        }
    }
    ?>
</body>
</html>


