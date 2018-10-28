<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw2</title>
</head>
<body>
    <?
    // task 1
    $a = 5;
    $b = -7;
    echo "Задача 1. <br>a = $a, b = $b<br>";
    if ($a >= 0 && $b >=0) {
        echo "a - b = ".($a-$b);
    } elseif ($a < 0 && $b < 0) {
        echo "a * b = ".($a*$b);
    } else {
        echo "a + b = ".($a+$b);
    }

    // task 2
    $a = 6;
    echo "<hr>Задача 2. <br>a = $a<br>Вывод:<br>";
    switch ($a) {
        case 1:
            echo "1 ";
        case 2:
            echo "2 ";
        case 3:
            echo "3 ";
        case 4:
            echo "4 ";
        case 5:
            echo "5 ";
        case 6:
            echo "6 ";
        case 7:
            echo "7 ";
        case 8:
            echo "8 ";
        case 9:
            echo "9 ";
        case 10:
            echo "10 ";
        case 11:
            echo "11 ";
        case 12:
            echo "12 ";
        case 13:
            echo "13 ";
        case 14:
            echo "14 ";
        case 15:
            echo "15";
    }

    //task 3
    function sum($a, $b) {
        return $a + $b;
    }
    function diff($a, $b) {
        return $a - $b;
    }
    function mult($a, $b) {
        return $a * $b;
    }
    function divide($a, $b) {
        return $a / $b;
    }

    $a = 5;
    $b = 9;
    echo "<hr>Задача 3.<br>a = $a, b = $b<br>";
    echo "a + b = ".sum($a, $b)."<br>";
    echo "a - b = ".diff($a, $b)."<br>";
    echo "a * b = ".mult($a, $b)."<br>";
    echo "a / b = ".divide($a, $b)."<br>";

    //task 4
    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case "sum":
                return sum($arg1, $arg2);
            case "diff":
                return diff($arg1, $arg2);
            case "mult":
                return mult($arg1, $arg2);
            case "divide":
                return divide($arg1, $arg2);
        }
    }

    echo "<hr>Задача 4.<br>a = $a, b = $b<br>";
    echo "a + b = ".mathOperation($a, $b, "sum")."<br>";

    //task 5
    // Решено на уроке, если я правильно помню

    //task 6
    function power($val, $pow) {
        if ($pow == 0) {
            return 1;
        }
        return $val * power($val, $pow - 1);
    }

    echo "<hr>Задача 6. 2 в степени 10 = ".power(2, 10);

    //task 7
    function getTime() {
        $hours = date("G");
        if ($hours > 4 && $hours < 21 || $hours % 10 == 0) {
            $strHours = $hours." часов";
        } elseif ($hours % 10 == 1) {
            $strHours = $hours." час";
        } else {
            $strHours = $hours." часа";
        }
        $minutes = date("i");
        if ($minutes > 4 && $minutes < 21 || $minutes % 10 == 0) {
            $strMinutes = $minutes." минут";
        } elseif ($minutes % 10 == 1) {
            $strMinutes = $minutes." минута";
        } elseif ($minutes % 10 > 1 && $minutes % 10 < 5) {
            $strMinutes = $minutes." минуты";
        } else {
            $strMinutes = $minutes." минут";
        }
        return $strHours." ".$strMinutes;
    }

    echo "<hr>Задача 7. ".getTime();
    ?>
</body>
</html>