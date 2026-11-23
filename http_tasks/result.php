<?php
header('Content-Type: text/html; charset=utf-8');

$name = isset($_GET['name']) ? trim($_GET['name']) : '';
$city = isset($_GET['city']) ? trim($_GET['city']) : '';

if ($name === '' || $city === '') {
    echo 'Заполните имя и город. <a href="form.html">Вернуться к форме</a>';
} else {
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($city, ENT_QUOTES, 'UTF-8');
    echo "$name, ваш город — $city";
}