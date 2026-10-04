<?php
$languages = ['PHP', 'JavaScript', 'Python'];
echo $languages[1]; 
echo "<br>";

print_r($languages); 
?>

<?php
$animals = ['кот', 'собака', 'попугай'];

$animals[1] = 'свинка';
$animals[] = 'хомяк';

print_r($animals);
?>

<?php
$months = ['январь', 'февраль', 'март', 'апрель'];

unset($months[3]); 

print_r($months);
?>


<?php
$book = [
    'title' => 'Капитанская дочка',
    'author' => 'А. С. Пушкин',
    'pages' => 192
];

print_r($book);
?>


<?php
$car = [
    'brand' => 'Toyota',
    'model' => 'Camry'
];

print_r($car);
?>
