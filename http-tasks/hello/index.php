<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветсвие</title>
</head>
</html>
    <?php
    $name = $_GET["name"] ?? "";
    if (trim($name) != " ") {
    echo "Привет, " . $name . "!";
    } else {
    echo "Привет, гость!";
    }
    ?>

