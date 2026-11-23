<?php

function calculator($a, $b, $operation) {
    switch ($operation) {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            if ($b == 0) {
                return "Ошибка: Нельзя делить на ноль";
            }
            $result = $a / $b;
            break;
        case "**":
            $result = $a ** $b;
            break;
        default:
            return "Ошибка: Данная операция не поддерживается";
    }
    return "Результат: " . $result;
}

$a = $_GET['a'] ?? '';
$b = $_GET['b'] ?? '';
$operation = $_GET['operation'] ?? '';

if (!is_numeric($a) || !is_numeric($b)) {
    $result = "Ошибка: Введите числа";
} else {
    $result = calculator((float)$a, (float)$b, $operation);
}

header("Location: index.php?" . http_build_query(['result' => $result]));
exit;