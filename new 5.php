<?php

echo "1.1 ";
$vars = [25, "25", 25.5, true, null, [1, 2]];
foreach ($vars as $v) {
    echo gettype($v) . ": ";
    var_dump($v);
}

echo "1.2 ";
function calcCost($quantity, $price)
{
    if (is_numeric($quantity) && is_numeric($price)) {
        $q = (int) $quantity;
        $p = (float) $price;
        echo "Стоимость: " . ($q * $p);
    } else {
        echo "Ошибка: количество и цена должны быть числовыми\n";
    }
}
calcCost("4", "125.5"); 
calcCost("4", "дорого");

echo "1.3 ";
var_dump((int) 8.9);         
var_dump((int) "12abc");     
var_dump(is_numeric("12abc"));
var_dump((bool) "false");
var_dump(0 == "0");
var_dump(0 === "0");

echo "1.4 ";
$values = ["100", "ошибка", 250, "75.5", null, -10];
$sum = 0.0;
foreach ($values as $item) {
    if (!is_numeric($item)) {
        continue;
    }
    $sum += (float) $item;
}
echo "Сумма: $sum";

echo "1.5 ";
$sum = 0.0;
foreach ($values as $item) {
    if (!is_numeric($item)) {
        continue;
    }
    $num = (float) $item;
    if ($num <= 0) {
        continue;
    }
    $sum += $num;
}
echo "Сумма положительных: $sum";

echo "2.1 ";
$languages = ["PHP", "JavaScript", "Python", "Java"];
echo "Количество: " . count($languages);
unset($languages[1]);
echo "Количество: " . count($languages);
foreach ($languages as $key => $lang) {
    echo "$key => $lang\n";
}

echo "2.2 ";
$prices = [450, 100, 700, 250, 50];
$asc = $prices;
sort($asc);
$desc = $prices;
rsort($desc);
echo "По возрастанию: " . implode(", ", $asc);
echo "По убыванию: " . implode(", ", $desc);
echo "Исходный: " . implode(", ", $prices);

echo "2.3 ";
$products = ["Хлеб" => 50, "Сок" => 120, "Молоко" => 90];
arsort($products);
foreach ($products as $name => $price) {
    echo "$name – $price";
}

echo "2.4 ";
$scores = ["Tom" => 4, "Alice" => 5, "Bob" => 3];
$byName = $scores;
ksort($byName);
$byScore = $scores;
arsort($byScore);
print_r($byName);
print_r($byScore);

echo "2.5 ";
$names = ["Анна", "Борис", "Вера", "Глеб", "Дарья"];
$shuffled = $names;
shuffle($shuffled);
echo "Исходный: " . implode(", ", $names);
echo "Перемешанный: " . implode(", ", $shuffled);
echo count($names) === count($shuffled)
    ? "Количество не изменилось: " . count($shuffled) : "Количество изменилось!";

echo "2.6" ;
function filterPrices(array $prices): array
{
    $result = [];
    foreach ($prices as $name => $price) {
        if (is_numeric($price) && (float) $price > 0) {
            $result[$name] = (float) $price;
        }
    }
    asort($result);
    return $result;
}
$prices = ["Хлеб" => "50", "Сок" => "ошибка", "Молоко" => "90.5", "Чай" => 120];
$valid = filterPrices($prices);
foreach ($valid as $name => $price) {
    echo "$name – $price";
}
echo "Подходящих товаров: " . count($valid);
$empty = filterPrices([]);
echo "Пустой массив: " . count($empty) . " товаров";
