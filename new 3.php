<?php
function getGreeting($name) {
return "Привет , " . $name . "! ";
}

<?php
echo getGreeting("Артем");
echo getGreeting("Боган");
echo getGreeting("Иван");


<?php
$width = 5;
$length = 10;
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

$area = calculateRectangleArea($width, $length);
echo $area * 2;

?>

 <?php
function makeCoffee($type, $sugar = 0) {
    return "Ваш кофе: $type, сахара: $sugar ложек";
}

echo makeCoffee("латте", 2); 
echo makeCoffee("эспрессо");
?>

 <?php
$discount = 50; 

function applyDiscount($price, $discount) {
    return $price - $discount;
}

echo applyDiscount(500, $discount);

function processComment($commentText) {
    $trimmedComment = trim($commentText);
    if (strlen($trimmedComment) < 5) {
        return "Комментарий слишком короткий";
    } else {
        return "Комментарий принят";
    }
}


