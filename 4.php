<?php

$count = 5;
while ($count > 0) {
    echo "$count ";
    $count--;
}
echo "Поехали!";

?>

<?php
$coffe_cups = 0;
do {
    echo "Выпил чашку кофе";
} while ($coffe_cups > 0);

?>

<?php
for ($i = 1; $i <= 10; $i++) {
    $result = 5 * $i;
    echo "5 * $i = $result";
}
?>

<?php
$prices = [100, 250, 500, 1200];
foreach ($prices as $price) {
    echo "$price руб. ";
}
?>

<?php
$i = 1;
while ($i <= 3) {
    echo "Число: $i ";
    $i++;
}
?>
