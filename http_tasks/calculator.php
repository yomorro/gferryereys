<?php
function calculator($a, $b, $operation) {
    switch ($operation) {
        case '+':  return $a + $b;
        case '-':  return $a - $b;
        case '*':  return $a * $b;
        case '/':
            if ($b == 0) {
                return null;
            }
            return $a / $b;
        case '**': return $a ** $b;
        default:   return null;
    }
}

$result = null;
$error = null;
$a = '';
$b = '';
$operation = '+';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = isset($_POST['a']) ? trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? trim($_POST['b']) : '';
    $operation = isset($_POST['operation']) ? trim($_POST['operation']) : '';

    if ($a === '' || $b === '' || !is_numeric($a) || !is_numeric($b)) {
        $error = 'Введите два числа';
    } elseif (!in_array($operation, ['+', '-', '*', '/', '**'], true)) {
        $error = 'Выберите операцию из списка';
    } elseif ($operation === '/' && (float)$b == 0) {
        $error = 'Деление на ноль недопустимо';
    } else {
        $result = calculator((float)$a, (float)$b, $operation);
        if ($result === null || is_nan($result) || is_infinite($result)) {
            $result = null;
            $error = 'Не удалось вычислить результат';
        }
    }
}

require 'calculator_form.php';