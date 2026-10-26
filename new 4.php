<?php
$numbers = [12, 7, 25, -3, 18,4];
foreach ($numbers as $number) {
    if ($number < 0) {
        break;
    }
    echo $number . PHP_EOL;
}

<?php
for ($i = 0; $i <= 20; $i++) {
    if (($i % 2) != 0) {
        continue;
    }
    echo $i . PHP_EOL;
}

<?php
$names = ['Анна', 'Олег', 'Мария', 'Игорь', 'Мария'];
$searchname = 'Мария';

$found = false;

foreach ($names as $name) {
    if ($name === $searchname) {
        $found = true;
        break;
    }
}

if ($found) {
    echo 'Имя найдено' . PHP_EOL;
} else {
    echo 'Имя не найдено' . PHP_EOL;
}

<?php
$prices = [100, 0, 250, -50, 400, 0, 150];
$total = 0;
foreach ($prices as $price) {
    if ($price <=0) {
        continue;

    }
    $total = $price + $total;
}
echo ($total); 

<?php
$values = [10, -5, 20, 0, 15, -1, 100];
$total = 0;
foreach ($values as $value) {
    if ($value == -1) {
        break;
    }
    if ($value <= 0) {
        continue;
    }
    $total = $total + $value;
}
echo 'Сумма: ' . $total . PHP_EOL;

<?php
$i = 0;
while ($i < 5) {
    $i++;
    if ($i == 2) {
        continue;
    }
    echo $i . PHP_EOL;
}