<?php
$age = 20;

if ($age >= 18) {
    echo "доступ разрешён";
} else {
    echo "доступ запрещён";
}
?>


<?php
$a = 10;
$b = 25; 

if ($a > $b) {
    echo $a;
} elseif ($b > $a) {
    echo $b;
} else {
    echo "Числа равны";
}
?>

<?php
$temperature = 15;

if ($temperature < 0) {
    echo "Мороз";
} elseif ($temperature <= 20) {
    echo "Прохладно";
} else {
    echo "Тепло";
}
?>

<?php
$day = 3;

switch ($day) {
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    case 7:
        echo "Воскресенье";
        break;
    default:
        echo "Ошибка: неверный номер дня недели";
        break;
}
?>


<?php
$age = 20;

$result = ($age >= 18) ? "доступ разрешён" : "доступ запрещён";

echo $result;
?>
